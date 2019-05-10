// validate phone length
function test()
{
    var phone=document.forms["details"]["phone"].value;
    if((phone.length!=10)&&(phone.length!=0))
    {
        alert('Please enter a valid phone number!');
        return false;
    }
}