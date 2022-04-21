var passcorrect;
var emailcorrect;
var phonecorrect;
var confirmPasswordcorrect;

function ValidateEmail(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputText.value.match(mailformat)) {
    emailcorrect = 1;
    return emailcorrect;
  }
  else {
    emailcorrect = 0;
    console.log(emailcorrect);
    alert("Podano błędny adres e-mail");
    return emailcorrect;
  }
}

function PhoneNumber(inputtxt) {
  var phoneno = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{3})$/;
  if (inputtxt.value.match(phoneno)) {
    phonecorrect = 1;
    return phonecorrect;
  }
  else {
    phonecorrect = 0;
    alert('Błędny numer telefonu');
    return phonecorrect;
  }
}

function CheckPassword(inputtxt) {
  var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
  if (inputtxt.value.match(decimal)) {
    passcorrect = 1;
    return passcorrect;
  }
  else {
    passcorrect = 0;
    alert('Hasło nie spełnia wymogów bezpieczeństwa. Musi zawierać przynajmniej jedną dużą i małą literę, znak specjalny oraz cyfrę, a także o długości nie krótszej niż 8 znaków i nie dłuższej niż 15 znaków.')
    return passcorrect;
  }
}

function Validate() {
  var password = document.getElementById("pass").value;
  var confirmPassword = document.getElementById("passrep").value;
  if (password != confirmPassword) {
    confirmPasswordcorrect = 0;
    alert('Twoje hasła nie są identyczne.');
    return confirmPasswordcorrect;
  }
  confirmPasswordcorrect = 1;
  return confirmPasswordcorrect;
}

function Redirect() {
  if (emailcorrect == 1 && passcorrect == 1 && phonecorrect == 1 && confirmPasswordcorrect == 1) {
    setTimeout("location.href='https://mitsik3310.github.io/iSocial/pages/more_info.html';",5);
  }
  if (emailcorrect == 0 || passcorrect == 0 || phonecorrect == 0 || confirmPasswordcorrect == 0) {
    return false;
  }
}