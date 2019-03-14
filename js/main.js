(function () {

  "use strict";
  document.addEventListener('DOMContentLoaded', function () {


  }); //DOM CONTENT LOADED
})();






/**funcion para elegir pagina */



/**funcion pasar de pagina */
$(function () {




  var paginaActual = window.location.href;

  if ((paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/index.php') || (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/') || (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#') || (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#nav')) {
    $('.contenedor .contenido-productos:nth-child(1)').fadeIn(1000);
  }


  if ((paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/index.php#comparte')|| (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#') || (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#nav')) {
    $('.contenedor .contenido-productos:nth-child(4)').fadeIn(1000);
  }
  if ((paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/index.php#fashion')|| (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#') || (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#nav')) {
    $('.contenedor .contenido-productos:nth-child(3)').fadeIn(1000);
  }
  if ((paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/index.php#bella')|| (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#') || (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#nav')) {
    $('.contenedor .contenido-productos:nth-child(2)').fadeIn(1000);
  }
  if ((paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/index.php#nosotros') || (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#') || (paginaActual === 'http://localhost/EMPRENDIMIENTO-DAILISYJAIME/#nav')) {
    $('.contenedor .contenido-productos:nth-child(1)').fadeIn(1000);
  }

  $(' .navegacion-principal a').on('click', function () {

    $('.ocultar').hide();

    if ('#nosotros' === $(this).attr('href')) {

      $('.contenedor .contenido-productos:nth-child(1)').fadeIn(1000);


    } else if ('#bella' === $(this).attr('href')) {

      $('.contenedor .contenido-productos:nth-child(2)').fadeIn(1000);



    } else if ('#fashion' === $(this).attr('href')) {

      $('.contenedor .contenido-productos:nth-child(3)').fadeIn(1000);


    } else if ('#comparte' === $(this).attr('href')) {

      $('.contenedor .contenido-productos:nth-child(4)').fadeIn(1000);


    }


  });
});










/**agregando iconos a los productos con hover y quitandolos */


$(function () {
  $('.icono i').hide();


  $(" .icono ").hover(function () {

    $('.icono:hover   i').fadeIn(900);
    $('.icono:hover   i .un').css({'width':'30px'});
  }, function () {
    $('.icono i').hide();
  });





});


//Menu fijo

var windowHeight = $(window).height();

var barraAltura = $('.barra').innerHeight();

$(window).scroll(function () {

  var scroll = $(window).scrollTop(); //esta linea es la que nos va ayudar a detectar el scroll, meduante el uso de scrollTop

  if (scroll > windowHeight) {
    $('.barra').addClass('fixed');
    $('body').css({
      'margin-top': barraAltura + 'px'
    });
  } else {
    $('.barra').removeClass('fixed');
    $('body').css({
      'margin-top': '0px'
    });

  }

});


/**AGREGANDO UN BUSCADOR PARA LOS PRODUCTOS DE BELLA */


var busca = document.getElementById('buscar'),
  producto = document.getElementsByClassName(' titulo bella'),
  forEach = Array.prototype.forEach;


busca.addEventListener("keyup", function (e) {
  var choice = this.value;


  forEach.call(producto, function (f) {
    if (f.innerHTML.toLowerCase().search(choice.toLowerCase()) == -1)
      f.parentNode.style.display = "none";
    else
      f.parentNode.style.display = "grid";
  });

}, false);


/**AGREGANDO UN BUSCADOR PARA LOS PRODUCTOS DE FASHION*/


var buscarf = document.getElementById('buscarf'),
  productof = document.getElementsByClassName(' titulo fashionista'),
  forEach = Array.prototype.forEach;

buscarf.addEventListener("keyup", function (e) {
  var choice = this.value;



  forEach.call(productof, function (f) {
    if (f.innerHTML.toLowerCase().search(choice.toLowerCase()) == -1)
      f.parentNode.style.display = "none";
    else
      f.parentNode.style.display = "block";
  });




}, false);


/**prueba




if ( busca!='' ) {
    $('.icono i ').css({'display':'inline-block', ' float':'left' , 'color':'red'});
    
    
        }
 */