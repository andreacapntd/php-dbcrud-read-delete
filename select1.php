<?php

 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "db_hotel";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn &&$conn ->connect_error) {

   echo "Connection failed: " . $conn -> connect_error;

   return;
 }

 $sql = "

  SELECT *
  FROM pagamenti

 ";

 $result = $conn -> query($sql);

 if ($result && $result -> num_rows > 0) {

   while ($row = $result -> fetch_assoc()) {

     // var_dump($row); die();
     echo "Pagamento: " . $row['id'] . "  " . "Stato: " . $row['status'] . " " . "Prezzo: " .  $row['price'] .  "<br>";

   }
 } elseif ($result) {
    echo "0 results";
 }else {
   echo "query error";
 }

 $conn -> close();
