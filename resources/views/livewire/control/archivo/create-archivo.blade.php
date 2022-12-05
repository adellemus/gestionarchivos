
<div >
    <div class="w-full text-base text-center text-red-400" wire:loading wire:target='save,archivo'>cargando</div>
    <input type="file" class=" h-10 w-full block" wire:model.defer="archivo">
    @error('archivo') <span class="error">{{ $message }}</span> @enderror

    <x-jet-button wire:click="save" wire:loading.attr='disabled' wire:targe='save,archivo' class="ml-4 text-base">
        cargar archivo
    </x-jet-button>
</div>

