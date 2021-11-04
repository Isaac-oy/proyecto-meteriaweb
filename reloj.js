(function(){
  var actualizarHora=function(){
    var fecha =new Date(),
    horas= fecha.getHours(),
    ampm,
    min=fecha.getMinutes(),
    diaSemana=fecha.getDay(),
    dia=fecha.getDate(),
    mes=fecha.getMonth(),
    year=fecha.getFullYear(); 

var phrs=document.getElementById('horas'),
     pAMPM=document.getElementById('ampm'),
     Pmin=document.getElementById('min'),
     pDiaSemana=document.getElementById('diaSemana'),
     pDia=document.getElementById('dia'),
     pMes=document.getElementById('mes'),
     pYear=document.getElementById('year');

  var semana= ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
  pDiaSemana.textContent = semana[diaSemana];
  pDia.textContent = dia;
  var meses= ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
  pMes.textContent = meses[mes];
  pYear.textContent=year;

    if (horas >= 12) {
      horas = horas - 12;
      ampm= "PM";
    }else{
      ampm= "AM";
    }
    if (horas==0) {
      horas = 12;
    }
    phrs.textContent= horas;
    pAMPM.textContent=ampm;
    if (min<10) { min="0" + min; }
    Pmin.textContent=min;

  };
  actualizarHora();
  var interval = setInterval(actualizarHora,1000);
}())