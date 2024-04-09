<?php
require_once('config.php');
?>

<?php

if (isset($_POST)){
    $username    = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $password1   =   $_POST['password1'];
    
    
    $sql = "INSERT INTO staffregister(username, phonenumber,password1) VALUES(?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$username, $phonenumber, $password1]);
        if($result)
        {
            echo 'Successfully Register.';
        }
        else
        {
            echo 'There were erros while saving the data.';
        }
  }else{
	echo 'No data';
}
