@extends('animal.layout2')

@section('title')
Add New Animal
@endsection

@section('content')

<form action="{{ route('add_animal') }}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="space-y-12 p-12 lg:ml-48 lg:mr-48">

        <div class="border-b border-gray-900/10 pb-12">

            <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-3">
                    <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">Firstname</label>
                    <div class="mt-2">
                        <input type="text" name="firstname" id="firstname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

            </div>

        </div>
        <x-forms.petForm />
    </div>
    <x-forms.btn />

</form>


@endsection