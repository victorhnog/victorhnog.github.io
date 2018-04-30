<?php
  require_once "connect.php";

  $datetime1 = date_create('2018-04-2');
  $datetime2 = date_create('2018-06-02');
  $interval = date_diff($datetime1, $datetime2);

  $diasEntreDatas = (int)$interval->format('%a');
  $cont = 0;
  $dias = array();
  $quartosDisponiveis = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

  for($cont; $cont < $diasEntreDatas; $cont++){
    $dataChecando = $datetime1->add(new DateInterval('P1D'));
    $dataChecando = $dataChecando->format("Y-m-d");

    $data = $dataChecando;
    $nova_data = date('Y-m-d', strtotime($data));

    $buscaDatas = $connect->prepare("SELECT entryDate, exitDate, rooms FROM reservations");
    $buscaDatas->execute();
    $disponibilidade = true;

    while($linha = $buscaDatas->fetch(PDO::FETCH_ASSOC)){
      $roomsIndisponiveis = explode(", ", $linha['rooms']);

      $de = date('Y-m-d', strtotime($linha['entryDate'].'+ 1 days'));
      $ate = date('Y-m-d', strtotime($linha['exitDate']));

      if(($nova_data >= $de) && ($nova_data <= $ate)){
        $quartosDisponiveis = array_diff($quartosDisponiveis, $roomsIndisponiveis);
      }
    }

  }

  $saida = array();
  foreach($quartosDisponiveis as $key => $value){
     array_push($saida, $value);
  }
  
  echo json_encode($saida);

?>
