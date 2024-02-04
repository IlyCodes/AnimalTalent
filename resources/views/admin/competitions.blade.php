@extends('dashboard')

@section('content')

    
    <div class="relative overflow-x-auto shadow-md mt-2 lg:ml-48 lg:mr-48 sm:rounded-lg">

        <a href="{{ route('create_competition') }}" class="text-indigo-700 absolute right-0 p-2 mr-2 hover:underline">CREATE</a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        judge
                    </th>
                    <th scope="col" class="px-4 py-3">
                    </th>

                    <th scope="col" class="px-4 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach($competitions as $c)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $c -> id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $c -> name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $c -> date }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $c -> judge -> firstname }} {{ $c -> judge -> lastname }}
                    </td>
                    <td class="py-4">
                        <a href="{{ route('edit_competition', $c->id) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                    </td>
                    <td class="px-2 py-4">
                        <form action="{{ route('competitions.destroy', $c->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="font-medium text-red-600 hover:underline" onclick="return confirm('Are you sure?')" type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
 

@endsection