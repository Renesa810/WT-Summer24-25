
    function sub(){
    
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var address=document.getElementById("address").value;
    var city=document.getElementById("city").value;
    var state=document.getElementById("state").value;


    var mail=document.getElementById("mail").value;
    var phone=document.getElementById("phone").value;
    var create=document.getElementById("create").value;
    var confirm=document.getElementById("confirm").value;
    var amount=document.getElementById("amount").value;
    var check=document.getElementById("check").checked;

    var payment=document.querySelector('input[name="des"]:checked');


    var nameReg= /^[A-Za-z]+$/;
    var passwordReg=/^(?=.*[a-z])(?=.*[A-z])(?=.*[\d])(?=.*[\W_])$.{8,}$/;

    if(fname==""||lname==""||address==""||city==""||state==""||mail==""||phone==""||create==""||confirm==""||amount==""||check==""){
        alert("fill the form");
        return false;
    }

    if (!nameReg.test(fname) || !nameRegex.test(lname)) {
        alert("Name should contain only letters.");
        return false;
    }

    if (!passwordReg.test(create)) {
        alert("Password must contain at least 1 uppercase, 1 lowercase, 1 digit, and 1 special character.");
        return false;
    }



    //passwordnot same
    if(create!=confirm){
        alert("Password is not same in confirm password");
         return false;
    }
    //phone
    if(phone.length!=11){
        alert("Invalid Phone Number");
         return false;
    }

    if (!payment) {
    alert("Please select a payment method.");
    return false;
}
    if (!check) {
    alert("Please agree to the Terms and Conditions.");
    return false;
}

    return true;
}
