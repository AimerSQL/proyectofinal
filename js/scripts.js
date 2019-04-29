
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
        var id = $(this).attr("id");
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 3;
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
        if (numImages > current + 3) {
            current = current+1;
        } else {
            current = 0;
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

 $(document).ready(function(){
     $("#cerrarSesion").click(function(){
         location.href = "index.php";
     });
 });
