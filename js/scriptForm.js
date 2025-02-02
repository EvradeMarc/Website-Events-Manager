const form = document.getElementById("form-register");

const mdpField = document.getElementById("password");
const conMdpField = document.getElementById("Confmdp");

form.addEventListener("submit", function (event) {
  mdp = mdpField.value;
  conMdp = conMdpField.value;
  if (mdp !== conMdp) {
    event.preventDefault();
    alert("Mot de passe n'est pas le même");
  }
});
