<div class="w-5/6 mx-auto">

    <div class="w-full text-center font-bold text-lg">{{ $user->name }}({{ $user->email }})</div>
    <table class=" table w-full">
        <tr class=" bg-gray-50 border-b table-row border-gray-300">
            <td class="h-19 table-cell p-5 ">Rol</td>
            <td class="h-19 table-cell p-5">Asignar</td>

        </tr>
        @foreach ($rolesall->whereNotin('id', '1') as $key => $rol)
            <tr class="">
                <td class="py-2">
                    {{ $rol->name }}
                </td>
                <td class="py-2">
                    <input wire:model.defer='select_rols' value="{{ $rol->id }}" type="checkbox">
                </td>
            </tr>
        @endforeach
    </table>
    <div class="w-full  flex-row items-end">
        <x-jet-button class="mt-5" wire:click='actualizarroles'>
            {{ __('Actualizar') }}
        </x-jet-button>
    </div>
    <div class="my-5 text-sm p-3 text-teal-900">
        <div class="w-full text-center text-lg font-extrabold"><i class="bi bi-list-check"></i> permisos via roles</div>
        <div class="ml-2 w-full py-2">
            <div class="grid grid-rows-4 grid-flow-col gap-1">
                @foreach ($user->getPermissionsViaRoles()->unique('id') as $item)
                    <div class="py-2"><i class="bi bi-person-check-fill"></i> {{ $item->name }}</div>
                @endforeach
            </div>

        </div>


    </div>
    <div class="my-5 text-sm p-3 text-teal-900">
        <div class="w-full text-center text-lg font-extrabold"><i class="bi bi-list-check"></i> permisos</div>
        <div class="ml-2 w-full py-2">
            <div class="grid grid-rows-4 grid-flow-col gap-1">
                @foreach ($user->permissions as $item)
                    <div class="py-2"><i class="bi bi-person-check-fill"></i> {{ $item->name }}</div>
                @endforeach
            </div>

        </div>


    </div>



</div>
