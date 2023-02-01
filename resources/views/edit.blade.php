<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-transparent overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <header class="text-center mt-24">
      <h2 class="text-4xl rounded-lg font-black h-10 bg-amber-500 uppercase mb-1">Edit Announcements</h2>
    </header>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <form method="POST" action="/announcement/update/{{$announcement->id}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2 text-center ">
          Update Image
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full"  name="image" />
        <img class="w-48 mr-6 mb-6"
        src="{{$announcement->image ? asset('storage/' . $announcement->image) : asset('/images/no-image.png')}}" alt="" />
    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Title</label>
        <input type="text" value="{{$announcement->title}}"class="border border-gray-200 rounded p-2 w-full" name="title"/>


      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">Description</label>
        <input type="text" value="{{$announcement->description}}" class="border border-gray-200 rounded p-2 w-full" name="description"/>
        <div class="mt-4 text-center">
        <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
          Save
        </button>
        </div>
    </x-card>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>