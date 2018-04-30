$(document).ready(function(){
  $("#formNewRegistration").on("submit", function(e){
    e.preventDefault();

    clientName = $("#usuarioName").val();
    clientNickName = $("#usuarioNickName").val();
    clientTel = $("#usuarioTel").val();
    clientEmail = $("#usuarioEmail").val();
    clientEntryDate = $("#usuarioDateEntrada").val();
    clientExitDate = $("#usuarioDateSalida").val();
    clientNumberOfNights = $("#usuarioNumNights").val();
    clientNumberOfPersons = $("#usuarioNumPersons").val();
    clientArrivalTime = $("#usuarioHour").val();
    clientRate = $("#usuarioRate").val();
    clientFormOfPayment = $("#usuarioFormOfPayment").val();
    clientRoomNumer = $("#usuarioRoomNumber").val();
    clientMadeBy = $("#usuarioMadeBy").val();
    clientStatus = $("#usuarioStatus").val();
    clientObs = $("#usuarioObservaciones").val();
    clientReceivedBy = $("#usuarioRecibio").val();
    clientReceivedByDate = $("#usuarioFecha").val();

    $.ajax({
      type:"POST",
      url:"../data/insertClient.php",
      data:{clientName:clientName,
            clientNickName:clientNickName,
            clientTel:clientTel,
            clientEmail:clientEmail,
            clientEntryDate:clientEntryDate,
            clientExitDate:clientExitDate,
            clientNumberOfNights:clientNumberOfNights,
            clientNumberOfPersons:clientNumberOfPersons,
            clientArrivalTime:clientArrivalTime,
            clientRate:clientRate,
            clientFormOfPayment:clientFormOfPayment,
            clientRoomNumer:clientRoomNumer,
            clientMadeBy:clientMadeBy,
            clientStatus:clientStatus,
            clientObs:clientObs,
            clientReceivedBy:clientReceivedBy,
            clientReceivedByDate:clientReceivedByDate
          },
      success:function(response){
        alert(response);
      }
    });
  });
});
