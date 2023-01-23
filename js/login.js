function clearErrors()
{
    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }
}
function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function validateForm()
{
    var returnval = true;
    clearErrors();

    var uname = document.forms['login_form']["uname"].value;

    if (uname == "")
    {
        seterror("uname", "* User Name is Required !");
        returnval = false;
    }

    var psw = document.forms['login_form']["psw"].value;

    if (psw == "")
    {
        seterror("psw", "* Password is Required !");
        returnval = false;
    }

    var remember = document.forms['login_form']["remember"].checked;

    if (remember == "")
    {
        seterror("remember", "* Pleace check this box !");
        returnval = false;
    }

    return returnval;
}