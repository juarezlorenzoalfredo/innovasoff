eventListeners();

function eventListeners(){
    document.querySelector('btn-success').addEventListener('submit', validarRegistro);

}

function validarRegistro(e){
    e.preventDefault

    var nombre = document.querySelector('#nombre').value,
        email = document.querySelector('#email').value,
        asunto = document.querySelector('#asunto').value,
        mensaje = document.querySelector('#mensaje').value;

    if(nombre === '' || email === ''  || asunto === ''  || mensaje === '' ){
        swal({
            title: "Datos enviados",
            text: "Pronto optendrá una respuesta!",
            icon: "success",
            button: "Aceptar",
          });

    }else{
        swal({
            title: "Datos enviados",
            text: "Pronto optendrá una respuesta!",
            icon: "success",
            button: "Aceptar",
          });
    }
}