$(document).on('click', '#login-form-btn', function(){

    $("#login-form").validate({
           
            focusInvalid: false,
                rules: {
                    email : {
                        required: true,
                        email:true
                    },
                    
                    password:{
						required: true
					}
                 
                },
                messages: {
                    email: {
                        required: "Please enter your email.",
                        email: "Please enter valid email address."                
                    },
                    password: "Please enter your password.",
                   
                    

            },
            normalizer: function( value ) {
                    return $.trim( value );
            },
            showErrors: function(errorMap, errorList) {
                    console.log( errorMap, errorList);
                    $("#login-form").find("input, textarea, select").each(function() {
                        $(this).removeClass("has-error");
                    });
                    $("#login-form").find('label.my_label').remove();
                    console.log(errorList);
                    if(errorList.length) {
						console.log(errorList[0]['element']);
                        var ele = $(errorList[0])[0];
                        var label_for = $(errorList[0]['element']).attr('id'); 
                        if(label_for == 'agree'){
							$("#error_state").html(ele.message);
							$("#error_state").show();
							$(".fieldGroupBorder").css('border', '1px dashed red');
							//$(errorList[0]['element']).addClass("has-error");
						} else {
							console.log('label_for', label_for)
							$("<label for='"+label_for+"'/>").text(ele.message).addClass("error has-error my_label").insertAfter("."+label_for);
							$(errorList[0]['element']).addClass("has-error");
						}
                    }
                    $('#login-form-btn').prop('disabled', false);
                },
                highlight: function(element) {
                    $(element).addClass("has-error");
                },
                unhighlight: function(element) {
                    $(element).removeClass('has-error');
                },
                invalidHandler: function(event, validator) {
                    if (!validator.numberOfInvalids())
                        return;
                    
                    $('html, body').animate({
                        scrollTop: $(validator.errorList[0].element).offset().top
                    }, 1000);
                    
                },    
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                    if($(element).prop('name') == "Description"){
                    var id = "Id_" + $(element).prop('id');
                    $("#"+id).addClass("has-error");
                    }else{
                        element.addClass('has-error');
                    }
                },
                submitHandler: function(form) {
					$('#login-form-btn').prop('disabled', true);
                    form.submit();
                }
            });
});
