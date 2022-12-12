<div class="w-full text-lg text-gray-700 text-center">categorias</div>


<table class="table-auto w-full ">
<tr>
    <td>nro</td>
    <td>nombre</td>
    <td>acciones</td>
</tr>    
@foreach ($categorias as $key => $categoria)
<tr>
    <td>{{$key + 1}}</td>
    <td>{{$categoria->name}}</td>
    <td>
        <div class="w-full">
           
            @can('depcat.delete.categoria')
            <div><i class="bi bi-trash3 text-red-600 hover:text-red-900 cursor-pointer" wire:click="$emit('eliminar_cat','{{$categoria->id}}')"></i></div>
            @endcan
        </div>
    </td>
</tr> 
@endforeach
</table>



