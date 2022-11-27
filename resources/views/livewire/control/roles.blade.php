<div class="w-5/6 mx-auto">
    <div class="w-full text-center font-bold text-lg">{{ $user->name}}({{$user->email}})</div>
    <table class=" table w-full">
        <tr class=" bg-gray-50 border-b table-row border-gray-300">
            <td class="h-19 table-cell p-5">rol</td>
            <td class="h-19 table-cell p-5">permisos</td>

        </tr>
        @foreach ($user->roles as $rol)
        <tr>
            <td>
               {{$rol->name}}
            </td>
        </tr>
        @endforeach
    </table>



</div>
