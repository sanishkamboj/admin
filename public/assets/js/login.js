$(document).on('click', '#login-form-btn', function () {

		$("#login_form").validate({

			focusInvalid: false,
			rules: {
				email: {
					type:email,
					required: true
				},
				password: {
					required: true
				}


			},
			messages: {

				email: {
                        required: "Please enter your email.",
                        email: "Please enter valid email address."                
                    },
				password: "Please enter password",
				

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
				
					element.addClass('has-error');
				
			},
			submitHandler: function (form) {
				//form.submit()
				//event.preventDefault()
			}
		});
	});