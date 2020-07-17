$(document).on('click', '#edit-genre-btn', function () {

		$("#edit_genre_form").validate({

			focusInvalid: false,
			rules: {
				name: {
					required: true
				},
				Description: {
					required: true
				}


			},
			messages: {

				name: "Please enter name",
				b_image: "Please select banner image",
				c_image: "Please select cover image",
				Description: "Please enter description"

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