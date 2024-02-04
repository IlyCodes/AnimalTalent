@extends('animal.layout')

@section('title')
    Competition
@endsection

@section('content')

<div class="lg:-mt-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-none lg:py-32">

        <div class="box-border sm:flex mb-4 border rounded-lg">

            <div class="lg:h-full lg:w-80 md:h-full md:w-full sm:h-full sm:w-full overflow-hidden">
                <img src="{{ asset('/imgs/medal.png') }}" alt="img" class="h-full w-full object-contain object-center rounded-md border border-gray-200">
            </div>
            
            <div class="ml-6 mt-2">

                <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4">{{ $competition -> name }}</h3>
                <span class="mt-1 pt-8 text-sm text-gray-500">Date: {{ $competition -> date }}</span><br><br>
                
                @foreach($competition->animals as $a)
                    @if($competition->winner == $a->name)
                        <span class="mt-1 pt-8 text-sm text-gray-500">Winner: </span>
                        <a class="text-indigo-600" href="{{ route('animals.show', $a->id) }}"> {{ $competition -> winner }} </a><br><br>
                    @endif
                @endforeach
                
                <span class="mt-1 text-sm text-gray-500">Judge: </span>
                <a class="text-indigo-600" href="{{ route('show_judge', $competition -> judge -> id) }}"> {{ $competition -> judge -> firstname }} </a> <br><br>

            </div>

        </div>

        <h2 class="text-2xl mt-6 font-bold text-gray-900">COMPETITIVES</h2>

        <div class="grid grid-cols-1 p-4 md:grid-cols-2 2xl:grid-cols-3">

            @foreach($competition->animals as $a)
                <div class="box-border relative flex ml-4 mb-4 border rounded-lg">
        
                    <div class="h-48 w-48">
                        <img src="{{ $a -> pet_photo }}" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center rounded-md border border-gray-200">
                    </div>
                    
                    <div class="ml-4 mt-2">

                        <h3 class="text-3xl font-semibold tracking-tight text-gray-900 mb-4">{{ $a -> name }}</h3>
                        <span class="mt-1 pt-8 text-sm text-gray-500">{{ $a -> species }}</span><br>
                        <span class="mt-1 text-sm text-gray-500">Owned By: </span>
                        <a class="text-indigo-600" href="{{ url('animals/owner', $a -> owner_id) }}"> {{ '@'.$a -> owner -> firstname }} </a>
                        
                    </div>
                    
                    <a href="{{ route('animals.show', $a -> id) }}" type="button" class="absolute bottom-0 right-0 mb-4 mr-4 font-medium text-indigo-600 hover:text-indigo-500">More Details<span aria-hidden="true">&rarr;</span></a>
                
                </div>
            @endforeach

        </div>

    </div>
  </div>
</div>


@endsection