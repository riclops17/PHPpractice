var formulario = document.getElementById('formulario');
var respuesta =document.getElementById('respuesta');
formulario.addEventListener('submit',function (e){
    e.preventDefault();
    console.log('click')
    var datos = new FormData(formulario)
    console.log(datos)
    console.log(datos.get('usuario'))
    fetch('post.php',{method:'POST',
    body:datos})
        .then(res => res.json())
        .then(data =>{
            console.log(data)
            if(data === 'error'){
                respuesta.innerHTML = ` <div class="alert alert-danger" role="alert">
                 LLENA TODOS LOS CAMPOS
            </div>`
            }else{
                respuesta.innerHTML = `<div class="alert alert-primary" role="alert">
                 ${data}
            </div>`
            }
        })

})