var cuenta = 0;
  var contara = sessionStorage.getItem("cuenta");
  var chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
  var firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
  var opera =  navigator.userAgent.toLowerCase().indexOf('opera');
  var IE = navigator.userAgent.indexOf("MSIE") > -1 ;


   function navegador(){
    if (chrome) {
      return "Google Chrome";
    }else if (firefox) {
      return "Mozilla firefox";
    }else if (opera) {
      return "Opera";
    }else if (IE) {
      return "Internet Explorer";
    }else{
      return "Desconocido";
    }
  }
  function SO(){
    var navInfo = window.navigator.appVersion.toLowerCase();
    if(navInfo.indexOf("win") != -1)
    {
      return "Windows";
    }
    else if(navInfo.indexOf("linux") != -1)
    {
      return "Linux";
    }
    else if(navInfo.indexOf("mac") != -1)
    {
      return "Macintosh";
    }else{
      return "Desconocido";
    }
  }

  function enviar(){
    var parametros = {
      "navegador" : navegador(),
      "so" : SO()
    };
    $.ajax({
      data:  parametros,
      url:   'php/contador.php',
      type:  'post',
      complete: function(response){
        $('#visitas').html(response.responseText);
      }
    });
 }

  function obtenerNumeroVisitas(){
    var parametros = {
      "navegador" : navegador(),
      "so" : SO()
    };
    $.ajax({
      data:  parametros,
      url:   'php/visitas.php',
      type:  'post',
      complete: function(response){
        $('#visitas').html(response.responseText);
      }
    });
  }
if(contara == null){
  cuenta = 1;
  sessionStorage.setItem("cuenta", cuenta);
  enviar();
}else{
  obtenerNumeroVisitas();
}
