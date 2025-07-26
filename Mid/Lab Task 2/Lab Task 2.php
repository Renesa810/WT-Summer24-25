<!DOCTYPE html>
<html >
<title>AIUB Form</title>

<style>
    div{
        background-color: white;
        overflow: auto;
        width: 160px;
        height: 47px;
        Margin: 10px;
    }

    body{
    background-color: #A9DFEA;
    }
    form{
        background-color: white;
        width: 450px;
        padding: 10px;
    }

    #addTb{
    padding: 7px 1px;
    }

    .textbox { 
    font-size: 15px;
    padding: 5px 14px;
 
}

</style>


    <center>
        <h1 style="color: #00023D">Bank Management System</h1>
        <h2 style="color: #00023D">Your Trusted Financial Partner</h2>
    </center>
    <h3 style="font-size: 20px">Customer Regestration Form</h3>
     <form>
        <style>
            background-color: light yellow;
        </style>
        <table>
        <tr>
            <td>Full Name:</td><td><input type="text" class="textbox"></td>
        </tr>
        <tr><td>Date of Birth: </td><td><input type="date"></td></tr>
        <tr><td>Gender:</td><td><input type="radio" name="des">Male

        <tr><td>Marrital Status:</td>
        <td><select>
            <option value="Single">--Single--</option>
            <option value="Married">Married</option>
        </select></td></tr>

        <tr><td>Account Type:</td>
        <td><select>
            <option value="Savings">--Savings--</option>
            <option value="Current">Current</option>
            <option value="Deposit">Deposit</option>
            <option value="Foreign">Foreign</option>
        </select></td></tr>
        <tr><td>Initial Deposit Amount:</td><td><input type="integer"></td></tr>
        <tr><td>Mobile Number:</td><td><input type="text" class="textbox"></td></tr>
        <tr><td>Email Address:</td><td><input type="email" class="textbox"></td></tr>
        <tr><td>Address:</td><td><input type="address" id="addTb"></td></tr>
        <tr><td>Occupation:</td><td><input type="text" class="textbox"></td></tr>
        <tr><td>National Id(NID):</td><td><input type="text" class="textbox"></td></tr>
        <tr><td>Set Password:</td><td><input type="password" class="textbox"></td></tr>

        <tr><td>Upload ID Proof: </td><td><input type="file"></td></tr>
</table>
    <input type="checkbox">I agree to the terms and conditions
    <input type="submit" value="Register" style="background-color: blue; color: white; margin-left: 150px; 
    margin-right: 20px; padding: 8px 12px"">
    <input type="submit" value="Clear" style="background-color: blue; color: white; padding: 8px 12px">



</form>

<div>This is a demo text to show how overflow works in a small container</div>


</html>