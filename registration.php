 <?php 

include ("registration.php");

if ($_SERVER ["REQUEST_METHOD] = "POST) {

 $Full_name = $_POST ['name'];
 $Email = $_POST ['email'];
 $Destination = $_POST ['destination'];
 $Date = $_POST ['date'];
 


 $stmt = $conn prepare ("INSERT INTO register (Full_name, Email, Destination, Date) VALUES (?, ?, ?, ?)");

 $stmt bind_param("ssssi", $Full_name, $Email, $Destination, $Date);

 if ($stmt excute()) {
  echo "order placed successfully";
 }
 else{
  echo "Error: " . $stmt error;
 }
    ?>
 

