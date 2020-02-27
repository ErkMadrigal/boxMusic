(()=> {
    'use strict';
    window.addEventListener('load', () => {
        const respuestaCorrectaLet = document.getElementById('respuestaCorrectaLet');
        const respuestaErroneaLet = document.getElementById('respuestaErroneaLet');
        respuestaCorrectaLet.style.display = 'none';
        respuestaErroneaLet.style.display = 'none';
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var formsUsr = document.getElementsByClassName('letra');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(formsUsr, (form) => {
            form.addEventListener('submit',  (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let formRegistrar = document.getElementById('registrarLetra');
                    let dataForm = new FormData(formRegistrar);
                    fetch('modulos/php/registrarLetra.php',{
                        method : 'POST',
                        body : dataForm
                    })
                    .then((response) => response.json())
                    .then((data)=>{
                        //console.log(data)
                         if(data.estado === 'ok'){
                             respuestaCorrectaLet.innerHTML = data.mensaje;
                             respuestaCorrectaLet.style.display = 'block';
                             respuestaErroneaLet.style.display = 'none';
                             formRegistrar.reset();
                             formRegistrar.classList.remove('was-validated');
                         }else{
                             if(data.length !== undefined){
                                 respuestaErroneaLet.innerHTML  = '';
                                 data.forEach((res) => {
                                     respuestaErroneaLet.innerHTML += `<p class="mb-0">${res}</p>`;
                                 });
                             }else{
                                 respuestaErroneaLet.innerHTML = data.mensaje;
                             }
                             respuestaErroneaLet.style.display = 'block';
                             respuestaCorrectaLet.style.display = 'none';
                         }
                    })
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();