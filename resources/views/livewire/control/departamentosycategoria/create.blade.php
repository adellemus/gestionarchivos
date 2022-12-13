<div class="w-full">


    <x-jet-label  value="{{ __('Nombre del Departamento') }}" />
    <x-jet-input wire:model='name_depart'   class="block mt-1 w-full" type="text"  />
    @error('name_depart')
    <span class="text-red-500 text-xs italic">{{ $message }}</span>
    @enderror

    @foreach ($roles as $rol)
    <div><input wire:model.defer='select_rol' value="{{ $rol->id }}" type="checkbox"> {{$rol->name}}</div>
    

    @endforeach
    @error('select_rol')
    <span class="text-red-500 text-xs italic">{{ $message }}</span>
    @enderror
    <x-jet-button wire:click='save_depart'  class="ml-4 mt-3">
        {{ __('Agregar') }}
    </x-jet-button>

</div>