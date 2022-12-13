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
                    @include('livewire.control.archivo.aplicar_permisos')
                @break    
                    @case(2)
                            @include('livewire.control.archivo.create-archivo')
                        @break

                        @default
                            formilarios
                    @endswitch

                </div>
            </div>
            <div class=" col-span-8 border rounded-md border-gray-200 ">

                <div class=" flex p-2 w-full">

                    <div class=" flex flex-wrap gap-2">
                        @foreach ($archivos as $iten)
                            @can($iten->nombre_permiso)
                                <div class=" relative p-2 w-24 border h-28  border-gray-300 rounded-md pt-2"
                                    sort-key="{{ $iten->id }}">


                                    @if ($iten->extencion == 'jpg' or $iten->extencion == 'png')
                                        <img class=" h-11 mx-auto  object-scale-down" src="{{ asset($iten->url) }}"
                                            alt="">
                                    @else
                                        <div class="block text-4xl relative text-center">
                                            <i class="bi bi-filetype-{{ $iten->extencion }}"></i>
                                        </div>
                                        <div class="text-center text-xs truncate">
                                            {{ $iten->name }}
                                        </div>
                                    @endif
                                    <div class="w-full text-base text-right mt-5"><i wire:click="$set('accion',1)"
                                            class="bi bi-share hover:bg-gray-100 border border-gray-100 rounded-sm p-1"></i>
                                    </div>

                                </div>
                            @endcan
                        @endforeach
                    </div>
                </div>
            </div>

        </div>







    </div>
   
</div>
