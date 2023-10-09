document.addEventListener("DOMContentLoaded", function () {
  // Get the elements
  const loginSection = document.getElementById("loginSection");
  const registerSection = document.getElementById("registerSection");
  const forgotPasswordSection = document.getElementById(
    "forgotPasswordSection"
  );

  const showRegisterLink = document.getElementById("showRegisterLink");
  const showLoginLink = document.getElementById("showLoginLink");
  const showForgotPasswordLink = document.getElementById(
    "showForgotPasswordLink"
  );

  const cancelButton = document.querySelector(".modal-footer .btn-danger");
  const modalValidation = document.getElementById("modal_Validation");
  // Add event listeners
  showRegisterLink.addEventListener("click", function () {
    loginSection.classList.remove("d-block");
    loginSection.classList.add("d-none");

    registerSection.classList.remove("d-none");
    registerSection.classList.add("d-block");

    forgotPasswordSection.classList.remove("d-block");
    forgotPasswordSection.classList.add("d-none");
  });

  showLoginLink.addEventListener("click", function () {
    loginSection.classList.remove("d-none");
    loginSection.classList.add("d-block");

    registerSection.classList.remove("d-block");
    registerSection.classList.add("d-none");

    forgotPasswordSection.classList.remove("d-block");
    forgotPasswordSection.classList.add("d-none");
  });

  showForgotPasswordLink.addEventListener("click", function () {
    loginSection.classList.remove("d-block");
    loginSection.classList.add("d-none");

    registerSection.classList.remove("d-block");
    registerSection.classList.add("d-none");

    forgotPasswordSection.classList.remove("d-none");
    forgotPasswordSection.classList.add("d-block");
  });

  showLoginLink2.addEventListener("click", function () {
    loginSection.classList.remove("d-none");
    loginSection.classList.add("d-block");

    registerSection.classList.remove("d-block");
    registerSection.classList.add("d-none");

    forgotPasswordSection.classList.remove("d-block");
    forgotPasswordSection.classList.add("d-none");
  });

  showRegisterLink2.addEventListener("click", function () {
    loginSection.classList.remove("d-block");
    loginSection.classList.add("d-none");

    registerSection.classList.remove("d-none");
    registerSection.classList.add("d-block");

    forgotPasswordSection.classList.remove("d-block");
    forgotPasswordSection.classList.add("d-none");
  });

  cancelButton.addEventListener("click", function () {
    // Find the modal element
    if (modalValidation) {
      $(modalValidation).modal("hide");
    }
  });

  // Reset the modal to the default state when it's hidden
  $(modalValidation).on("hidden.bs.modal", function () {
    loginSection.classList.remove("d-none");
    loginSection.classList.add("d-block");

    registerSection.classList.remove("d-block");
    registerSection.classList.add("d-none");

    forgotPasswordSection.classList.remove("d-block");
    forgotPasswordSection.classList.add("d-none");
  });
});
