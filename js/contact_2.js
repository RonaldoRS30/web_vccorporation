$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value);
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#Formulario').validate({
            rules: {
                _name: {
                    required: true,
                    minlength: 2
                },
                _email: {
                    required: true,
                    _email: true
                },
                _telefono: {
                    required: true
                },
				 _carrera: {
                    required: true
                },
                _cv: {
                    required: true
                }
            },
            messages: {
                _name: {
                    required: "Ingrese su Nombre...",
                    minlength: "Su nombre debe tener al menos 2 caracteres..."
                },
                _email: {
                    required: "Ingrese su correo Electronico..."
                },
                _telefono: {
                    required: "Ingrese su Telefono"
                },
				  _carrera: {
                    required: "Ingrese su Carrera / Especialidad"
                },
                 _cv: {
                    required: "Adjunte su CV"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"enviar.php",
                    success: function() {
                        $('#ContacTra :input').attr('disabled', 'disabled');
                        $('#ContacTra').fadeTo( "slow", 0.15, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function() {
                        $('#ContacTra').fadeTo( "slow", 0.15, function() {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    });
        
 })(jQuery)
});