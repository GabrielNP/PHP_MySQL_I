$(document).ready(function() {
    $("#login").focus();
  });

function myFunction() {
var x = document.getElementById("senha");
if (x.type === "password") {
    x.type = "text";
} else {
    x.type = "password";
}
}