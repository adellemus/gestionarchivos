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


};

