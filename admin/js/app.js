$(document).ready(function () {
    $('.sidebar-menu').tree()

    $('#registros').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'language': {

        paginate:{
          next:'Siguiente',
          previous: 'Anterior',
          last:'Último',
          first:'Primero'

        },

        info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
        emptyTable:'No hay registros',
        infoEmpty:'0 registros',
        search: 'Buscar:'


      }
    });


    $('#crearRegistroAdmin').attr('disabled', true);

    $('#repetir_password').on('blur', function() {
     
      let password_nuevo = $('#password').val();

      if( $(this).val() == password_nuevo) {
        $("#resultado_password").text('Correcto');
        $("#resultado_password").parents('.form-group').addClass('has-success').removeClass('has-error');
        $("input#password").parents('.form-group').addClass('has-success').removeClass('has-error');
        $('#crearRegistroAdmin').attr('disabled', false);

      } else {
        $("#resultado_password").text('No son iguales');
        $("#resultado_password").parents('.form-group').addClass('has-error').removeClass('has-success');
        $("input#password").parents('.form-group').addClass('has-error').removeClass('has-success');
      }
  
  
     });



     $('.select2').select2()




    // LINE CHART

    $.getJSON('servicios-registrados.php', function(data) {
      var line = new Morris.Line({
        element: 'grafica-registros',
        resize: true,
        data:data ,
        xkey: 'fecha',
        ykeys: ['cantidad'],
        labels: ['Item 1'],
        lineColors: ['#3c8dbc'],
        hideHover: 'auto'
      });
    });



  })



