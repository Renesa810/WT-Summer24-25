<!Doctype html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="task_3_style.css">
        <script src="task_3_valid.js"></script>
    </head>

    

    <body>

    

        <form onsubmit="return sub()">
            <h1 style="center">Donation Form</h1>


        <label>First Name:</label><br><input type="text" id="fname"><br>
        <label>Last Name:</label><br><input type="text" id="lname"><br>
        <label>Address:</label><br><input type="text" id="address"><br>
        <label>City:</label><br><input type="text" id="city"><br>
        
        <label>State:</label><br>
        <select id="state">
            <option value="">--Select State--</option>
            <option value="California">California</option>
            <option value="New jersey">New Jersey</option>
        </select><br>


        <label>Email:</label><br><input type="email" id="mail"><br>
        <label>Phone:</label><br><input type="number" id="phone"><br>
        <label>Create Password(Minimum 8 characters):</label><br><input type="password" id="create"><br>
        <label>Confirm Password:</label><br><input type="password" id="confirm"><br>
        <label>Donation Amount:</label><br><input type="number" id="amount"><br>
        <label>Payment Method:</label><br><input type="radio" name="des" id="card" value="Card">Card<input type="radio" id="cash" name="des" value="Cash">Cash<input type="radio" id="mobile" name="des" value="Mobile Banking">Mobile Banking<br>
        <input type="checkbox" id="check">I agree the Terms and Conditions<br>

        <h1> Additional Information </h1>
 
        <input type="checkbox" id="check2"> I would like to my gift to reamin anoymous.<br>
        <input type="checkbox" id="check3"> My employer offers a matching gift program.<br>
        <input type="checkbox" id="check4"> Please don't send a thank you letter.<br>

        <label>Comments: <br></td><td><textarea rows="5" cols="50"></textarea><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset" >


</form>

        
    </body>
</html>