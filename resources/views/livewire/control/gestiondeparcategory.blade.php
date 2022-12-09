<div> 
    <div  class=" fixed top-0 left-0 bg-gray-200 opacity-50 h-screen  pt-56  w-full z-50"
    wire:loading wire:target='save_depart,delete_depart,vercategorias,update_depart,delete_cat,save_cat'>
                <img class="mx-auto h-36 w-36 my-auto"  src="{{asset('/imagenes/loading.gif')}}" alt="">
    </div>
    <div class="mx-auto w-10/12">
        <div class=" flex justify-between w-full px-20 mb-5 h-10  ">
            <div>
                <h1>
                    <i class="bi bi-person-lines-fill mr-2"></i> Gestion de departamentos y Categorias
                </h1>
            </div>
            <div class=" text-green-500 text-lg hover:text-green-900">
                @can('depcat.crear.departamento')
                <i class="bi bi-bookmark-plus bg-green-200 px-2 rounded-md py-1 border border-green-700" wire:click="$set('ModeEdit','0')"></i>
                @endcan
               
            </div>
           



        </div>
        <div class=" grid grid-cols-12 gap-2 h-56 min-h-full">
            <div class=" col-span-3 border border-gray-300 rounded-lg p-5">


                @switch($ModeEdit)
                    @case(0)
                        @include('livewire.control.departamentosycategoria.create')
                    @break

                    @case(1)
                        @include('livewire.control.departamentosycategoria.edit')
                    @break

                    @default
                        @include('livewire.control.departamentosycategoria.inactivo')
                @endswitch




            </div>
            <div class="col-span-6 border border-gray-300 rounded-lg p-5">
                @include('livewire.control.departamentosycategoria.lista_departamentos')
            </div>
            <div class="col-span-3 border border-gray-300 rounded-lg p-5">
                @switch($cuadro_cat)
                    @case(1)
                        @include('livewire.control.departamentosycategoria.lista_categorias')
                    @break
                    @case(2)
                    @include('livewire.control.departamentosycategoria.create_categoria')
                    @break
                    
                    @default
                        @include('livewire.control.departamentosycategoria.inactivo')
                @endswitch

            </div>
        </div>
    </div>

</div>
