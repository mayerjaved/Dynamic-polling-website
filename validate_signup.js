function myFunction(name,job)
{
alert("Welcome " + name + ", the " + job);
}


function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    let x1 = document.forms["myForm"]["lname"].value;
    let x2 = document.forms["myForm"]["fpass"].value;
    let x3 = document.forms["myForm"]["lpass"].value;
    if (x == "" || x1 == "" || x2 == "" || x3 == "" )  {
      alert("The following fields must be filled out: \n Email: \n Username: \n Password: \n Password has to be 8 characters long! \n Confirm password: ");
      return false;
    }
    else if (x.length > 60) {
        alert("Email is too long");
        return false;
    }
    else if (x1.length > 40) {
        alert("Username is too long");
        return false;
    }
    else if (x2.length != 8) {
        alert("Password needs to be 8 characters");
        return false;
    }
    else if (x2 != x3) {
        alert("Passwords do not match");
        return false;
    }
    else{
        alert("All fields are correctly entered. Wait for more development!");
        return false;

    }
  }