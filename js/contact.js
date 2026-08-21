$(document).ready(function(){
    
    (function($) {
        "use strict";
    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value);
    }, "type the correct answer -_-");
	

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Ingrese su Nombre...",
                    minlength: "Su nombre debe tener al menos 2 caracteres..."
                },
                email: {
                    required: "Ingrese su correo Electronico..."
                },
                message: {
                    required: "Escribe un mensaje...",
                    minlength: "Esta correcto..."
                }
            },
            submitHandler: function(form) {

                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contacto-response.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 0.15, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 0.15, function() {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    });
        
 })(jQuery)
});