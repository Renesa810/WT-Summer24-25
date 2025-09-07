<?php
session_start();

include 'connection_db.php';

$nameErr = $emailErr = $phoneErr = $passErr = $addressErr = "";
$name = $email = $phone = $address = $password= "";
$successMsg="";
$edit_id = "";
$delete_id="";

$isUpdate = isset($_POST['update']);
$isAdd = isset($_POST['add']);

//-------------------------------------UPDATE-----------------------------------------------
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $stmt = $conn->prepare("SELECT * FROM user WHERE ID=?");
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['Username'];
        $email = $row['Email'];
        $phone = $row['Phone'];
        $password=$row['Password'];
        $address = $row['Address'];
    }
}

// ------------------------------------- DELETE -----------------------------------------------
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $stmt = $conn->prepare("DELETE FROM user WHERE ID=?");
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "User Deleted Successfully";
        header("Location: user.php");
        exit();
    } else {
        echo "Error deleting User: " . $conn->error;
    }
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $name=$_POST["username"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $address=$_POST["address"];


    if(empty($name)){
        $nameErr = "Name cannot be empty";
    }

    if(empty($email)){
        $emailErr = "Email cannot be empty";
    }

    if(empty($password)){
        $passErr="Password cannot be empty";
    }

    if(empty($phone)){
        $phoneErr = "Phone cannot be empty";
    } else if(strlen($phone)<11){
        $phoneErr = "Invalid Phone Number";
    }

    if(empty($address)){
        $addressErr = "Address cannot be empty";
    }


    //---------------------------------ADD--------------------------------------------

if ($isAdd) {

    if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($passErr) && empty($addressErr)) {
        $stmt = $conn->prepare("INSERT INTO user (Username, Email, Phone, Password, Address) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $phone, $password, $address);
        
        if ($stmt->execute()) {
            $_SESSION['success'] = "Customer Added Successfully";
            header("Location: user.php");
            exit();
        } else {
            $addressErr = "Error: " . $conn->error;
        }
    }
}

    //If everything is valid, clear inputs
    if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($passErr) && empty($addressErr)) {

         if ($edit_id) {
            if($isAdd){
                $_SESSION['success'] = "To update please click Edit button";
            }
            
            if($isUpdate){

                $stmt = $conn->prepare("UPDATE user SET Username=?, Email=?, Phone=?, Password=?, Address=? WHERE ID=?");
                $stmt->bind_param("sssssi", $name, $email, $phone, $password, $address, $edit_id);

                if ($stmt->execute()) {
                    $_SESSION['success'] = "User Updated Successfully";
                    header("Location: user.php");
                    exit();
                } else {
                    $addressErr = "Error updating Information: " . $conn->error;
                }
            }
        }
            

    }
}

// Show success message if available in session (flash message)
if (isset($_SESSION['success'])) {
    $successMsg = $_SESSION['success'];
    unset($_SESSION['success']); // Remove it so it shows only once
}

?>