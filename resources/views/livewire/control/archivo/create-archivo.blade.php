<div class="">
    <div class="w-full text-base text-center text-red-400" wire:loading wire:target='save,archivo'>cargando</div>

   

    <input type="file" accept=".pdf,.docx,.doc,.png,.jpg" class="  w-full mb-3 h-10 border border-gray-300 bg-white rounded-md p-1 pl-5 block" wire:model.defer="archivo">
    <x-jet-input-error for='archivo' class="mb-2" />

    <x-jet-button wire:click="save" wire:loading.attr='disabled' wire:targe='save,archivo' class="ml-4 text-base">
        guardar archivo
    </x-jet-button>
</div>
