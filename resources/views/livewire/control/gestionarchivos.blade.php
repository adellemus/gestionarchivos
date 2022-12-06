<div class="w-10/12 mx-auto">
    <div class="w-full text-3xl text-center font-bold">Documentos</div>
    <div class=" w-full flex justify-between ">
        <h1>Gerstion de archivos y carpetas</h1>
        <div class="grid grid-cols-2 gap-5 text-2xl text-blue-500 ">
            <div><i wire:click="$set('accion','1')"
                    class="bi bi-folder-plus hover:text-white cursor-pointer bg-blue-200 rounded-md px-1 hover:bg-blue-500 border border-blue-400 "></i>
            </div>
            <div><i wire:click="$set('accion','2')"
                    class="bi bi-journal-plus hover:text-white cursor-pointer bg-blue-200 rounded-md px-1 hover:bg-blue-500 border border-blue-400"></i>
            </div>
        </div>
    </div>

    <div class="w-full grid grid-cols-12 ">
        <div class=" col-span-4">
            <div class="my-5 border h-40 p-5 border-gray-200 ">
                @switch($accion)
                    @case(1)
                        @include('livewire.control.archivo.create-archivo')
                    @break

                    @case(2)
                        @include('livewire.control.archivo.create-archivo')
                    @break

                    @default
                        formilarios
                @endswitch

            </div>
        </div>
        <div class=" col-span-8">
            @if ($vista==0)
            @include('livewire.control.archivo.vista-cuadro')
            @else 
            @include('livewire.control.archivo.vista-lista')    
            @endif
        </div>
    </div>







</div>
