
<form wire:submit.prevent="store()">
    <div class="w-5/6 mx-auto border border-gray-200 rounded-lg p-5">
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input wire:model.defer='rol.name'  class="block mt-1 w-full" type="text"   />
                @error('rol.name')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
    
        
            <div class="flex items-center justify-end mt-4">
                
    
                <x-jet-button class="ml-4">
                    {{ __('Agregar') }}
                </x-jet-button>
            </div>
       
    </div>
    </form>