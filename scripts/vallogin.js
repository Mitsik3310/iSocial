var passcorrect;
var emailcorrect;

function ValidateEmail(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputText.value.match(mailformat)) {
    emailcorrect = 1;
    return emailcorrect;
  }
  else {
    emailcorrect = 0;
    alert("Podano błędny adres e-mail");
    return emailcorrect;
  }
}

function CheckPassword(inputtxt) { 
  var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
if(inputtxt.value.match(decimal)) { 
  passcorrect = 1;
  return passcorrect;
}
else{ 
  passcorrect = 0;
  alert('Błędne hasło');
  return passcorrect;
}} 

function Redirect(){

  if(emailcorrect == 1 && passcorrect == 1){
    setTimeout("location.href='https://mitsik3310.github.io/iSocial/';",5);
  }
  if(emailcorrect == 0 || passcorrect == 0){
    return false;
  }
}