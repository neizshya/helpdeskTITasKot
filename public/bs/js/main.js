const inputs = document.querySelectorAll(".disabled-cursor-input");

inputs.forEach((input) => {
  input.addEventListener("mouseover", () => {
    input.classList.add("disabled-cursor");
  });
  input.addEventListener("mouseout", () => {
    input.classList.remove("disabled-cursor");
  });
});

const pegawaiRadio = document.getElementById("pegawai");
const nonpegawaiRadio = document.getElementById("nonpegawai");
const opdForm = document.getElementById("opdForm");
const nonOpdForm = document.getElementById("nonOpdForm");

pegawaiRadio.addEventListener("change", () => {
  if (pegawaiRadio.checked) {
    opdForm.classList.remove("d-none");
    nonOpdForm.classList.add("d-none");
  }
});

nonpegawaiRadio.addEventListener("change", () => {
  if (nonpegawaiRadio.checked) {
    nonOpdForm.classList.remove("d-none");
    opdForm.classList.add("d-none");
  }
});

var passwordInputs = document.getElementById("password_input");
var passwordInputsNon = document.getElementById("password_input_non");

var passwordTooltip = new bootstrap.Tooltip(passwordInputs, {
  placement: "top",
  trigger: "focus",
  html: true,
});

var passwordTooltipNon = new bootstrap.Tooltip(passwordInputsNon, {
  placement: "top",
  trigger: "focus",
  html: true,
});

function validatePassword(input, tooltip) {
  input.addEventListener("focus", function () {
    tooltip._element.setAttribute(
      "data-bs-original-title",
      "Ketentuan password: \n Memiliki min. 1 huruf kecil \n Memiliki min. 1 huruf kapital \n Memiliki min. 1 angka  \n Memiliki min. 8 huruf"
    );
    tooltip.show();
  });

  input.addEventListener("blur", function () {
    tooltip.hide();
  });

  input.addEventListener("input", function () {
    var password = input.value;
    var message = "";

    if (!/[a-z]/.test(password)) {
      message += "Membutuhkan min. 1 huruf kecil <br>";
    }

    if (!/[A-Z]/.test(password)) {
      message += "Membutuhkan min. 1 huruf kapital<br>";
    }

    if (!/\d/.test(password)) {
      message += "Membutuhkan min. 1 angka<br>";
    }

    if (password.length < 8) {
      message += "Membutuhkan min. 8 huruf<br>";
    }

    if (message === "") {
      tooltip.hide();
    } else {
      tooltip._element.setAttribute("data-bs-original-title", message);
      tooltip.show();
    }
  });
}

validatePassword(passwordInputs, passwordTooltip);
validatePassword(passwordInputsNon, passwordTooltipNon);
