var contenido=document.querySelector('#consultas')

const getContratos = ()=>{
    fetch('class/select.php?accion='+accion)
    .then(resp=> resp.json())
    .then(data=>{
        contenido.innerHTML =  "";
         for(let valores of data){
             let porcentaje =valores.precioTotal*0.20
            // msg(valores)
            contenido.innerHTML += `<hr class="mt-3 mb-5">`;
            if(valores.aporte===valores.precioTotal){
                contenido.innerHTML += `
                <div class="alert alert-primary m-0 " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                        el precio de $${valores.precioTotal} a sido Cubierto
                </div>
                `
            }else if(valores.aporte<porcentaje){
                contenido.innerHTML += `
                <div class="alert alert-danger m-0 " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    ha avonado menos del 20%, solo ha abonado el aporte de $${valores.aporte} de un total de $${valores.precioTotal}
                </div>
                `
            }else if(valores.aporte<valores.precioTotal){
                contenido.innerHTML += `
                <div class="alert alert-warning m-0 " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    Falta por cubrir el precio total de $${valores.precioTotal} solo ha aportado $${valores.aporte}
                </div>
                `;
            }
            contenido.innerHTML += `
            <div class="card text-center">
                    <div class="card-header bg-danger">
                    ${valores.direccion}
                    </div>
                    <div class="card-body bg-dark text-white">
                    <h5 class="card-title">Evento especial (${valores.tipo})</h5>
                    <p class="card-text">${valores.Nombre} tel: ${valores.telefono}</p>
                    <a href="" class="btn btn-danger">Eliminar</a>
                    <a href="Managers.php?dir=updateContrato&Id=${valores.IdTocada}" class="btn btn-primary">Modificar</a>
                    </div>
                    <div class="card-footer text-muted bg-dark text-white">
                    <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                ${valores.fecha} ${valores.hora} 
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                            total de horas ${valores.cantidadHoras}
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                Precio Total ${valores.precioTotal}
                        </div>
                    </div>
                </div>
            </div>
            `;
        }
    })
}

const getEventos = ()=>{
    fetch('class/select.php?accion='+accion)
    .then(resp=> resp.json())
    .then(data=>{
        contenido.innerHTML =  "";
         for(let valores of data){
             let porcentaje =valores.precioTotal*0.20
            // msg(valores)
            contenido.innerHTML += `<hr class="mt-3 mb-5">`;
            contenido.innerHTML += `
            <div class="card text-center">
                    <div class="card-header" style="background-color:${valores.color};">
                    <p class="h6" style="color:${valores.textColor};">${valores.title}</p>
                    </div>
                    <div class="card-body bg-dark text-white">
                    <h5 class="card-title">Evento especial (${valores.descripcion})</h5>
                    <p class="card-text">${valores.start} tel: ${valores.end}</p>
                    <a href="" class="btn btn-danger">Eliminar</a>
                    <a href="Managers.php?dir=updateContrato" class="btn btn-primary">Modificar</a>
                    </div>
                    <div class="card-footer text-muted bg-dark text-white">
                </div>
            </div>
            `;
        }
    })
}


 