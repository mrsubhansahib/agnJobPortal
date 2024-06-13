$(document).ready(function () {
	$("#testimonial-slider").owlCarousel({
		items: 1,
		itemsDesktop: [1000, 1],
		itemsDesktopSmall: [979, 1],
		itemsTablet: [768, 1],
		pagination: true,
		autoPlay: false
	});


	$("#formData").on('submit', function (e) {

		e.preventDefault();

		var formdata = new FormData(this);

		$.ajax({
			type: 'POST',
			url: 'php_actions/custom_action.php',
			data: formdata,
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: function () {
				$('#loader_code').removeClass('d-none');
				$('#text_code').addClass('d-none');
			},
			success: function (response) {

				$('#loader_code').addClass('d-none');
				$('#text_code').removeClass('d-none');
				var responseData = JSON.parse(response).sts;
				var responsemsg = JSON.parse(response).msg;

				if (responseData == 'success') {
					Swal.fire({
						position: 'center',
						icon: 'success',
						title: responsemsg,
						showConfirmButton: false,
						timer: 3000
					}).then((result) => {
						if (responseData == 'success') {
							$('#formData').trigger('reset');
						}
					});
				} else {
					Swal.fire({
						position: 'center',
						icon: 'warning',
						title: responsemsg,
						showConfirmButton: false,
						timer: 3000
					});
				}
			}
		}); //ajax call
	}); //main
});