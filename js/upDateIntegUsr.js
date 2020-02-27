(()=> {
    'use strict';
    window.addEventListener('load', () => {
        const respuestaCorrectaUser = document.getElementById('respuestaCorrectaUser');
        const respuestaErroneaUser = document.getElementById('respuestaErroneaUser');
        respuestaCorrectaUser.style.display = 'none';
        respuestaErroneaUser.style.display = 'none';
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var formsUsr = document.getElementsByClassName('User');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(formsUsr, (form) => {
            form.addEventListener('submit',  (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let formRegistrar = document.getElementById('registrarU');
                    let dataForm = new FormData(formRegistrar);
                    fetch('modulos/php/upDateIntegUsr.php',{
                        method : 'POST',
                        body : dataForm
                    })
                    .then((response) => response.json())
                    .then((data)=>{
                        //console.log(data)
                         if(data.estado === 'ok'){
                             respuestaCorrectaUser.innerHTML = data.mensaje;
                             respuestaCorrectaUser.style.display = 'block';
                             respuestaErroneaUser.style.display = 'none';
                             formRegistrar.reset();
                             formRegistrar.classList.remove('was-validated');
                         }else{
                             if(data.length !== undefined){
                                 respuestaErroneaUser.innerHTML  = '';
                                 data.forEach((res) => {
                                     respuestaErroneaUser.innerHTML += `<p class="mb-0">${res}</p>`;
                                 });
                             }else{
                                 respuestaErroneaUser.innerHTML = data.mensaje;
                             }
                             respuestaErroneaUser.style.display = 'block';
                             respuestaCorrectaUser.style.display = 'none';
                         }
                    })
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();