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
Livewire.on('alert_update_dep', etc4 => {
	Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'Departamento editado correctamente',
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
Livewire.on('alert_create_cat', etc3 => {
	Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'Categoria creada correctamente',
		showConfirmButton: false,
		timer: 1500
	})

});
Livewire.on('alert_create_dep', etc3 => {
	Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'Departamento creado correctamente',
		showConfirmButton: false,
		timer: 1500
	})

});
Livewire.on('alert_create_rol', etc3 => {
	Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'Rol creado correctamente',
		showConfirmButton: false,
		timer: 1500
	})

});
Livewire.on('alert_asig', etc3 => {
	Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'Permisologia actualizada correctamente',
		showConfirmButton: false,
		timer: 1500
	})

});
Livewire.on('eliminar', id => {
Swal.fire({
	title: 'Estas seguro?',
	text: "No podrar revertir esta accion!",
	icon: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#3085d6',
	cancelButtonColor: '#d33',
	confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
	if (result.isConfirmed) {

		Livewire.emitTo('control.gestionusuario', 'delete', id);

	  Swal.fire(
		'Eliminado!',
		'el usuario fue eliminado',
		'success'
	  )
	}
  })


});
Livewire.on('eliminar_dep', id => {
	Swal.fire({
		title: 'Estas seguro?',
		text: "No podrar revertir esta accion!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	  }).then((result) => {
		if (result.isConfirmed) {
	
			Livewire.emitTo('control.gestiondeparcategory', 'delete_depart', id);
	
		  Swal.fire(
			'Eliminado!',
			'el departamento fue eliminado',
			'success'
		  )
		}
	  })
	
	
	});
	Livewire.on('eliminar_cat', id => {
		Swal.fire({
			title: 'Estas seguro?',
			text: "No podrar revertir esta accion!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		  }).then((result) => {
			if (result.isConfirmed) {
		
				Livewire.emitTo('control.gestiondeparcategory', 'delete_cat', id);
		
			  Swal.fire(
				'Eliminado!',
				'La Categoria fue eliminada',
				'success'
			  )
			}
		  })
		
		
		});
Livewire.on('eliminar_rol', id => {
	Swal.fire({
		title: 'Estas seguro?',
		text: "No podrar revertir esta accion!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	  }).then((result) => {
		if (result.isConfirmed) {
	
			Livewire.emitTo('control.gestionrolpermisos', 'delete', id);
	
		  Swal.fire(
			'Eliminado!',
			'el rol fue eliminado',
			'success'
		  )
		}
	  })
	
	
	});
};

