<div>
  <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>

  <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
    <div class="sm:col-span-3">
      <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">Firstname</label>
      <div class="mt-2">
        <input type="text" name="firstname" id="firstname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div class="sm:col-span-3">
      <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Lastname</label>
      <div class="mt-2">
        <input type="text" name="lastname" id="lastname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div class="sm:col-span-3">
      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
      <div class="mt-2">
        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div class="sm:col-span-3">
      <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
      <div class="mt-2">
        <input id="phone" name="phone" type="number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div class="col-span-full">
      <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
      <div class="mt-2">
        <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
      </div>
      <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
    </div>

    <div class="col-span-full">
      <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
      <div class="mt-2 flex items-center gap-x-3">
        <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
        </svg>
        <input name="photo" type="file" class="rounded-md bg-white text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">

      </div>
    </div>

  </div>
</div><?php /**PATH C:\xampp\htdocs\www\animalTalent\resources\views/components/forms/ownerForm.blade.php ENDPATH**/ ?>