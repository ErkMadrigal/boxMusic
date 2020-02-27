      <div class="ml-4 row" style="width: 25rem;">
        <div class="col-12">
          <input style="width: 19rem;" type="number"  id="horas" required class="form-control m-2" placeholder="Total de horas">
          <div class="invalid-tooltip">
              Por favor ingresa la cantidad de horas.
          </div>
        </div>
        <div class="col-12">
          <input style="width: 19rem;" type="number"  id="horaPres" required class="form-control m-2" placeholder="Precio por hora">
          <div class="invalid-tooltip">
              Por favor ingresa la cantidad de precio por hora.
          </div>
        </div> 
        <div class="col-12">
          <input style="width: 19rem;" type="number"  id="transporte" class="form-control m-2" placeholder="Transporte">
        </div>
        <div class="col-12">
          <div style="width: 19rem;" class="alert alert-primary m-2" id="alert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
            <span aria-hidden="true" id="total"></span>
          </div>
          <div style="width: 19rem;" class="alert alert-danger m-2" id="alertErr" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
            <span aria-hidden="true" id="msjErr"></span>
          </div>
        </div>
        <div class="col-3">
          <button class="btn btn-primary m-2"  id="btn" onclick="Calcular();">Calcular</button>
        </div>
        <div class="col-9">
         <button class="btn btn-danger m-2"  id="btnClear" onclick="Reset();">Clear</button>
        </div>
      </div>
  <script>

      let horas=document.getElementById('horas');
      let horasPres=document.getElementById('horaPres');
      let transporte=document.getElementById('transporte');
      let alert=document.getElementById('alert');
      let alertErr=document.getElementById('alertErr');
      let btn=document.getElementById('btn');
      let btnClear=document.getElementById('btnClear');

      let total=document.getElementById('total');
      let msjErr=document.getElementById('msjErr');

      btnClear.style.display='none';
      alert.style.display = 'none';
      alertErr.style.display = 'none';

    const Calcular=()=>{
      let precio;
      let precioT;
      let trans=transporte.value;
      precio=horasPres.value*horas.value;
      precioT=parseInt(precio)+parseInt(trans);
      if(precio>0){
        alertErr.style.display = 'none';
        alert.style.display = 'block';
        total.innerHTML += "Precio total horas $" + precio; 
        btn.setAttribute('disabled', 'disabled');
        btnClear.style.display='block';

        if(trans>0){
          total.innerHTML += "<br> Total + transporte (s) $" + precioT;
        }else{
          total.innerHTML += "<br> Total + transporte (s) $" + 'no aplica';
        }
        }else{
          alert.style.display = 'none';
          alertErr.style.display = 'block';
          msjErr.innerHTML ='No ha seleccionado un valor o los valores son negativos'; 
        }
    }
    const Reset = ()=>{
      btn.removeAttribute('disabled', 'disabled');
      btnClear.style.display = 'none';
      alert.style.display = 'none';
      total.innerHTML = ''  
      horas.value='';
      horasPres.value='';
      transporte.value='';

    }
        
  </script>
