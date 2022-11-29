window.onload = function () {

	$('ul li').on('click', function() {
	$('li').removeClass('active');
	$(this).addClass('active');
});
Livewire.on('alert_update', etc4 => {
	Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'Usuario editado correctamente',
		showConfirmButton: false,
		timer: 1500
	})

});
Livewire.on('alert_create', etc3 => {
	Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'Usuario creado correctamente',
		showConfirmButton: false,
		timer: 1500
	})

});
Livewire.on('eliminar', id => {
Swal.fire({
	title: 'Are you sure?',
	text: "You won't be able to revert this!",
	icon: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#3085d6',
	cancelButtonColor: '#d33',
	confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
	if (result.isConfirmed) {

		Livewire.emitTo('control.gestionusuario', 'delete', id);

	  Swal.fire(
		'Deleted!',
		'Your file has been deleted.',
		'success'
	  )
	}
  })


});
};

