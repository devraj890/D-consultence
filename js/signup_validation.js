function clearErrors() {
    errors = document.getElementsByClassName('formerror');
    for (let item of errors) {
        item.innerHTML = "";
    }
}

function seterror(id, error) {
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function validateForm() {
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false
    //validation for name
    var name = document.forms['signup_form']["name"].value;

    if (name.length <= 3) {
        seterror("name", "*Length of name is too short");
        returnval = false;
    }
    var regex1 = /[0-9]/g;
    if (regex1.test(name) == true) {
        seterror("name", "*Number Not Allowed!");
        returnval = false;
    }

    if (name == "") {
        seterror("name", "*Name is Required!");
        returnval = false;
    }

    //validation for gender 
    var gender = document.forms['signup_form']["gender"].value;
    if (gender == "") {
        seterror("gender", "* Gender is Required !");
        returnval = false;
    }

    //validation for phone
    var phone = document.forms['signup_form']["phone"].value;
    if (phone.length < 10 || phone.length > 10) {
        seterror("phone", "*Phone number should be of 10 digits!");
        returnval = false;
    }

    var regex2 = /\d/;
    if (regex2.test(phone) == false) {
        seterror("phone", "* Only Number Allowed!");
        returnval = false;
    }

    if (phone.length == 0) {
        seterror("phone", "*Phone is Required!");
        returnval = false;
    }

    //validation for email
    var email = document.forms['signup_form']["email"].value;
    if (email.length > 25) {
        seterror("email", "*Email length is too long");
        returnval = false;
    }

    regex3 = /^[a-zA-Z0-9+_.-]+@(gmail|email|outlook|rediffmail|yahoo)\.com$/;
    if (regex3.test(email) == false) {
        seterror("email", "* Invalid email Address!");
        returnval = false;
    }

    if (email.length == 0) {
        seterror("email", "*email is Required!");
        returnval = false;
    }


    //validation for address
    var address = document.forms['signup_form']["address"].value;

    if (address == "") {
        seterror("address", "*Address is Required!");
        returnval = false;
    }

    //validation for username
    var username = document.forms['signup_form']["username"].value;

    if (username == "") {
        seterror("username", "*Username is Required!");
        returnval = false;
    }

    //validation for password
    var password = document.forms['signup_form']["password"].value;

    if (password == "") {
        seterror("password", "*Password is Required!");
        returnval = false;
    }

    //validation for password
    var cpassword = document.forms['signup_form']["cpassword"].value;

    if (cpassword == "") {
        seterror("cpassword", "*Confirm Password is Required!");
        returnval = false;
    }

    return returnval;
}