function myFunction() 
{
document.getElementById("checkForm").onsubmit = function(e)
   {
    var fieldValue = document.getElementById("fname").value;
    var fieldValue = document.getElementById("Lname").value;
    var fieldValue = document.getElementById("email").value;
    var fieldValue = document.getElementById("phone").value;
    var fieldValue = document.getElementById("comment").value;

    if(fieldValue==null || fieldValue== "")
        {
            // the field was empty
            e.preventDefault();
            // something went wrong
            alert("missing info");
        }
    }
}