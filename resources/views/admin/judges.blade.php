@extends('dashboard')

@section('content')

    
    <div class="relative overflow-x-auto shadow-md mt-2 lg:ml-48 lg:mr-48 sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        firstname
                    </th>
                    <th scope="col" class="px-6 py-3">
                        lastname
                    </th>
                    <th scope="col" class="px-6 py-3">
                        expertise
                    </th>
                    <th scope="col" class="-px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach($judges as $j)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $j -> firstname }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $j -> lastname }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $j -> expertise }}
                    </td>
                    <td class="-px-6 py-4">
                        <form action="{{ route('judges.destroy', $j->id) }}" method="post">
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