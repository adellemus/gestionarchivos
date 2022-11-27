<div> 
    <div class=" flex justify-between w-full px-20 mb-5 h-10  " > 
        <h1>Gestion de usuario</h1>
        <x-jet-button type="button" class="" wire:click="btnagregar()" class="ml-4">
            {{ __('Agregar usuario') }}
        </x-jet-button>
        
    </div>
    <div class=" grid grid-cols-6">
       
        <div id="formularios" class=" col-span-2">

            @switch($updateMode)
                @case(1)
                @include('livewire.control.create')
                @break
                @case(2) 
                @include('livewire.control.update')
                @break
                @case(3)
                @include('livewire.control.roles')
                @break
                @case(4)
                @include('livewire.control.img')
                @break
                @default
            @endswitch

        </div>
        <div id="listado" class=" col-span-4">
            <div class="grid grid-cols-4 border pb-1/3 border-gray-100 rounded-md w-10/12 mx-auto">
                <div class="h-19 py-5 font-bold text-md text-gray-800 text-left capitalize pl-2  ">nombre</div>
                <div class="h-19 py-5 font-bold text-md text-gray-800 text-left capitalize pl-2  ">email</div>
                <div class="h-19 py-5 font-bold text-md text-gray-800 text-left capitalize pl-2  ">roles</div>
                <div class="h-19 py-5 font-bold text-md text-gray-800 text-left capitalize pl-2  ">acciones</div>


                @foreach ($users as $key => $user)
                    <div class="h-19 py-5 font-normal text-xs text-gray-800 text-left capitalize pl-2 ">
                        {{ $user->name }}
                    </div>
                    <div class="h-19 py-5 font-normal text-xs text-gray-800 text-left capitalize pl-2  ">
                        {{ $user->email }}
                    </div>
                    <div class="h-19 py-5 font-normal text-xs text-gray-800 text-left capitalize pl-2  ">

                        {{ $user->roles()->pluck('name') }}

                    </div>

                    <div
                        class="h-19 py-5 grid grid-cols-4 font-normal text-xl text-gray-800 text-left capitalize pl-2  ">
                        <i class="cursor-pointer text-red-500 bi bi-trash3"
                            wire:click="delete('{{ $user->id }}')"></i>
                        <i class=" cursor-pointer text-green-500 bi bi-pencil"
                            wire:click="edit('{{ $user->id }}')"></i>
                        <i class=" cursor-pointer text-blue-500 bi bi-eye"></i>
                        <i class=" cursor-pointer text-purple-800 bi bi-gear"
                            wire:click="vconfi('{{ $user->id }}')"></i>
                    </div>
                @endforeach
            </div>
        </div>
        {{--     <div class=" text-center text-5xl text-gray-800 w-full px-5 mb-5">Usuarios</div>

   
    <x-jet-section-border />
    <div class=" text-center text-5xl text-gray-800 w-full px-5 mb-5">listado Usuarios</div> --}}










    </div>
</div>
