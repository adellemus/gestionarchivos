<div class=" p-2  gap-3 grid grid-cols-8 ">

    @foreach ($archivos as $iten)
        <div class="p-2 border border-gray-300 rounded-md pt-2" wire:click='ver({{$iten->id}})'>
            @if ($iten->extencion == 'jpg' or  $iten->extencion == 'png')
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
    @endforeach

 

</div>