<?php

    $result = false;

    $dbhost = 'localhost';
    $username = 'root';
    $password = '1234';
    $db = 'ehospital';

    if( $_SERVER['REQUEST_METHOD']=='POST' ){

        if (empty($_POST['doc_id']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['speciality'])) {
            echo '<script>alert("All fields are required")</script>';
        } else {
        $conn = new mysqli ( $dbhost,$username, $password, $db );
        if( $conn ){

            $sql='insert into `adddoctor` ( `doc_id`,`name`,`email`,`phone`,`speciality` ) values (?,?,?,?,?);';
            $stmt=$conn->prepare( $sql );
            $stmt->bind_param('sssss', $_POST['doc_id'],$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['speciality'] );
            $result = $stmt->execute();

            if ($result) {
                
                echo '<script>alert("Data inserted successfully")</script>';
                
            } else {
                echo '<script>alert("Error inserting data")</script>'. $stmt->error;
            }
        } else {
            echo '<script>alert("Error connecting to the database")</script>';
        }
        $conn->close();
    }
}

?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Add New Doctor</title>
    </head>
    
       
    <body>
        <div class="container">
        <img src="images/logo.png" alt="Website Logo" class="logo">
        <form method='post' class='add-doctor-form'>

        

        <h2>Add New Doctor</h2>

            <label for="doc_id">Id:</label>
            <input type='text' name='doc_id' />
            

            <label for="name">Name:</label>
            <input type='text' name='name' />
            <label for="email">Email:</label>
            <input type='text' name='email' />
            <label for="phone">Phone:</label>
            <input type='text' name='phone' />

            <label for="speciality">Specialist</label>
                <select name="speciality">
                  <option value="accident and emergency">Accident and Emergency</option>
                  <option value="cardiology">Cardiology</option>
                  <option value="dermatology">Dermatology</option>
                  <option value="general practice">General Practice</option>
                  <option value="internal medicine">Internal Medicine</option>
                  <option value="neurology">Neurology</option>
                  <option value="orthopedics">Orthopedics</option>
                  <option value="pediatrics">Pediatrics</option>
                  <option value="psychiatry">Psychiatry</option>
                  <option value="surgery">Surgery</option>
                  <option value="Gynecologist">Gynecologist</option>
                  <option value="childspecialist">child Specialist</option>
                  <option value="pumonologist">pulmonologist</option>
                  <option value="ayurveda">Ayurveda</option>

                  

                  


                </select>

                <button type="submit" name="submit" value="insert">Add Doctor</button>
                
                
<br>
<br>
        </form>
    </body>
</html>