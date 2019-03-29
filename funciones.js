$(document).ready(function(){
    $("#inisesion").click(function(){
        $.ajax({
            url:"iniciarSesion.php",
            type:"POST",
            data:{usuario:$("#usuario").val(), clave:$("#clave").val()}
        }).done(function(msg){
            alert(msg);
        });
    });
 });
 