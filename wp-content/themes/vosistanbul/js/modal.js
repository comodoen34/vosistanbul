document.addEventListener("DOMContentLoaded", () => {
  const menuCloseBtn = document.querySelector(".btn-close");
  const menuOpenBtn = document.querySelector("#delivery-zone-btn");
  const menuModal = document.querySelector(".discover-modal");

  menuCloseBtn &&
    menuCloseBtn.addEventListener("click", function () {
      menuModal.style = "display: none !important";
      body.style.overflow = "visible";
      body.style.padding = "0";
    });

  menuOpenBtn &&
    menuOpenBtn.addEventListener("click", function () {
      menuModal.style =
        "display: block !important; background: rgba(0,0,0, .5);";
    });
});
