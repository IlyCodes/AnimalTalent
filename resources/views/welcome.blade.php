@extends('animal.layout')

@section('title')
COMPETITION
@endsection

@section('content')

<div class="bg-white">

  <div class="relative isolate px-6 pt-10 lg:px-8">
    <div class="mx-auto max-w-2xl">
      <img src="{{ asset('/banner/animalBanner.png') }}" alt="bn">
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Welcome to the Animal Talent Competition!</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Are you ready to be amazed by the incredible talents of our furry, feathered, and scaly friends? We are thrilled to invite you to an extraordinary journey into the world of animal talent where the extraordinary becomes ordinary.</p>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>

<div class="bg-white">
  <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
      <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
        <defs>
          <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
            <stop stop-color="#7775D6" />
            <stop offset="1" stop-color="#E935C1" />
          </radialGradient>
        </defs>
      </svg>
      <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Animal Competition Showcases.</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300">Whether it's the heartwarming tricks of dogs, the graceful acrobatics of cats, the melodic tunes of singing birds, or the mesmerizing agility of reptiles, our competition showcases the exceptional abilities of animals from all walks of life.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
          <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
      <div class="relative mt-16 h-80 lg:mt-8">
        <img class="absolute left-0 top-0 w-[52rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10" src="{{ asset('/imgs/animals.png') }}" alt="App screenshot" width="1824" height="1080">
      </div>
    </div>
  </div>
</div>

<div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
      <defs>
        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M100 200V.5M.5 .5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
    </svg>
  </div>
  <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
      <div class="lg:pr-4">
        <div class="lg:max-w-lg">
          <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Join us as</h1>
          <p class="mt-6 text-xl leading-8 text-gray-700">we celebrate the unique bond between humans and animals and witness the incredible feats that these talented creatures can accomplish. From delightful performances to awe-inspiring displays of intelligence, the Animal Talent Competition is a platform dedicated to showcasing the remarkable capabilities of our beloved companions.

            Through our user-friendly web application, you can explore the diverse range of talents, learn more about the contestants, and even cast your votes to support your favorite animal talents. Stay connected with the latest updates, behind-the-scenes stories, and exclusive interviews with trainers and participants.

            Whether you're an animal lover, a trainer, or simply someone who appreciates the incredible wonders of the animal kingdom, the Animal Talent Competition welcomes you with open arms. Prepare to be captivated, inspired, and entertained as we embark on this thrilling adventure together.</p>
        </div>
      </div>
    </div>
    <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
      <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="{{ asset('/imgs/dog_owners.jpg') }}" alt="">
    </div>
    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
      <div class="lg:pr-4">
        <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
          <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">No animal? No problem.</h2>
          <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat vulputate nibh. Maecenas pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi. Pellentesque nam sed nullam sed diam turpis ipsum eu a sed convallis diam.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">

      <div class="max-w-xl lg:max-w-lg">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Subscribe to our newsletter.</h2>
        <p class="mt-4 text-lg leading-8 text-gray-300">Nostrud amet eu ullamco nisi aute in ad minim nostrud adipisicing velit quis. Duis tempor incididunt dolore.</p>
        <div class="mt-6 flex max-w-md gap-x-4">
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Enter your email">
          <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
        </div>
      </div>

      <div class="grid grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 lg:pt-2">

        <div class="flex flex-col items-start">
          <a href="{{ route('animals.index') }}" class="text-m font-semibold leading-6 text-white hover:underline">Animals</a><br>
          <a href="{{ route('owners') }}" class="text-m font-semibold leading-6 text-white hover:underline">Owners</a><br>
          <a href="{{ route('competitions') }}" class="text-m font-semibold leading-6 text-white hover:underline">Competitions</a><br>
          <a href="{{ route('about_us') }}" class="text-m font-semibold leading-6 text-white hover:underline">About Us</a>
        </div>

        <div class="flex flex-col items-start">
          <a href="{{ route('create_judge') }}" class="text-m font-semibold leading-6 text-white hover:underline">Apply as a new judge<span aria-hidden="true">&rarr;</span></a><br>
          <a href="{{ route('animals.create') }}" class="text-m font-semibold leading-6 text-white hover:underline">Apply as a new owner<span aria-hidden="true">&rarr;</span></a><br>
          <a href="{{ route('add_new_animal') }}" class="text-m font-semibold leading-6 text-white hover:underline">Add your new Animal<span aria-hidden="true">&rarr;</span></a><br>
          <a href="{{ route('dashboard') }}" class="text-m font-semibold leading-6 text-white hover:underline">Admin Dashboard<span aria-hidden="true">&rarr;</span></a>
        </div>

      </div>

    </div>
  </div>
  <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
    <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
</div>




@endsection