<div>
    <div class="w-10/12 mx-auto">
        <div class="w-full text-3xl text-center font-bold">Documentos</div>
        <div class=" w-full flex justify-between mb-7 ">
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

        <div class="w-full gap-3 grid grid-cols-12 ">
            <div class=" col-span-4  border rounded-md border-gray-200">
                <div class="my-5  h-56 p-5 ">
                    @switch($accion)
                        @case(1)
                            @include('livewire.control.archivo.create-archivo')
                        @break

                        @default
                            formilarios
                    @endswitch

                </div>
            </div>
            <div class=" col-span-8 border rounded-md border-gray-200 ">
                <div class="w-full text-2xl text-gray-700 text-center">carpeta personal</div>
                <div class=" flex p-2 w-full">
                    
                    <x-laravel-blade-sortable::sortable class=" flex flex-wrap gap-2" name="carpeta 1">
                        @foreach ($archivos as $iten)
                            @can($iten->nombre_permiso)
                                <x-laravel-blade-sortable::sortable-item
                                    class="p-2 w-24 border h-16  border-gray-300 rounded-md pt-2"
                                    sort-key="{{ $iten->name }}">


                                    @if ($iten->extencion == 'jpg' or $iten->extencion == 'png')
                                        <img class="h-full mx-auto  object-scale-down" src="{{ asset($iten->url) }}"
                                            alt="">
                                    @else
                                        <div class="block text-4xl relative text-center">
                                            <i class="bi bi-filetype-{{ $iten->extencion }}"></i>
                                        </div>
                                        <div class="text-center text-xs truncate">
                                            {{ $iten->name }}
                                        </div>
                                    @endif


                                </x-laravel-blade-sortable::sortable-item>
                            @endcan
                        @endforeach
                    </x-laravel-blade-sortable::sortable>
                </div>
            </div>

        </div>







    </div>


    <div class="w-10/12 mx-auto text-center text-5xl" >
        <h1>cuadro de los roles con quien quiero compartir los acrchivos</h1>
    </div>

</div>
