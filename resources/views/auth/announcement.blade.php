<x-layout>
    <header class="text-center mt-24">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit Announcement</h2>
    </header>
    @foreach($announcement as $announce)
    <div class ="mt-2 max-w-lg mx-auto">
        <x-card>
        <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
        src="{{$announce->image ? asset('storage/' . $announce->image) : asset('/images/no-image.png')}}" alt="" />
        <div>
        <h3 class="text-2xl">
        {{$announce->title}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$announce->description}}</div>
        </div>
    </div class= "">
    <button class="bg-laravel text-white rounded py-2 px-4 m-6 hover:bg-black">
          Delete
        </button>
    </x-card>
    </div>
@endforeach
    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <form method="POST" action="/add/announcement/" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          Add image
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />

    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"/>


      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">Description</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="description"/>
        <div class="mt-4 text-center">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Save
        </button>
        </div>
    </x-card>
</x-layout>