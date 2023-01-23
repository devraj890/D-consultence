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

    var username = document.forms['userlogin_form']["username"].value;

    if (username == "") {
        seterror("username", "* User Name is Required !");
        returnval = false;
    }

    var password = document.forms['userlogin_form']["password"].value;

    if (password == "") {
        seterror("password", "* Password is Required !");
        returnval = false;
    }

    return returnval;
}