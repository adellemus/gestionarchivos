<form wire:submit.prevent="save()">

    <input type="file" class=" h-10 w-36 block" wire:model.defer="archivo">

 

    @error('archivo') <span class="error">{{ $message }}</span> @enderror

 


    <x-jet-button type="submit" class="ml-4 text-base">
        cargar archivo
    </x-jet-button>
</form>