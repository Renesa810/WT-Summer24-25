<?php
include '../userValidation.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title> Manage User page</title>
    <!-- .. → goes up one level (from View back to project)-->
    <link rel="stylesheet" href="../user.css"> 
</head>


<body>

    

    <div class="container">


    <div class="form">
    <form action="" method="post" enctype="multipart/form-data">
        
        <label>User Name:</label><br> 
        <input type="text" id="username" name="username" placeholder="Customer Name" value="<?php echo htmlspecialchars($name); ?>"></input><br>
        <span id="nameBlank" style="color:red;"><?php echo $nameErr; ?></span> <br>
        <label>Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($email); ?>"></input><br>
        <span id="emailBlank" style="color:red;"><?php echo $emailErr; ?></span><br>
        <label>Phone Number:</label><br>
        <input type="text" id="phone" name="phone" placeholder="Phone Number" value="<?php echo htmlspecialchars($phone); ?>"></input><br>
        <span id="phonrBlank" style="color:red;"><?php echo $phoneErr; ?></span><br>
        <label>Password:</label><br>
        <input type="text" id="password" name="password" placeholder="Password" value="<?php echo htmlspecialchars($password); ?>"></input><br>
        <span id="passBlank" style="color:red;"><?php echo $passErr; ?></span><br>
        <label>Address:</label><br>
        <input type="text" id="address" name="address" placeholder="Address" value="<?php echo htmlspecialchars($address); ?>"></input><br>
        <span id="addressBlank" style="color:red;"><?php echo $addressErr; ?></span><br>
        
<!----------------------------------------------------------------->
        <input type="submit" name= 'add' value="ADD" style="background-color: green;">
         <input type="submit" name='update' value="UPDATE" style="background-color: yellow;"><br>
        <span id="success" style="color:green;"><?php echo $successMsg; ?></span><br>
    </form>

</div>  
</div>

 <!-- Customer Section -->

  <div class="product-table">
        <table border="1" cellpadding="10" cellspacing="0">
        <caption style="caption-side: top; font-weight: bold; font-size: 20px; margin-bottom: 10px; color: #FF6600;">
        Customer List </caption>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Password</th>
                <th>Address</th>
            </tr>

<!--------------------INcCLUDING TABLE DATA-------------------------------->
            <?php include '../user_table.php'; ?>
        </table>
    </div>
<!------------------------------->
       
    </body>

</html>