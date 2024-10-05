<?php
  $persons1 = ["Aminuddin"=>25, "Adit"=>22, "Irgo"=>22];
  echo json_encode($persons1);
  $cars = ["Volvo", "BMW", "Toyota"];
  echo json_encode($cars);  
  $persons2 = '{"Aminuddin":25, "Adit":22, "Irgo":22}';
  $obj = json_decode($persons2);
  echo $obj->Aminuddin;
  echo $obj->Adit;
  echo $obj->Irgo;

  $persons2 = '{"Aminuddin":25, "Adit":22, "Irgo":22}';
  $obj = json_decode($persons2, true);
  echo $obj["Aminuddin"];
  echo $obj["Adit"];
  echo $obj["Irgo"];



$arrayData = [
    "nama" => "Irgo Satya Gemiwang",
    "usia" => 21,
    "pekerjaan" => "Presiden",
    "hobi" => ["Game", "Futsal", "Badminton"]
];
$initJson = json_encode($arrayData);
echo "Data dalam format Json :" . $initJson;
