// validate username, password, phone
function validate()
{
    var name=document.forms["signup"]["name"].value;
    var password=document.forms["signup"]["password"].value;
    var repassword=document.forms["signup"]["repassword"].value;
    var email=document.forms["signup"]["email"].value;
    var phone=document.forms["signup"]["phone"].value;
    var realname=document.forms["signup"]["realname"].value;
    
    
    if ((realname==null || realname=="") ||(password==null || password=="") || (name==null || name=="") ||
     (repassword==null || repassword=="") || (email==null || email=="") || (phone==null || phone==""))
    {
        alert("Please fill all the fields!");return false;
    }

    if(password!=repassword)
    {
        alert("Passwords do not match!");return false;
    }
    
    if(name.length>10)
    {
        alert('Username should be less than 10 characters!');return false;
    }

    if(phone.length!=10)
    {
        alert("Please enter a valid phone number!");return false;
    }
    
    else
    return true;
}

// validate username
function test()
{
    var name=document.forms["signup"]["name"].value;
    if(name.length>10)
    {
        alert('Username should be less than 10 characters!');
    }
}

// validate password
function test2()
{
    var password=document.forms["signup"]["password"].value;
    var repassword=document.forms["signup"]["repassword"].value;
    if(password!=repassword)
    {
        alert("Passwords do not match!");return false;
    }
}
