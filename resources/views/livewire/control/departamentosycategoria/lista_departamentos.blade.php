<div class="w-full text-lg text-gray-700 text-center">departamentos</div>


<table class="table-auto w-full ">
<tr class="text-center">
    <td>nro</td>
    <td>nombre</td>
    <td>acciones</td>
</tr>    
@foreach ($departamentos as $key => $departamento)
<tr>
    <td class="w-8">{{$key + 1}}</td>
    <td class="truncate px-2">{{$departamento->name}}</td>
    <td class="w-44">
        <div class="w-full grid grid-cols-4 ">
            @can('depcat.update.departamento')
            <div><i class="bi bi-pencil text-green-600 hover:text-green-900 cursor-pointer"wire:click='edit_depart("{{$departamento->id}}")'></i></div>
            @else

            @endcan
            @can('depcat.delete.departamento')
            <div><i class="bi bi-trash3 text-red-600 hover:text-red-900 cursor-pointer" wire:click="$emit('eliminar_dep','{{$departamento->id}}')"></i></div>
            @else
                
            @endcan

            @can('depcat.crear.categoria')
            <div><i class="bi bi-node-plus  text-indigo-600 hover:text-indigo-900 cursor-pointer" wire:click='fcreate_categoria("{{$departamento->id}}")'></i></div>
            @else
                
            @endcan
           
            <div><i class="bi bi-box-arrow-right  text-purple-600 hover:text-purple-900 cursor-pointer" wire:click='vercategorias("{{$departamento->id}}")'></i></div>
            
            
           
        </div>
    </td>
</tr> 
@endforeach
</table>



