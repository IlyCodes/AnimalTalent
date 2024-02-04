@extends('animal.layout')

@section('title')
    Competitions
@endsection

@section('content')
    
    <div class="lg:ml-48 lg:mr-48 lg:mt-12 relative overflow-x-auto">
        <table class="w-full text-sm text-left border border-indigo-200 rounded-lg text-indigo-500">

            <thead class="text-xs text-indigo-700 uppercase bg-indigo-50">

                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        COMPETITION
                    </th>
                    <th scope="col" class="px-6 py-3">
                        COMPETITIVES
                    </th>
                    <th scope="col" class="px-6 py-3">
                        JUDGE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Winner
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DATE
                    </th>
                </tr>
                
            </thead>

            <tbody>

                @foreach($competitions as $competition)
                <tr class="bg-white border-b">

                    <td class="px-6 py-4">
                        {{ $competition -> id }}
                    </td>

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <a href="{{ route('show_competition', $competition -> id) }}">{{ $competition -> name }}</a>
                    </th>
                    
                    <td class="px-6 py-4">
                         
                        {{ $competition -> animals_count }}
                        
                    </td>

                    <td class="px-6 py-4">
                        <a href="{{ route('show_judge', $competition->judge->id) }}">{{ $competition->judge->firstname }}</a>
                    </td>

                    <td class="px-6 py-4">
                        
                            @foreach($competition->animals as $a)
                                @if($competition->winner == $a->name)
                                    <a href="{{ route('animals.show', $a->id) }}">{{ $competition -> winner }}</a>
                                @endif
                            @endforeach
                            
                    </td>

                    <td class="px-6 py-4">
                        {{ $competition -> date }}
                    </td>

                </tr>
                @endforeach
                
            </tbody>

        </table>
    </div>

@endsection