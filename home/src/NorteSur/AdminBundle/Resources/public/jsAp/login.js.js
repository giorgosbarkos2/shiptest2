
$(document).ready(function() {


    console.log('login');

    $(document).ready(function() {
        $("#butLogin").click(function(e) {
            e.preventDefault();
            var myData = 'usuario='+$("#nombre").val()
                    + '&password='+$("#contrasena").val()
                    ;


            jQuery.ajax({
                type: "POST", // metodo post o get 
                url: $("#formLogin").attr("action"),
                dataType: "text", // tipo datos text o json etc 
                data: myData,
                success: function(response) {


                    var respuesta = response;
                    
                    console.log(respuesta);


                    if (respuesta == 200) {


                        $('#respuesta').empty();
                        
                       

                         window.location = "principal";


                    } else {
                        respuesta = '\
\n\
\n\
<h2 class="form-signin-heading">Ingrese un usuario valido</h2>';

                        $('#respuesta').empty();

                        $("#respuesta").append(respuesta);


                    }



                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError);



                },
            });
        });
    });


});

