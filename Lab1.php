<!DOCTYPE html>
<html >
<title>AIUB Form</title>
<body>
    <center>
        <h1 style="color: blue">AIUB</h1>
        <h2 style="color: blue">Registration Form</h2>
    </center>
    <h3>Complete the Regestration</h3>
    <form>
        <table>
        <tr>
            <td>Full Name:</td><td><input type="text"></td>
        </tr>
        <tr>
            <td>Email:</td><td><input type="text"></td>
    </tr>
        <tr><td>Password:</td><td><input type="text"></td></tr>
        <tr><td>Gender:</td><td><input type="radio" name="des">Male<input type="radio" name="des">Female</td></tr>
        <tr><td>Language Known:</td><td><input type="checkbox">English<input type="checkbox">Bangla<input type="checkbox">Korean</td></tr> 
        <tr><td>Country:</td>
        <td><select>
            <option value="">--Select Country--</option>
            <option value="bangladesh">Bangladesh</option>
            <option value="indonesia">India</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
        </select></td></tr>
        <tr><td>Date of Birth: </td><td><input type="date"></td></tr>
        <tr><td>Upload Photo: </td><td><input type="file"></td></tr>
       <tr> <td>Comments: </td><td><textarea rows="6" cols="50"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="Register"></td></tr>
</table>


    </form>

    
</body>
</html>