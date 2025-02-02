const formValidation = document.getElementById("valider-modify-mdp");

const mdpField = document.getElementById("new-password");
const conMdpField = document.getElementById("cf-new-password");

formValidation.addEventListener("click", function (event) {
  mdp = mdpField.value;
  conMdp = conMdpField.value;
  if (mdp !== conMdp) {
    event.preventDefault();
    alert("Mot de passe n'est pas le même");
  }
});
