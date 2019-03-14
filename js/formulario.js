
evenlisteners();

function evenlisteners(){
document.querySelector('#formulario1').addEventListener('submit', validarRegistro);
document.querySelector('#formulario2').addEventListener('submit', validarIngreso);
}

function  validarRegistro(e) {
    e.preventDefault();

  var nombre=document.querySelector('#nombre').value,
      apellido=document.querySelector('#apellido').value,
      email=document.querySelector('#email').value,
       password=document.querySelector('#password').value;
       tipo = document.querySelector('#tipo').value;

   //validadndo que se llenen todos los datos

if (nombre === '' || apellido === ''|| email === '' || password === '' ) {
    

    //fallo

    Swal.fire({
        type: 'error',
        title: 'Error',
        text: 'Todos los campos son obligatorios!',
        
      })

}else{
 //los campos son correctos

 var datos= new FormData();

//datos que  se envian la servidor
 datos.append('nombre', nombre);
 datos.append('apellido', apellido);
 datos.append('email', email);
 datos.append('password', password);
 datos.append('accion', tipo);
//creando el llamado a ajax


    var xhr = new XMLHttpRequest();

    //abrir la conexion 

    xhr.open('POST', 'includes/modelos/modelo-admin.php', true);

  //retorno de datos

  xhr.onload=function(){
      
    if (this.status===200) {

        var respuesta=JSON.parse(xhr.responseText);
        

        //si la respuesta es correcta
        if (respuesta.respuesta==='correcto') {
          

          //si es usuario nuevo
          if (respuesta.tipo==='Crear') {
            
                      
              Swal.fire({
                type: 'success',
                title: 'Usuario creado',
                text: 'El usuario se creó correctamente!',
                
              })




          }





        } else {
                   
          Swal.fire({
            type: 'error',
            title: 'Error',
            text: 'Hubo un error!',
            
          })

          
        }

     



       
        
    }

  }

  //enviando la peticion

  xhr.send(datos);


}


}


function validarIngreso(e){

e.preventDefault();


email=document.querySelector('#emailRegistrado').value,
password=document.querySelector('#passwordRegistrado').value;
tipo = document.querySelector('#tipos').value;


if ( email === '' || password === '' ) {
    
  //fallo

  Swal.fire({
      type: 'error',
      title: 'Error',
      text: 'Todos los campos son obligatorios!',
      
    })

}else{
//los campos son correctos

 var dato= new FormData();

 //datos que  se envian la servidor
  dato.append('email', email);
  dato.append('password', password);
  dato.append('accion', tipo);
 //creando el llamado a ajax
 
     var xhrl = new XMLHttpRequest();
 
     //abrir la conexion 
 
     xhrl.open('POST', 'includes/modelos/modelo-admin.php', true);
 
   //retorno de datos
 
   xhrl.onload=function(){
       
     if (this.status===200) {
 
         var respuestal=JSON.parse(xhrl.responseText);
        
         console.log(respuestal.resultado)
         //el email y el password son correctos

         if (respuestal.resultado ===" Password Correcto") {

          Swal.fire({
            type: 'success',
            title: 'Email y Password correctos',
            text: 'Presiona ok para abrir el dashboard!',
            
          })
          .then(resultado=>{
            if (resultado.value) {
              window.location.href='index.php#bella';


            }
          })

         } else {
          Swal.fire({
            type: 'error',
            title: 'Email ó Password incorrectos',
            text: 'Ingresa de nuevo!',
            
          })
      
         }







     }
 
   }
 
   //enviando la peticion
 
   xhrl.send(dato);
 
 
 }
 

}

