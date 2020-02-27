(()=> {
    'use strict';
    window.addEventListener('load', () => {
        const respuestaCorrectaInt = document.getElementById('respuestaCorrectaInt');
        const respuestaErroneaInt = document.getElementById('respuestaErroneaInt');
        respuestaCorrectaInt.style.display = 'none';
        respuestaErroneaInt.style.display = 'none';
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var formsInte = document.getElementsByClassName('Inte');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(formsInte, (form) => {
            form.addEventListener('submit',  (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let formRegistrar = document.getElementById('registrarInt');
                    let dataForm = new FormData(formRegistrar);
                    fetch('modulos/php/upDateInteg.php',{
                        method : 'POST',
                        body : dataForm
                    })
                    .then((response) => response.json())
                    .then((data)=>{
                        //console.log(data)
                         if(data.estado === 'ok'){
                             respuestaCorrectaInt.innerHTML = data.mensaje;
                             respuestaCorrectaInt.style.display = 'block';
                             respuestaErroneaInt.style.display = 'none';
                             formRegistrar.reset();
                             formRegistrar.classList.remove('was-validated');
                         }else{
                             if(data.length !== undefined){
                                 respuestaErroneaInt.innerHTML  = '';
                                 data.forEach((res) => {
                                     respuestaErroneaInt.innerHTML += `<p class="mb-0">${res}</p>`;
                                 });
                             }else{
                                 respuestaErroneaInt.innerHTML = data.mensaje;
                             }
                             respuestaErroneaInt.style.display = 'block';
                             respuestaCorrectaInt.style.display = 'none';
                         }
                    })
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();