@extends('dashboard')

@section('content')

    
    <div class="relative overflow-x-auto shadow-md mt-2 lg:ml-48 lg:mr-48 sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Species
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Age
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Owned By
                    </th>
                    <th scope="col" class="-px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach($animals as $a)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $a -> name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $a -> species }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $a -> age }}j
                    </td>
                    <td class="px-6 py-4">
                        {{ $a -> owner -> firstname }} {{ $a -> owner -> lastname }}
                    </td>
                    <td class="-px-6 py-4">
                        <form action="{{ route('animals.destroy', $a->id) }}" method="post">
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