@extends('animal.layout')

@section('title')
About US
@endsection

@section('content')

<h1 class="flex justify-center mt-10 text-3xl font-bold tracking-tight text-gray-900 lg:text-4xl">About Us</h1>

<section class="bg-white dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 grid grid-cols-1 lg:grid-cols-2 sm:py-16 lg:px-6">
        <div class="mt-4 md:mt-0">
            <h1 class="mt-2 text-3xl font-semibold tracking-tight text-gray-900">Our Story</h1>
            <p class="mt-6 text-xl leading-8 text-gray-700 mb-4">Animal Talent is all about helping humans understand their dogs. Our clients believe their dogs deserve the very best and we think so too!
                Our Certified Dog Trainers only use kind, positive reward-based training techniques. Why? Because your dog should be treated with love, patience and respect. Whether you have a puppy just starting out, a pound rescue or a dog who is having a behavioural issue, we can help.

                In our Puppy Success and Beginners classes dogs learn The Six-pack of Core Behaviours – Sit, Stay, Down, Come, Quiet and Loose-lead Walking, with fun games and exercises to reinforce their newly acquired skills. In your lessons, you will learn the take-home skills that will help you easily fit training into your daily life.

                Whether you choose Group Classes, Online Dog Training Courses, Private Dog Training Lessons or Lessons in your own Home we have an option to fit your needs.

                Our Animal Talent Certified Dog Trainers are here to help humans of all experience levels understand how their puppies and dogs think and how to train them. Group Classes including Puppy Success, Agility, Obedience and Beginners are held at our fully-fenced and grassed Dog Training School in Woy Woy.
            </p>
        </div>
        <img class="w-[57rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 md:w-[74rem] lg:w-[67rem]" src="{{ asset('/imgs/dog_owners.jpg') }}" alt="">
    </div>
</section>

@endsection