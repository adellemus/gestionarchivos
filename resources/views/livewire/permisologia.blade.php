<div>
    <table class="w-full table mt-5">
        <thead class=" font-extrabold text-lg text-gray-700">
        <tr>
            <td colspan='3' class=" text-center">el me chupas</td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Rol</td>
        </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario) 
            <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->getRoleNames()}}<i class="bi bi-4-square-fill"></i></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
