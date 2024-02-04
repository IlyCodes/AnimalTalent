@extends('animal.layout2')

@section('title')
Add
@endsection

@section('content')

<form action="{{ route('animals.store') }}" method="post" enctype="multipart/form-data">
  
  @csrf
  <div class="space-y-12 p-12 lg:ml-48 lg:mr-48">
    <div class="border-b border-gray-900/10 pb-12">
      <x-forms.ownerForm />
    </div>
      <x-forms.petForm />
  </div>
    <x-forms.btn />

</form>

@endsection