document.addEventListener("DOMContentLoaded", afterload);

function afterload() {
  let input = document.querySelector(".form-control");
  let data = document.querySelector("#datalistOptions");

  input.addEventListener("keyup", () => {
    fetch(
      `http://127.0.0.1:8000/Projet1/Swift_Knowledge/php/recherche.php${input.value}`
    )
      .then(function (response) {
        return response.text();
      })
      .then((option) => {
        console.log(option);
        data.innerHTML = option;
      });
  });

  document.addEventListener("keypress", (e) => {
    if (e.code == "Enter") {
      window.location.href = `http://127.0.0.1:8000/product/${input.value}`;
    }
  });
}
