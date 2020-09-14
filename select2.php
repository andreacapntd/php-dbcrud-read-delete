<?php

 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "db_hotel_1";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn &&$conn ->connect_error) {

   echo "Connection failed: " . $conn -> connect_error;

   return;
 }

 $sql = "

  SELECT id, status, price
  FROM pagamenti
  WHERE price > 600

 ";

 $result = $conn -> query($sql);

 if ($result && $result -> num_rows > 0) {
?>
 <ul>

<?php
 while ($row = $result -> fetch_assoc()) {

?>
 <li>
   id:
   <?php echo $row['id'] ?>
   status:
   <?php echo $row['status'] ?>
   price:
   <?php echo $row['price'] ?>
 </li>

<?php
 }

?>

 </ul>
<?php
 } elseif ($result) {
    echo "0 results";
 }else {
   echo "query error";
 }

 $conn -> close();
