<x-app-layout>
    <div class="py-12">
            <div class=" bg-transparent overflow-hidden sm:rounded-lg ">
        @if($admin == 1)
        @foreach($users as $user)
        @if($user->id != 1)
    <div class ="mt-2 max-w-lg mx-auto ">
        <x-card class="bg-amber-400 rounded-lg border-amber-400">
        <div class="flex rounded-md">
        <img class="hidden w-48 mr-6 md:block"
        src="{{$user->image ? asset('storage/' . $user->image) : asset('/images/logoo.png')}}" alt="" />
        <div>
        <h3 class="text-2xl">
        {{$user->name}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$user->description}}</div>
        </div>
    </div class= "">
            <form method="POST" action="/delete/users/{{$user->id}}">
              @csrf
              @method('DELETE')
              <button class="mt-2 bg-red-500 text-white rounded py-2 px-4 hover:bg-black"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
    </x-card>
    </div>
    @endif
    @endforeach
    @endif
   
            </div>
</x-app-layout>