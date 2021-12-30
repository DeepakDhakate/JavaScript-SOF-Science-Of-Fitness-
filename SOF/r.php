<?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("project", $connection); 
if(isset($_POST['submit'])){ 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$add = $_POST['add'];
$phone = $_POST['phone'];
$email = $_POST['email'];
if($fname !=''||$email !=''){

$query = mysql_query("insert into reg(fname, lname, address, phone, email) values ('$fname', '$lname', '$add', '$phone', '$email')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); 
?>
