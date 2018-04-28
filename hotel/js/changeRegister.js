$(document).ready(function(){
  var  $input = $('#usuarioDateEntrada').pickadate();
  var picker = $input.pickadate('picker')
  picker.set('select', [2018, 4, 28]);

  var  $input = $('#usuarioDateSalida').pickadate();
  var picker = $input.pickadate('picker')
  picker.set('select', [2018, 5, 2]);


});
