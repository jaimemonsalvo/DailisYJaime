
$(document).ready(function() {
    



$('#login-admin').on('submit', function (e) {

    e.preventDefault();


  /**para obtener los datos utilizaos a serializeArray */
    

   var datos=$(this).serializeArray();
  


    /**llamado a ajax en jquery */


    $.ajax({
     type:$(this).attr('method'),
     data:datos,
     url:$(this).attr('action'),
     dataType:'json',
     success: function(data) {
         console.log(data);
         if (data.respuesta ==='exitoso') {
            Swal.fire({

               title: 'Login Correcto!',
               text:'Bienvenid@ '+data.usuario+' !!',
               type: 'success'  
            })
            setTimeout(() => {
                window.location.href='dashboard.php';
            }, 2000);

         } else {
            Swal.fire({
                type: 'error',
                title: 'Error',
                text: 'Usuario o Password Incorrectos!'
              })
             }
         
          }
      });

    });
});