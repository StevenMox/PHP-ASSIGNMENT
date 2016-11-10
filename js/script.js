function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
function validateForm(){
  // var p = document.getElementById("post").value;
  var Password = document.getElementById("password").value;
  var PasswordCon = document.getElementById("passwordcon").value;
  // var regex = new RegExp(/^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ]( )?\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i);

  // if (p.match(regex)) {
  //   return true;
  if (Password === PasswordCon){
    alert ("Your Order Info" + "\n" + "\n" + "First Name: " + document.getElementById("firstname").value + "\n" + "Last Name: " + document.getElementById("lastname").value + "\n" + "Address: " + document.getElementById("address").value + "\n" + "City: " + document.getElementById("city").value + "\n" + "Postal Code: " + document.getElementById("post").value + "\n" + "Province: " + document.getElementById("province").value + "\n" + "Email: " + document.getElementById("email").value);
    return true;
  }
  else {
    alert ("Passwords dont match!! Try again.");
    return false;
  }
}
