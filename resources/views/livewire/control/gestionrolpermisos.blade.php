<div class="mx-auto w-10/12">

    <div class=" flex justify-between w-full px-20 mb-5 h-10  ">
        <h1>
            <i class="bi bi-person-lines-fill mr-2"></i> Gestion de roles y permisos
        </h1>
        {{--         <x-jet-button type="button" class=""  class="ml-4 text-md">
         nuevo rol 
        </x-jet-button> --}}
    </div>

    <div class=" grid grid-cols-6 ">
        <div class=" col-span-2">

            @include('livewire.control.roles.create_rol')

        </div>
        <div class=" col-span-4 ">
            <div class="grid grid-cols-2 gap-5">
                <div class=" min-h-56 p-5 border border-gray-200 rounded-xl">
                    @foreach ($allroles as $rol)
                        <div class="w-full h-8 p-2 rounded-2xl my-2 cursor-pointer">
                            <div wire:click="delete('{{$rol->id}}')" class=" inline-block py-1 px-1 text-red-900 hover:bg-red-100 bg-red-200 rounded-md border border-red-200 ">
                                <i class="bi bi-trash3"></i></div>
                            <div wire:click="edit('{{$rol->id}}')" 
                            class=" inline-block capitalize  ">{{ $rol->name }}</div>
                            <div class=" inline-block"><i class="bi bi-chevron-double-right"></i></div>


                        </div>
                    @endforeach
                </div>
                @if ($rol_select->name)
             
               
                <div class=" min-h-56 p-5 border border-gray-200 rounded-xl">
                    <div class="w-full text-2xl text-center text-gray-800" >
                        @if ($rol_select)
                        {{$rol_select->name}}
                       @endif
                    </div>
                   
                    @if ($allpermisos->where('seccion','=','nav')->count() > 0)
                    <div class=" col-span-2 text-left font-extrabold border-b border-gray-200   ">barra de navegacion
                    </div>
                       @foreach ($allpermisos->where('seccion','=','nav') as $permiso)
                        <div class="capitalize w-full h-8 p-2 rounded-2xl my-2 bg-blue-200 text-blue-900">
                            {{ $permiso->descrip }} <input wire:model='select_permisos' value="{{ $permiso->id }}" type="checkbox">
                        </div>
                    @endforeach  
                    @endif
                    @if ($allpermisos->where('seccion','=','panel')->count() > 0)
                    <div class=" col-span-2 text-left font-extrabold border-b border-gray-200   ">Panel de control
                    </div>
                       @foreach ($allpermisos->where('seccion','=','panel') as $permiso)
                        <div class="capitalize w-full h-8 p-2 rounded-2xl my-2 bg-blue-200 text-blue-900">
                            {{ $permiso->descrip }} <input wire:model='select_permisos' value="{{ $permiso->id }}" type="checkbox">
                        </div>
                    @endforeach  
                    @endif
                    @if ($allpermisos->where('seccion','=','user')->count() > 0)
                    <div class=" col-span-2 text-left font-extrabold border-b border-gray-200   ">vista usuario
                    </div>
                       @foreach ($allpermisos->where('seccion','=','user') as $permiso)
                        <div class="capitalize w-full h-8 p-2 rounded-2xl my-2 bg-blue-200 text-blue-900">
                            {{ $permiso->descrip }} <input wire:model='select_permisos' value="{{ $permiso->id }}" type="checkbox">
                        </div>
                    @endforeach  
                    @endif
                   


                    <x-jet-button class="mt-5 mx-auto" wire:click='actualizapermisos'>
                        {{ __('Actualizar') }}
                    </x-jet-button>
                </div>
                @endif
            </div>

        </div>
    </div>



</div>
