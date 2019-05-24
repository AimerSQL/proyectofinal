//Carrusel
var current = 0;
var imagenes = new Array();
 
$(document).ready(function() {
    var numImages = 6;
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
 
    $('.left-arrow').on('click',function() {
        var id = $(this).attr("id");
        if (current > 0) {
            current = current - 1;
        } else {
            current = 0;
        }
        if(current==0){
            $(".carrusel").animate({"left":0},600);
            return false;
        }
 
        switch(id){
            case "1":$("#c1").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "2":$("#c2").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "3":$("#c3").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "4":$("#c4").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "5":$("#c5").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "6":$("#c6").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "7":$("#c7").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
        }
 
        return false;
    });  
 
    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('click', function() {
        var id = $(this).attr("id");
        if (numImages > current + 2) {
            current = current+1;
        } else {
            current = 0;
            $(".carrusel").animate({"left":0},600);
            return false;
        }
        switch(id){
            case "1":$("#c1").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "2":$("#c2").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "3":$("#c3").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "4":$("#c4").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "5":$("#c5").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "6":$("#c6").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
            case "7":$("#c7").animate({"left": -($('#product_'+current).position().left)}, 600);
            break;
        }
        
 
        return false;
    }); 
 });

 

 

/*validacion formulario */
$(document).ready(function(){
    $("#enviar").attr('disabled','disabled');
    $("#enviar").addClass("btn-danger");
    $(".form-control").blur(function(){
        validaForm();
    });
    
    function validaForm(){
        if($("#nombre").val()==""||$("#apellido").val()==""||$("#dni").val()==""||$("#usuarioR").val()==""||$("#contrasena").val()==""||$("#correo").val()==""){
            $("#enviar").addClass("btn-danger");
            $("#enviar").attr('disabled','disabled');
        }else{
            $("#enviar").removeAttr('disabled');
            $("#enviar").removeClass("btn-danger").addClass("btn-primary");
        }
    }
    $("#buscar").click(function(){
        const clave = $("#peliQueBuscas").val();
        window.location.href = "buscarPeli.php?clave="+clave;
 });

    $("#cerrarSesion").click(function(){
    location.href = "index.php";
});

    /*registro*/
    $("#enviar").click(function(){
        $.ajax({
            type: "POST",
            url: "registro.php",
            data: {nombre: $("#nombre").val(), 
            apellido: $("#apellido").val(),
            dni: $("#dni").val(),
            usuario: $("#usuarioR").val(),
            contrasena: $("#contrasena").val(),
            correo: $("#correo").val()
            }
        }).done(function(){
            $("#nombre").val() = "";
            $("#apellido").val() = "";
            $("#dni").val() = "";
            $("#usuarioR").val() = ""
            $("#contrasena").val() = "";
            $("#correo").val() = "";
        });
    });

    /*Publicar comentario */
    $("#pub").click(function(){
        $.ajax({
            type: "POST",
            url: "publicar.php",
            data:{
                comentario:$("#comentario").val(),
                peliId: $("#peliId").val()
            }
        }).done(function(msg){
            $("#comentario").val("");
            if(msg==""||msg==null){
                location.reload();
            }else{
                alert(msg);
            }     
        });
    });

    /* mostrar ocultar formulario peliculas*/
    $("#gestionUsu").click(function(){
        $("#usuBox").show();
        $("#peliForm").hide();
    });
    $("#subidaPeli").click(function(){
        $("#usuBox").hide();
        $("#peliForm").show();
    });

    /*bloquear y desbloquear*/
    $("#bloquear").click(function(){
        $.ajax({
            type: "POST",
            url: "bloquear.php",
            data:{
                idUsu:$("#idUsu").val()
            }
        }).done(function(msg){
            alert(msg);
        });
    });
    $("#desbloquear").click(function(){
        $.ajax({
            type: "POST",
            url: "desbloquear.php",
            data:{
                idUsu:$("#idUsu").val()
            }
        }).done(function(msg){
            alert(msg);
        });
    });

    $("#subirPeli").click(function(){
        const src = $("#imagen").val();
        let img = src.split('\\');
        let imgNombre = img[img.length-1];
        $.ajax({
            type: "POST",
            url: "subirPeli.php",
            data:{
                genero: $("#generoSelect").val(),
                tituloOriginal:$("#tituloOriginal").val(),
                tituloEsp:$("#tituloEsp").val(),
                anio:$("#anio").val(),
                trailer:$("#trailer").val(),
                sinopsis:$("#sinopsis").val(),
                imagen:imgNombre
            }
        }).done(function(msg){
            alert(msg);
            $("#generoSelect").val("");
            $("#tituloOriginal").val(""),
            $("#tituloEsp").val(""),
            $("#anio").val(""),
            $("#trailer").val(""),
            $("#sinopsis").val(""),
            $("#imagen").val("");
        });
    });

    /*perfil de usuario*/
$("#perfil").click(function(){
    $.ajax({
   
        url: "perfil.php", 
   
    }).done(function(){
        {
            window.location.href ="perfil.php";
        }
    })
})


});

