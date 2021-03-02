<?php
    if(isset($_POST['name'])){
    
        $server = "localhost";
        $username = "root";
        $password = "";
    
    
        $conn = mysqli_connect($server,$username,$password);
        if(!$conn){
            die("connection failed" .mysqli_connect_error());
        }
        
        //echo "succeed";
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['textarea'];
    
    
        $sql ="INSERT INTO `march1`.`contact` (`name`, `email`, `message`) 
        VALUES ('$name', '$email', '$message')";
     
    
        if($conn->query($sql) == true){
            echo "successfully inserted";
            header('location:../index.php#contact');
        }
        else{
            echo "ERROR: $sql <br> $conn->error";
        }
    
        $conn ->close();
    }
    ?>