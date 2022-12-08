<div class="w-full">
    <x-jet-label  value="{{ __('Nombre de la Categoria') }}(Dep. {{$departamento_seleccionado->name}})" />
    <x-jet-input wire:model='name_cat'   class="block mt-1 w-full" type="text"  />
    @error('name_cat')
    <span class="text-red-500 text-xs italic">{{ $message }}</span>
    @enderror

    <x-jet-button wire:click='save_cat'  class="ml-4 mt-3">
        {{ __('Agregar') }}
    </x-jet-button>

</div>