$(document).ready(function(){
  $('.datepicker').pickadate({
    // The title label to use for the month nav buttons
    labelMonthNext: 'Mes siguiente',
    labelMonthPrev: 'Mes pasado',

    // The title label to use for the dropdown selectors
    labelMonthSelect: 'Seleccione un mes',
    labelYearSelect: 'Seleccione un año',

    // Months and weekdays
    monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
    monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
    weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
    weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],

    // Materialize modified
    weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],

    // Today and clear
    today: 'hoy',
    clear: 'Borrar',
    close: 'OK',

    selectMonths: true, // Creates a dropdown to control month
    selectYears: 0, // Creates a dropdown of 15 years to control year,
    closeOnSelect: false // Close upon selecting a date,
  });

  $('.timepicker').pickatime({
    default: 'Ahora', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Borrar', // text for clear-button
    canceltext: 'Cancelar', // Text for cancel-button,
    container: undefined, // ex. 'body' will append picker to body
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });

  $('select').material_select();
  Materialize.updateTextFields();
});
