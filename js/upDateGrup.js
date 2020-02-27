(()=> {
    'use strict';
    window.addEventListener('load', () => {
        const respuestaCorrectaG = document.getElementById('respuestaCorrectaGrup');
        const respuestaErroneaG = document.getElementById('respuestaErroneaGrup');
        respuestaCorrectaG.style.display = 'none';
        respuestaErroneaG.style.display = 'none';
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var formsUsr = document.getElementsByClassName('Grup');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(formsUsr, (form) => {
            form.addEventListener('submit',  (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let formRegistrar = document.getElementById('registrarGrup');
                    let dataForm = new FormData(formRegistrar);
                    fetch('modulos/php/upDateGrup.php',{
                        method : 'POST',
                        body : dataForm
                    })
                    .then((response) => response.json())
                    .then((data)=>{
                        //console.log(data)
                         if(data.estado === 'ok'){
                             respuestaCorrectaG.innerHTML = data.mensaje;
                             respuestaCorrectaG.style.display = 'block';
                             respuestaErroneaG.style.display = 'none';
                             formRegistrar.reset();
                             formRegistrar.classList.remove('was-validated');
                         }else{
                             if(data.length !== undefined){
                                 respuestaErroneaG.innerHTML  = '';
                                 data.forEach((res) => {
                                     respuestaErroneaG.innerHTML += `<p class="mb-0">${res}</p>`;
                                 });
                             }else{
                                 respuestaErroneaG.innerHTML = data.mensaje;
                             }
                             respuestaErroneaG.style.display = 'block';
                             respuestaCorrectaG.style.display = 'none';
                         }
                    })
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();