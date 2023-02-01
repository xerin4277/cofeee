<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-transparent overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <header class="text-center mt-24">
      <h2 class="text-4xl rounded-lg font-black h-10 bg-amber-500 uppercase mb-1">Edit Announcements</h2>
    </header>
    @foreach($announcement as $announce)
    <div class ="mt-2 max-w-lg mx-auto">
        <x-card class="bg-amber-400 rounded-lg border-amber-400">
        <div class="flex rounded-md">
        <img class="hidden w-48 mr-6 md:block"
        src="{{$announce->image ? asset('storage/' . $announce->image) : asset('/images/no-image.png')}}" alt="" />
        <div>
        <h3 class="text-2xl">
        {{$announce->title}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$announce->description}}</div>
        </div>
    </div class= "">
    <div class="mt-5 flex space-x-5 pl-24 ml-11 ">
    <form method="POST" action="/announcement/user/{{$announce->id}}">
              @csrf
              @method('DELETE')
              <button class="mt-2 bg-red-500 text-white rounded py-2 px-4 hover:bg-black"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
            <button class="mt-2 bg-red-500 text-white rounded py-2 px-4 hover:bg-black"><i class="fa-solid fa-trash"></i><a href="/announcement/edit/{{$announce->id}}">Edit</a></button>
            </div>
          </x-card>

    </div>
@endforeach
    <x-card class="p-10 max-w-lg mx-auto mt-24 bg-green-700 rounded-lg border-red-500">
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