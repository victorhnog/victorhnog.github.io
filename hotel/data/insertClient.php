<?php
  require_once "connect.php";

  $clientName            = $_POST['clientName'];
  $clientNickName        = $_POST['clientNickName'];
  $clientTel             = $_POST['clientTel'];
  $clientEmail           = $_POST['clientEmail'];
  $clientEntryDate       = $_POST['clientEntryDate'];
  $clientExitDate        = $_POST['clientExitDate'];
  $clientNumberOfNights  = $_POST['clientNumberOfNights'];
  $clientNumberOfPersons = $_POST['clientNumberOfPersons'];
  $clientArrivalTime     = $_POST['clientArrivalTime'];
  $clientRate            = $_POST['clientRate'];
  $clientFormOfPayment   = $_POST['clientFormOfPayment'];
  $clientRoomNumer       = $_POST['clientRoomNumer'];
  $clientMadeBy          = $_POST['clientMadeBy'];
  $clientStatus          = $_POST['clientStatus'];
  $clientObs             = $_POST['clientObs'];
  $clientReceivedBy      = $_POST['clientReceivedBy'];
  $clientReceivedByDate  = $_POST['clientReceivedByDate'];
  $clientBookingDate     = date("Y-m-d");

  try{
    $insertReservation = $connect->prepare("INSERT INTO reservations (client, clientNick, phoneNumer, email, entryDate, exitDate, numberOfPersons, numberOfNights, arrivalTime, reservationRate, formOfPayment, rooms, madeBy, status, obs, receicer, receiptDate, bookingDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $insertReservation->bindValue(1, $clientName);
    $insertReservation->bindValue(2, $clientNickName);
    $insertReservation->bindValue(3, $clientTel);
    $insertReservation->bindValue(4, $clientEmail);
    $insertReservation->bindValue(5, $clientEntryDate);
    $insertReservation->bindValue(6, $clientExitDate);
    $insertReservation->bindValue(7, $clientNumberOfPersons);
    $insertReservation->bindValue(8, $clientNumberOfNights);
    $insertReservation->bindValue(9, $clientArrivalTime);
    $insertReservation->bindValue(10, $clientRate);
    $insertReservation->bindValue(11, $clientFormOfPayment);
    $insertReservation->bindValue(12, implode(", ", $clientRoomNumer));
    $insertReservation->bindValue(13, $clientMadeBy);
    $insertReservation->bindValue(14, $clientStatus);
    $insertReservation->bindValue(15, $clientObs);
    $insertReservation->bindValue(16, $clientReceivedBy);
    $insertReservation->bindValue(17, $clientReceivedByDate);
    $insertReservation->bindValue(18, $clientBookingDate);
    $insertReservation->execute();
  }catch(PDOException $e){
    print($e-getMessage());
  }

  if(empty($insertReservation->errorInfo()[2])){
    print("OK");
  }else{
    print($insertReservation->errorInfo()[2]);
  }

?>
