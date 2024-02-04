@extends('animal.layout')

@section('title')
    Owners
@endsection

@section('content')

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet our Pet Owners</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 grid-cols-2 md:grid-cols-3 lg:grid-cols-3 lg:gap-y-16 xl:col-span-2">
            @foreach($owners as $owner)
            <a class="text-indigo-600 flex items-center justify-center border rounded-lg shadow-44" href="{{ url('animals/owner', $owner -> id) }}"> 
                <li class="p-2">
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="{{$owner -> photo}}" alt="owner_photo">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{$owner -> firstname}} {{$owner -> lastname}}</h3>
                            <p class="text-sm font-semibold leading-6 text-indigo-600">Pet Owner</p>
                        </div>
                    </div>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
    </div>

@endsection