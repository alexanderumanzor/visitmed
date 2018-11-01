$(document).ready(function() {
    $('#guardar-registro').on('submit', function(e) {
        e.preventDefault();

        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if(resultado.respuesta == 'exito') {
                    swal (
                        'Correcto',
                        'Se guardó correctamente',
                        'success'
                    )
                } else {
                    swal(
                        'Error!',
                        'Hubo un error', 
                        'error'
                    )
                }
            }
        })
    });
    $('#login_usuario').on('submit', function(e) {
        e.preventDefault();

        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if(resultado.respuesta == 'exitoso') {
                    swal (
                        'Login Correcto',
                        'Bienvenid@ '+resultado.usuario+' !!',
                        'success'
                    )
                    setTimeout(function(){
                        window.location.href = 'admin_area.php';
                    }, 1500);
                } else {
                    swal(
                        'Error!',
                        'Usuario o password Incorrectos', 
                        'error'
                    )
                }                
            }
        })
    });
});