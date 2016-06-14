$( document ).ready(function(){
    $(".button-collapse").sideNav();

    $("#formValidate").validate({
        rules: {
            name: {
                required: true,
                minlength: 6
            },
            user: {
                required: true,
                minlength: 6
            },
            email: {
				required: true,
				email: true
			},
            phone: {
                required: true,
                minlength: 6
            },
			password: {
				required: true,
				minlength: 6
			},
            r_password: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            }
        },

        messages: {
            name: {
                required: "Ingrese su nombre",
                minlength: "Ingrese su nombre con mas de 6 caracteres."
            },
            user: {
                required: "Ingrese su usuario",
                minlength: "Ingresa un usuario con mas de 6 caracteres."
            },
            email: {
                required: "Ingrese una de correo electronico existente."
            },
            phone: {
                required: "Ingrese su telefono",
                minlength: "Ingresa tu telefono con mas de 6 caracteres."
            },
            password: {
                required: "Ingrese su contraseña",
                minlength: "La contraseña debe tener mas de 6 caracteres."
            },
            r_password: {
                required: "Ingresa tu confirmacion de contraseña",
                minlength: "La confirmacion debe tener mas de 6 caracteres.",
                equalTo: "Las contraseñas no coinciden."
            }
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');

            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });
});
