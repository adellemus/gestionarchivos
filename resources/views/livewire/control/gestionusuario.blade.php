<div class="">
    <div class=" text-center text-5xl text-gray-800 w-full px-5 mb-5">Usuarios</div>

    @if ($updateMode)
    @include('livewire.control.update')
@else
    @include('livewire.control.create')
@endif

<x-jet-section-border />
<div class=" text-center text-5xl text-gray-800 w-full px-5 mb-5">listado Usuarios</div>

    <div class="grid grid-cols-4 mt-10 border pb-1/3 border-gray-100 rounded-md w-10/12 mx-auto">
        <div class="h-19 py-5 font-bold text-md text-gray-800 text-left capitalize pl-2  ">nombre</div>
        <div class="h-19 py-5 font-bold text-md text-gray-800 text-left capitalize pl-2  ">email</div>
        <div class="h-19 py-5 font-bold text-md text-gray-800 text-left capitalize pl-2  ">roles</div>
        <div class="h-19 py-5 font-bold text-md text-gray-800 text-left capitalize pl-2  ">acciones</div>
     

        @foreach ($users as $key => $user)
            <div class="h-19 py-5 font-normal text-xs text-gray-800 text-left capitalize pl-2 ">
                {{$user->name}}
            </div>
            <div class="h-19 py-5 font-normal text-xs text-gray-800 text-left capitalize pl-2  ">
                {{$user->email}}
            </div>
            <div class="h-19 py-5 font-normal text-xs text-gray-800 text-left capitalize pl-2  ">
                
                {{$user->roles()->pluck('name')}}

            </div>
            
            <div class="h-19 py-5 grid grid-cols-4 font-normal text-xl text-gray-800 text-left capitalize pl-2  ">
                <i wire:click="delete('{{$user->id}}')" class=" text-red-500 bi bi-trash3"></i>
                <i class=" text-green-500 bi bi-pencil"></i>
                <i class=" text-blue-500 bi bi-eye"></i>
                <i class=" text-purple-800 bi bi-gear"></i>
            </div>
        @endforeach
    </div>








</div>
