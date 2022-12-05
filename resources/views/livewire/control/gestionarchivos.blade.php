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
    <div class="my-5 h-28 border border-gray-200 ">
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
   
    
    <div class="mt-3  p-2 rounded-md border  gap-1 top-5 border-gray-100 grid grid-cols-12 ">

        @foreach ($archivos as $iten)
            <div class=" h-24  border border-gray-300 rounded-md pt-2">
                @if ($iten->extencion=='jpg' )
                <img src="{{asset($iten->url)}}" alt="">
                @else  
                <div class="block text-4xl relative text-center">
                    <i class="bi bi-filetype-{{$iten->extencion}}"></i>
                </div>
                <div class="text-center text-xs truncate">
                    {{ $iten->name }}
                </div>
                @endif
                


            </div>
        @endforeach

        {{--        
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-folder2" viewBox="0 0 16 16">
                <path
                    d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-9zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V7z" />
            </svg>
            <h1>document</h1>
        </div> --}}


    </div>


</div>
