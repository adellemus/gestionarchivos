<div class=" p-2  gap-3 grid grid-cols-8 ">
    <x-laravel-blade-sortable::sortable>
        @foreach ($archivos as $iten)
            <x-laravel-blade-sortable::sortable-item sort-key="{{ $iten->name }}">
                <div class="p-2 border border-gray-300 rounded-md pt-2">
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
            </x-laravel-blade-sortable::sortable-item>
        @endforeach

    </x-laravel-blade-sortable::sortable >
    <x-laravel-blade-sortable::sortable>

    </x-laravel-blade-sortable::sortable>

</div>
