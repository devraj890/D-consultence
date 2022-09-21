function clearErrors()
{
    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }
}

function seterror(id, error)
{
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function validateForm()
{
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false

    //validate for first name
    var first_name = document.forms['enroll_form']["first_name"].value;

    if (first_name.length < 3)
    {
        seterror("first_name", "*Length of First Name is Too Short !");
        returnval = false;
    }
    
    var reg_first_name = /[0-9]/g;
    if (reg_first_name.test(first_name) == true)
    {
        seterror("first_name", "*Number Not Allowed !");
        returnval = false;
    }

    if (first_name == "") {
        seterror("first_name", "*First Name is Required !");
        returnval = false;
    }

    // validate for last name
    var last_name = document.forms['enroll_form']["last_name"].value;

    if (last_name.length < 3)
    {
        seterror("last_name", "*Length of Last Name is Too Short !");
        returnval = false;
    }
    var reg_last_name = /[0-9]/g;
    if (reg_last_name.test(last_name) == true)
    {
        seterror("last_name", "*Number Not Allowed !");
        returnval = false;
    }

    if (last_name == "") {
        seterror("last_name", "*Last Name is Required !");
        returnval = false;
    }

    // validate for gender
    var gender = document.forms['enroll_form']["gender"].value;
    if (gender == "")
    {
        seterror("gender", "* Gender is Required !");
        returnval = false;
    }

    //validate for Date of Birth
    var dob = document.forms['enroll_form']["date_of_birth"].value;
    if (dob == "")
    {
        seterror("date_of_birth", "* DOB is Required !");
        returnval = false;
    }

    //validate for father name
    var father_name = document.forms['enroll_form']["father_name"].value;
  
    if (father_name.length < 3)
    {
        seterror("father_name", "* Length of Father Name is Too Short !");
        returnval = false;
    }

    var reg_father_name = /[0-9]/g;
    if (reg_father_name.test(father_name) == true)
    {
        seterror("father_name", "* Number Not Allowed !");
        returnval = false;
    }

    if (father_name == "")
    {
        seterror("father_name", "* Father Name is Required !");
        returnval = false;
    }

    //validate for mother name
    var mother_name = document.forms['enroll_form']["mother_name"].value;
    
    if (mother_name.length < 3)
    {
        seterror("mother_name", "* Length of Mother Name is Too Short !");
        returnval = false;
    }

    var reg_mother_name = /[0-9]/g;
    if (reg_mother_name.test(mother_name) == true)
    {
        seterror("mother_name", "* Number Not Allowed !");
        returnval = false;
    }

    if (mother_name == "")
    {
        seterror("mother_name", "* Mother Name is Required !");
        returnval = false;
    }

    //validate for phone
    var phone = document.forms['enroll_form']["phone"].value;
    if (phone.length < 10 || phone.length >10){
        seterror("phone", "* Phone Number should be of 10 digits !");
        returnval = false;
    }

    var reg_phone = /\d/;
    if (reg_phone.test(phone) == false)
    {
        seterror("phone", "* Only Number Allowed !");
        returnval = false;
    }

    if (phone.length == 0)
    {
        seterror("phone", "* Phone Number is Required !");
        returnval = false;
    }

    //validate for email
    var email = document.forms['enroll_form']["email"].value;
    if (email.length > 25)
    {
        seterror("email", "* Email length is too long !");
        returnval = false;
    }

    reg_email = /^[a-zA-Z0-9+_.-]+@(gmail|email|outlook|rediffmail|yahoo)\.com$/;
    if (reg_email.test(email) == false)
    {
        seterror("email", "* Invalid email Address !");
        returnval = false;
    }

    if (email.length == 0)
    {
        seterror("email", "* Email is Required !");
        returnval = false;
    }

    //validate for local address
    var local_address = document.forms['enroll_form']["local_address"].value;
    if (local_address == "")
    {
        seterror("local_address", "* Local Address is Required !");
        returnval = false;
    }

    //validate for parmanent address
    var parmanent_address = document.forms['enroll_form']["parmanent_address"].value;
    if (parmanent_address == "")
    {
        seterror("parmanent_address", "* Parmanent Address is Required !");
        returnval = false;
    }

    //validate for highest education
    var heducation = document.forms['enroll_form']["heducation"].value;
    
    var reg_heducation = /[0-9]/g;
    if (reg_heducation.test(heducation) == true)
    {
        seterror("heducation", "* Number Not Allowed !");
        returnval = false;
    }

    if (heducation == "")
    {
        seterror("heducation", "* Highest Education is Required !");
        returnval = false;
    }

    //validate for marksheet
    var marksheet = document.forms['enroll_form']["marksheet"].value;

    var ext_marksheet = Array(".png", ".Png", ".jpg", ".JPG", ".jpeg", ".JPEG");

    if (!(marksheet.match(ext_marksheet[0]) == ext_marksheet[0] || marksheet.match(ext_marksheet[1]) == ext_marksheet[1] || marksheet.match(ext_marksheet[2]) == ext_marksheet[2] || marksheet.match(ext_marksheet[3]) == ext_marksheet[3] || marksheet.match(ext_marksheet[4]) == ext_marksheet[4] || marksheet.match(ext_marksheet[5]) == ext_marksheet[5]))
    {
        seterror("marksheet", "* Only jpeg, jpg and png images Allowed !");
        returnval = false;
    }

    if (marksheet == "")
    {
        seterror("marksheet", "* please Select file !");
        returnval = false;
    }

    //validate for aadhar number
    var aadhar_no = document.forms['enroll_form']["aadhar_no"].value;

    var reg_aadhar_no = /^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/;
    if (reg_aadhar_no.test(aadhar_no) == false)
    {
        seterror("aadhar_no", "* Invalid Aadhar Number !");
        returnval = false;
    }

    if (aadhar_no == "")
    {
        seterror("aadhar_no", "* Aadhar is Required !");
        returnval = false;
    }

    //validate for aadhar attach

    var aadhar_attach = document.forms['enroll_form']["aadhar_attach"].value;

    var ext_aadhar = Array(".png", ".Png", ".jpg", ".JPG", ".jpeg", ".JPEG");

    if (!(aadhar_attach.match(ext_aadhar[0]) == ext_aadhar[0] || aadhar_attach.match(ext_aadhar[1]) == ext_aadhar[1] || aadhar_attach.match(ext_aadhar[2]) == ext_aadhar[2] || aadhar_attach.match(ext_aadhar[3]) == ext_aadhar[3] || aadhar_attach.match(ext_aadhar[4]) == ext_aadhar[4] || aadhar_attach.match(ext_aadhar[5]) == ext_aadhar[5]))
    {
        seterror("aadhar_attach", "* Only jpeg, jpg and png images Allowed !");
        returnval = false;
    }

    if (aadhar_attach == "")
    {
        seterror("aadhar_attach", "* please Select file !");
        returnval = false;
    }


    //validate for pan number

    var pan_no = document.forms['enroll_form']["pan_no"].value;

    var reg_pan_no = /^[A-Z]{3}[ABCFGHLJPT][A-Z][0-9]{4}[A-Z]$/;
    if (reg_pan_no.test(pan_no) == false)
    {
        seterror("pan_no", "* Invalid Pan Card Number !");
        returnval = false;
    }

    if (pan_no == "")
    {
        seterror("pan_no", "* Pan Number is Required !");
        returnval = false;
    }

    //validate for pan attach

    var pan_attach = document.forms['enroll_form']["pan_attach"].value;

    var ext_pan = Array(".png", ".Png", ".jpg", ".JPG", ".jpeg", ".JPEG");

    if (!(pan_attach.match(ext_pan[0]) == ext_pan[0] || pan_attach.match(ext_pan[1]) == ext_pan[1] || pan_attach.match(ext_pan[2]) == ext_pan[2] || pan_attach.match(ext_pan[3]) == ext_pan[3] || pan_attach.match(ext_pan[4]) == ext_pan[4] || pan_attach.match(ext_pan[5]) == ext_pan[5]))
    {
        seterror("pan_attach", "* Only jpeg, jpg and png images Allowed !");
        returnval = false;
    }

    if (pan_attach == "")
    {
        seterror("pan_attach", "* please Select file !");
        returnval = false;
    }

    //validate for passport number

    var passport = document.forms['enroll_form']["passport"].value;

    var reg_passport = /^[A-Z]{1}[0-9]{7}$/;
    if (reg_passport.test(passport) == false)
    {
        seterror("passport", "* Invalid Passport Number !");
        returnval = false;
    }

    if (passport == "")
    {
        seterror("passport", "* Passport is Required !");
        returnval = false;
    }

    //validate passport attach

    var pass_attach = document.forms['enroll_form']["pass_attach"].value;

    var ext_pass = Array(".png", ".Png", ".jpg", ".JPG", ".jpeg", ".JPEG");

    if (!(pass_attach.match(ext_pass[0]) == ext_pass[0] || pass_attach.match(ext_pass[1]) == ext_pass[1] || pass_attach.match(ext_pass[2]) == ext_pass[2] || pass_attach.match(ext_pass[3]) == ext_pass[3] || pass_attach.match(ext_pass[4]) == ext_pass[4] || pass_attach.match(ext_pass[5]) == ext_pass[5]))
    {
        seterror("pass_attach", "* Only jpeg, jpg and png images Allowed !");
        returnval = false;
    }

    if (pass_attach == "")
    {
        seterror("pass_attach", "* please Select file !");
        returnval = false;
    }

    //validate study program

    var sprogram = document.forms['enroll_form']["sprogram"].value;

    if (sprogram == "")
    {
        seterror("sprogram", "* Study Program is Required !");
        returnval = false;
    }

    //validate course

    var course = document.forms['enroll_form']["course"].value;

    if (course == "")
    {
        seterror("course", "* Course is Required !");
        returnval = false;
    }

    //validate country

    var country = document.forms['enroll_form']["country"].value;

    if (country == "")
    {
        seterror("country", "* Country is Required !");
        returnval = false;
    }

    //validate university

    var university = document.forms['enroll_form']["university"].value;

    if (university == "")
    {
        seterror("university", "* university is Required !");
        returnval = false;
    }

    //return the value of function .. the value is  false than form is not submit....
    return returnval;
}