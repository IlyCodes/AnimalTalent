@extends('animal.layout')

@section('title')
SHOW
@endsection

@section('content')

<div class="lg:-mt-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-none lg:py-32">

        <div class="box-border sm:flex mb-4 border rounded-lg">

            <div class="lg:h-80 lg:w-full md:h-full md:w-full sm:h-full sm:w-full overflow-hidden">
                <img src="{{ $animal -> pet_photo }}" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center rounded-md border border-gray-200 hover:object-contain">
            </div>
            
            <div class="ml-6 mt-2">

                <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4">{{ $animal -> name }}</h3>
                <span class="mt-1 pt-8 text-sm text-gray-500">Species: {{ $animal -> species }}</span><br><br>
                <span class="mt-1 text-sm text-gray-500">Owned By: </span>
                <a class="text-indigo-600" href="{{ url('animals/owner', $animal -> owner_id) }}"> {{ '@'.$animal -> owner -> firstname }} </a> <br><br>
                <p><span class="mt-1 text-sm text-gray-500">About: </span>{{ $animal -> description }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati facilis enim iste deleniti doloribus quas distinctio, eligendi optio praesentium ex dolor quibusdam nemo numquam quis sint, sequi et, eaque repellat.</p>
                
            </div>

        </div>

        <h2 class="text-2xl mt-6 font-bold text-gray-900">Competitions</h2>

        <div class="grid grid-cols-1 p-4 md:grid-cols-2 2xl:grid-cols-3">

            @foreach($animal->competitions as $c)
                <div class="box-border relative flex ml-4 mb-4 border rounded-lg">
        
                    <div class="h-48 w-48">
                        <img src="{{ asset('/imgs/medal.png') }}" alt="image" class="h-full w-full object-cover object-center rounded-md border border-gray-200">
                    </div>
                    
                    <div class="ml-4 mt-2">

                        <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4">{{ $c -> name }}</h3>
                        <span class="mt-1 pt-8 text-sm text-gray-500">Date: {{ $c -> date }}</span><br>
                        <span class="mt-1 text-sm text-gray-500">Judge: </span>
                        <a class="text-indigo-600" href="{{ route('show_judge', $c-> judge -> id) }}"> {{ '@' . $c-> judge -> firstname }} </a> <br><br>
                        
                    </div>
                    
                    <a href="{{ route('show_competition', $c -> id) }}" type="button" class="absolute bottom-0 right-0 mb-4 mr-4 font-medium text-indigo-600 hover:text-indigo-500">More Details<span aria-hidden="true">&rarr;</span></a>
                
                </div>
            @endforeach

        </div>

    </div>
  </div>
</div>


@endsection