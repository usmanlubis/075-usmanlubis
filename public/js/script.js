const startDate = document.getElementById("start");
const returnDate = document.getElementById("return");
const dateInvalidMsg = document.getElementById("invalid-date-input");
const carPrice = Number(document.getElementById("car-price").textContent);
const totalPrice = document.getElementById("total-price");
const rentButton = document.getElementById("rent");

let startDateValue;
let returnDateValue;

function calculateTotalPrice(startDate, returnDate) {
  const start = new Date(startDate);
  const end = new Date(returnDate);

  let days = end - start;
  days = Math.floor(days / (1000 * 60 * 60 * 24)) + 1;

  const yesterday = new Date();
  yesterday.setDate(yesterday.getDate() - 1);

  if (days > 0 && start >= yesterday && end >= yesterday) {
    dateInvalidMsg.classList.add("hidden");
    rentButton.removeAttribute("disabled", false);
  } else {
    dateInvalidMsg.classList.remove("hidden");
    rentButton.setAttribute("disabled", true);
  }

  if (!isNaN(days) && days > 0) {
    const totalPriceValue = carPrice * days;
    totalPrice.textContent = `Rp. ${totalPriceValue.toLocaleString("id-ID")}`;
  } else {
    totalPrice.textContent = `Rp. 0`;
  }
}

document.addEventListener("DOMContentLoaded", function () {
  startDate.addEventListener("input", function (e) {
    startDateValue = e.target.value;
    calculateTotalPrice(startDateValue, returnDateValue);
  });

  returnDate.addEventListener("input", function (e) {
    returnDateValue = e.target.value;
    calculateTotalPrice(startDateValue, returnDateValue);
  });
});
