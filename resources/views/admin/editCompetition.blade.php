@extends('dashboard')

@section('content')

    <form action="{{ route('update_competition', $competitionData->id) }}" method="post">
    
        @csrf
        @method('PUT')
        <div class="lg:ml-48 lg:mr-48 ml-4 mr-4">

            <div class="mt-10 grid grid-cols-2 gap-x-6 gap-y-8">
                <div class="sm:col-span-1">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                <div class="mt-2">
                    <input type="text" name="name" id="name" value="{{ $competitionData->name }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-1">
                <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                <div class="mt-2">
                    <input type="date" name="date" id="date" value="{{ $competitionData->date }}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
                
                <div class="sm:col-span-1">
                    <label for="winner" class="block text-sm font-medium leading-6 text-gray-900">Winner</label>
                    <div class="mt-2">
                        <input type="text" name="winner" id="winner" value="{{ $competitionData->winner }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                <!-- <div class="mt-2">
                    <select class="rounded-lg" name="expertise" id="expertise">
                        <option value="Bird Examiner">Bird Examiner</option>
                        <option value="Dog Examiner">Dog Examiner</option>
                        <option value="Cat Examiner">Cat Examiner</option>
                        <option value="Pet Examiner">Pet Examiner</option>
                    </select>
                </div> -->
                </div>

                <div class="sm:col-span-1">
                <label for="finished" class="block text-sm font-medium leading-6 text-gray-900">Finished</label>
                <div class="mt-2">
                    <input type="number" name="finished" id="finished" value="{{ $competitionData->finished }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2">
                <label for="judge" class="block text-sm font-medium leading-6 text-gray-900">Judge</label>
                <div class="mt-2">
                    <select class="rounded-lg" name="judge_id" id="judge">

                        <option class="hidden" value="{{ $judge -> id }}">{{ $judge -> firstname }} {{ $judge -> lastname }}</option>

                        @foreach($judges as $judge)

                            <option value="{{ $judge->id }}">{{ $judge->firstname }} {{ $judge->lastname }}</option>

                        @endforeach

                    </select>
                </div>
                </div>
            
            </div>

            <x-forms.btn />
            
        </div>


    </form>

@endsection