/**creando document ready */


$(document).ready(function() {

    $('#guardar-registro').on('submit', function (e) {

        e.preventDefault();


      /**para obtener los datos utilizaos a serializeArray */
        

       var datos=$(this).serializeArray();
      
console.log(datos)

        /**llamado a ajax en jquery */


        $.ajax({
         type:$(this).attr('method'),
         data:datos,
         url:$(this).attr('action'),
         dataType:'json',
         success: function(data) {
             console.log(data);

             if (data.respuesta ==='Exito') {
                Swal.fire({

                   title: 'Correcto!',
                   text:'Se actualizó correctamente',
                   type: 'success'  
                })

             } else {
                Swal.fire({
                    type: 'error',
                    title: 'Error',
                    text: 'ya hay una administrador con ese email!'
                  })
             }

             
         }
        });


    });

        //eliminar un registro

        $('.borrar-registro').on('click', function(e) {
            e.preventDefault();
             
            var id = $(this).attr('data-id');
            var tipo = $(this).attr('data-tipo');
            var valor=$(this).attr('value');

              Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type:'post',
                        data: {
                            id : id,
                            registro : 'eliminar',
                            valor : valor
                        },
                        url: 'modelo-'+tipo+'.php',
                        success:function(data) {
                            console.log(data);
                            var resultado = JSON.parse(data);
                            console.log(resultado);
                            if(resultado.respuesta == 'exito') {
                                swal(
                                  'Eliminado!',
                                  'Registro Eliminado.',
                                  'success'
                                )
                                jQuery('[data-id="'+ resultado.id_eliminado +'"]').parents('tr').remove();
                            } else {
                                swal(
                                  'Error!',
                                  'No se pudo eliminar',
                                  'error'
                                )
                            }
                             
                        }
                    })

                  }
              })
           
           });

           var urlanterior =document.referrer;
           console.log(urlanterior);
         if (urlanterior==='http://localhost/EMPRENDIMIENTO-DAILISYJAIME/admin/lista-bella.php') {




         document.querySelector('#fashioncheckf').style.display='none';
          /*document.querySelector('.Productosb').style.display='none';*/
   
          var $actualizarchecked=document.getElementById("bellacheck");

          $("#bellacheck").append($actualizarchecked);
          $(".Productosb").attr('checked',true);

          console.log('es bella')
         $('#marca').css({'display':'inline-block'});
         $('#marca1').css({'display':'inline-block'});
         $('#marca').removeAttr('disabled');
         $('#nombreb').removeAttr('disabled');
         $('#nombreb').css({'display':'block'});
         $('#nombre').attr('disabled','disabled');
         $('#nombre').css({'display':'none'});
         $('#preciob').removeAttr('disabled');
         $('#preciob').css({'display':'block'});
         $('#precio').attr('disabled','disabled');
         $('#precio').css({'display':'none'});
         $('#cantidadb').removeAttr('disabled');
         $('#cantidadb').css({'display':'block'});
         $('#cantidad').attr('disabled','disabled');
         $('#cantidad').css({'display':'none'});
         $('#imagenb').removeAttr('disabled');
         $('#imagenb').css({'display':'block'});
         $('#imagen').attr('disabled','disabled');
         $('#imagen').css({'display':'none'});
          $('#descripcion').removeAttr('disabled');
          $('#descripcion').css({'display':'block'});
          $('#descripcion1').css({'display':'block'});
                
           /** elegir bella o fashion
           $('.radio #fashioncheck').on('click', function() {
          
             $('#marca').attr('disabled','disabled');
             $('#marca').css({'display':'none'});
             $('#marca1').css({'display':'none'});
             $('#nombreb').attr('disabled','disabled');
             $('#nombreb').css({'display':'none'});
             $('#preciob').attr('disabled','disabled');
             $('#preciob').css({'display':'none'});
             $('#cantidadb').attr('disabled','disabled');
             $('#cantidadb').css({'display':'none'});
             $('#imagenb').attr('disabled','disabled');
             $('#imagenb').css({'display':'none'});
             $('#descripcion').attr('disabled','disabled');
             $('#descripcion').css({'display':'none'});
             $('#descripcion1').css({'display':'none'});
             $('#nombre').removeAttr('disabled','disabled');
             $('#nombre').css({'display':'block'});
             $('#precio').removeAttr('disabled','disabled');
             $('#precio').css({'display':'block'});
             $('#cantidad').removeAttr('disabled','disabled');
             $('#cantidad').css({'display':'block'});
             $('#imagen').removeAttr('disabled','disabled');
             $('#imagen').css({'display':'block'});
           })
*/

            
            $('.radio #bellacheck').on('click', function() {
              $('#marca').css({'display':'block'});
              $('#marca1').css({'display':'block'});
              $('#marca').removeAttr('disabled');
              $('#nombreb').removeAttr('disabled');
             $('#nombreb').css({'display':'block'});
             $('#nombre').attr('disabled','disabled');
             $('#nombre').css({'display':'none'});
             $('#preciob').removeAttr('disabled');
             $('#preciob').css({'display':'block'});
             $('#precio').attr('disabled','disabled');
             $('#precio').css({'display':'none'});
             $('#cantidadb').removeAttr('disabled');
             $('#cantidadb').css({'display':'block'});
             $('#cantidad').attr('disabled','disabled');
             $('#cantidad').css({'display':'none'});
             $('#imagenb').removeAttr('disabled');
             $('#imagenb').css({'display':'block'});
             $('#imagen').attr('disabled','disabled');
             $('#imagen').css({'display':'none'});
              $('#descripcion').removeAttr('disabled');
              $('#descripcion').css({'display':'block'});
              $('#descripcion1').css({'display':'block'});
           })

           

        }else if(urlanterior==='http://localhost/EMPRENDIMIENTO-DAILISYJAIME/admin/lista-fashion.php'){
         /*  document.querySelector('.Productosf').style.display='none';*/
          document.querySelector('#bellacheckb').style.display='none';

         var $actualizarfchecked=document.getElementById("fashioncheck");
          $("#fashioncheck").append($actualizarfchecked);
          $(".Productosf").attr('checked',true);

              console.log('es fashion')


                $('#marca').attr('disabled','disabled');
                $('#marca').css({'display':'none'});
                $('#marca1').css({'display':'none'});
                $('#nombreb').attr('disabled','disabled');
                $('#nombreb').css({'display':'none'});
                $('#preciob').attr('disabled','disabled');
                $('#preciob').css({'display':'none'});
                $('#cantidadb').attr('disabled','disabled');
                $('#cantidadb').css({'display':'none'});
                $('#imagenb').attr('disabled','disabled');
                $('#imagenb').css({'display':'none'});
                $('#descripcion').attr('disabled','disabled');
                $('#descripcion').css({'display':'none'});
                $('#descripcion1').css({'display':'none'});



        }

           /**crear producto bella o fashion */
              
           var URLactual = window.location.href;
            console.log(URLactual);
            if (URLactual==='http://localhost/EMPRENDIMIENTO-DAILISYJAIME/admin/crear-producto.php'){

              var $actualizarchecked=document.getElementById("bellacheck");

              $("#bellacheck").append($actualizarchecked);
              $(".Productosb").attr('checked',true);

              console.log('es bella')

              $('#marca').css({'display':'inline-block'});
              $('#marca1').css({'display':'inline-block'});
              $('#marca').removeAttr('disabled');
              $('#nombreb').removeAttr('disabled');
              $('#nombreb').css({'display':'block'});
              $('#nombre').attr('disabled','disabled');
              $('#nombre').css({'display':'none'});
              $('#preciob').removeAttr('disabled');
              $('#preciob').css({'display':'block'});
              $('#precio').attr('disabled','disabled');
              $('#precio').css({'display':'none'});
              $('#cantidadb').removeAttr('disabled');
              $('#cantidadb').css({'display':'block'});
              $('#cantidad').attr('disabled','disabled');
              $('#cantidad').css({'display':'none'});
              $('#imagenb').removeAttr('disabled');
              $('#imagenb').css({'display':'block'});
              $('#imagen').attr('disabled','disabled');
              $('#imagen').css({'display':'none'});
               $('#descripcion').removeAttr('disabled');
               $('#descripcion').css({'display':'block'});
               $('#descripcion1').css({'display':'block'});




              $('.radio #fashioncheck').on('click', function() {
          
                $('#marca').attr('disabled','disabled');
                $('#marca').css({'display':'none'});
                $('#marca1').css({'display':'none'});
                $('#nombreb').attr('disabled','disabled');
                $('#nombreb').css({'display':'none'});
                $('#preciob').attr('disabled','disabled');
                $('#preciob').css({'display':'none'});
                $('#cantidadb').attr('disabled','disabled');
                $('#cantidadb').css({'display':'none'});
                $('#imagenb').attr('disabled','disabled');
                $('#imagenb').css({'display':'none'});
                $('#descripcion').attr('disabled','disabled');
                $('#descripcion').css({'display':'none'});
                $('#descripcion1').css({'display':'none'});
                $('#nombre').removeAttr('disabled','disabled');
                $('#nombre').css({'display':'block'});
                $('#precio').removeAttr('disabled','disabled');
                $('#precio').css({'display':'block'});
                $('#cantidad').removeAttr('disabled','disabled');
                $('#cantidad').css({'display':'block'});
                $('#imagen').removeAttr('disabled','disabled');
                $('#imagen').css({'display':'block'});
              })
   
   
               
               $('.radio #bellacheck').on('click', function() {
                 $('#marca').css({'display':'block'});
                 $('#marca1').css({'display':'block'});
                 $('#marca').removeAttr('disabled');
                 $('#nombreb').removeAttr('disabled');
                $('#nombreb').css({'display':'block'});
                $('#nombre').attr('disabled','disabled');
                $('#nombre').css({'display':'none'});
                $('#preciob').removeAttr('disabled');
                $('#preciob').css({'display':'block'});
                $('#precio').attr('disabled','disabled');
                $('#precio').css({'display':'none'});
                $('#cantidadb').removeAttr('disabled');
                $('#cantidadb').css({'display':'block'});
                $('#cantidad').attr('disabled','disabled');
                $('#cantidad').css({'display':'none'});
                $('#imagenb').removeAttr('disabled');
                $('#imagenb').css({'display':'block'});
                $('#imagen').attr('disabled','disabled');
                $('#imagen').css({'display':'none'});
                 $('#descripcion').removeAttr('disabled');
                 $('#descripcion').css({'display':'block'});
                 $('#descripcion1').css({'display':'block'});
              })
           


         
             
      

            }



          
});