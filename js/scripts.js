
//Botón géneros
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

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
        if (current > 0) {
            current = current - 1;
        } else {
            current = 0;
        }
        if(current==0){
            $(".carrusel").animate({"left":50},600);
            return false;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
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
        if (numImages > current + 3) {
            current = current+1;
        } else {
            current = 0;
            $(".carrusel").animate({"left":50},600);
            return false;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    }); 
 });

 $(document).ready(function(){
     $("#cerrarSesion").click(function(){
         location.href = "index.php";
     });
 });


 $(document).ready(function(){
     $("#buscar").click(function(){
        const clave = $("#peliQueBuscas").val();
        window.location.href = "buscarPeli.php?clave="+clave;
 });
});