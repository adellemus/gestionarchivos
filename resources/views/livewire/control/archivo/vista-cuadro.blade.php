<div class=" flex p-2 w-full">
    <x-laravel-blade-sortable::sortable class="border w-1/2 flex flex-wrap  border-gray-300" name="carpeta 1">
        @foreach ($archivos as $iten)
            @can($iten->nombre_permiso)
                <x-laravel-blade-sortable::sortable-item class="p-2 w-24 border h-16  border-gray-300 rounded-md pt-2"
                    sort-key="{{ $iten->name }}">


                    @if ($iten->extencion == 'jpg' or $iten->extencion == 'png')
                        <img class="h-16 mx-auto  object-scale-down" src="{{ asset($iten->url) }}" alt="">
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
    </x-laravel-blade-sortable::sortable >


    
    <x-laravel-blade-sortable::sortable class="border w-1/2 flex flex-wrap  border-gray-300">
    </x-laravel-blade-sortable::sortable>
</div>
