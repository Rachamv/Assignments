<!DOCTYPE html>
<html>

<body>
	<center>

  <h1>DISPLAYING USER DATA </h1>
 <?php
// get data
$file = fopen("userdata.csv","r");
while(! feof($file))
  {
  print_r(fgetcsv($file));
  }

fclose($file);
?> 

  <?php

  // submit data
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $data = [$name, $email, $dob, $gender, $country];
    //write to file
    $file = fopen('userdata.csv', 'a+');
    fputcsv($file, $data);
    fclose($file);
}
else{
    echo "No data kindly input some data";
}
?>
  </center>
</body>

</html>
