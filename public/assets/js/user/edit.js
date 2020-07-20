$(document).on('click', '#edit-user-btn', function () {

		$("#edit_user_form").validate({

			focusInvalid: false,
			rules: {
				firstname: {
					required: true
				},
				lastname: {
					required: true
				},
				email: {
					required: true
				},
				phone: {
					required: true
				},
				mobile: {
					required: true
				},
				street: {
					required: true
				},
				city: {
					required: true
				},
				country_id: {
					required: true
				},
				postcode: {
					required: true
				}


			},
			messages: {

				firstname: "Please enter first name",
				lastname: "Please enter last name",
				email: "Please enter email",
				phone: "Please enter phone no",
				mobile: "Please enter mobile no",
				street: "Please enter street",
				city: "Please enter city name",
				country_id: "Please select country",
				postcode: "Please enter postcode"

			},
			normalizer: function (value) {
				return $.trim(value);
			},

			highlight: function (element) {
				$(element).addClass("has-error");
			},
			unhighlight: function (element) {
				$(element).removeClass('has-error');
			},
			invalidHandler: function (event, validator) {
				if (!validator.numberOfInvalids())
					return;

			},
			errorPlacement: function (error, element) {
				error.insertAfter(element);
				if ($(element).prop('name') == "Description") {
					var id = "Id_" + $(element).prop('id');
					$("#" + id).addClass("has-error");
				} else {
					element.addClass('has-error');
				}
			},
			submitHandler: function (form) {
				form.submit()
			}
		});
	});