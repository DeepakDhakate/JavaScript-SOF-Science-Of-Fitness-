<?php
if(isset($_POST['submit'])){ 

if($userid =="admin" && $pass =="123@admin" ){

echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
 
?>
