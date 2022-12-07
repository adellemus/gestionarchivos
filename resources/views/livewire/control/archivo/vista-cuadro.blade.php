<div class=" flex p-2 w-full">
    <x-laravel-blade-sortable::sortable class="border w-1/2 border-gray-300" name="carpeta 1">
        @foreach ($archivos as $iten)
            <x-laravel-blade-sortable::sortable-item sort-key="{{ $iten->name }}">
                @can($iten->nombre_permiso)
                    <div class="p-2 w-4/12 border border-gray-300 rounded-md pt-2">
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
                    </div>
                @endcan
            </x-laravel-blade-sortable::sortable-item>
        @endforeach
    </x-laravel-blade-sortable::sortable>
    <x-laravel-blade-sortable::sortable class="w-1/2 border border-gray-300" name="carpeta 2">
    </x-laravel-blade-sortable::sortable>
</div>
