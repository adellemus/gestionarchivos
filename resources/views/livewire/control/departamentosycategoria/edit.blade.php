<div class="w-full">
    <x-jet-label  value="{{ __('Nombre del Departamento') }}" />
    <x-jet-input wire:model='name_depart'   class="block mt-1 w-full" type="text"  />
    @error('name_depart')
    <span class="text-red-500 text-xs italic">{{ $message }}</span>
    @enderror

    <x-jet-button wire:click='update_depart'  class="ml-4 mt-3">
        {{ __('Actualizar') }}
    </x-jet-button>

</div>