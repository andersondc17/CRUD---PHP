$(document).ready(function(){
   


    document.getElementById('img').onchange = function () {
    var valor = document.getElementById('img').files[0].name;
    $('#imagen').val(valor);
   
  }


});