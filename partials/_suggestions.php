<?php 
    $showError = false;
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        include '_dbconnect.php';

        $name = $_POST['name'];
        $email = $_POST['email1'];
        $phone = $_POST['phoneNumber'];
        $suggestions = $_POST['suggestions']; 
        $sql = "INSERT INTO `suggestions`(`name` , `email` , `phone_number` , `suggestions`) VALUES ('$name' , '$email' , '$phone' , '$suggestions')";
        $result = mysqli_query($conn, $sql);

        if($result){
            $showAlert = true;
            header("Location: /forums/contacts.php?suggestions=true");
        }else{
            $showError = "Suggestion cannot be submitted";
            header("Location: /forums/contacts.php?suggestions=false&error=$showError");
        }
    }
?>