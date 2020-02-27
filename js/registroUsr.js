(()=> {
    'use strict';
    window.addEventListener('load', () => {
        const respuestaCorrecta = document.getElementById('respuestaCorrectaUsr');
        const respuestaErronea = document.getElementById('respuestaErroneaUsr');
        respuestaCorrecta.style.display = 'none';
        respuestaErronea.style.display = 'none';
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var formsUsr = document.getElementsByClassName('Usr');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(formsUsr, (form) => {
            form.addEventListener('submit',  (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let formRegistrar = document.getElementById('registrar');
                    let dataForm = new FormData(formRegistrar);
                    fetch('modulos/php/registrarUsr.php',{
                        method : 'POST',
                        body : dataForm
                    })
                    .then((response) => response.json())
                    .then((data)=>{
                        //console.log(data)
                         if(data.estado === 'ok'){
                             respuestaCorrecta.innerHTML = data.mensaje;
                             respuestaCorrecta.style.display = 'block';
                             respuestaErronea.style.display = 'none';
                             formRegistrar.reset();
                             formRegistrar.classList.remove('was-validated');
                         }else{
                             if(data.length !== undefined){
                                 respuestaErronea.innerHTML  = '';
                                 data.forEach((res) => {
                                     respuestaErronea.innerHTML += `<p class="mb-0">${res}</p>`;
                                 });
                             }else{
                                 respuestaErronea.innerHTML = data.mensaje;
                             }
                             respuestaErronea.style.display = 'block';
                             respuestaCorrecta.style.display = 'none';
                         }
                    })
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();