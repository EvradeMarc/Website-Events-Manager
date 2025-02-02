const filterInputs = document.querySelectorAll("#filter");
const cardContainer = document.getElementById("cardContainer");
const cards = cardContainer.getElementsByClassName("card");

filterInputs.forEach((input) => {
  input.addEventListener("input", function () {
    const filters = {
      titre: document.querySelector('input[name="titre"]').value.toLowerCase(),
      lieu: document.querySelector('input[name="lieu"]').value.toLowerCase(),
      date: document.querySelector('input[name="date"]').value,
    };

    Array.from(cards).forEach((card) => {
      const title = card.querySelector(".card-title").textContent.toLowerCase();
      const place = card.querySelector(".location").textContent.toLowerCase();
      const date = card.querySelector("#date").textContent;

      const matchTitre = filters.titre === "" || title.includes(filters.titre);
      const matchLieu = filters.lieu === "" || place.includes(filters.lieu);
      const matchDate = filters.date === "" || date.includes(filters.date);

      if (matchTitre && matchLieu && matchDate) {
        card.style.display = "";
      } else {
        card.style.display = "none";
      }
    });
  });
});
