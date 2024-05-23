const startDate = document.getElementById("start");
const returnDate = document.getElementById("return");
const totalPrice = document.getElementById("total-price");
const carPrice = Number(document.getElementById("car-price").textContent);

let startDateValue;
let returnDateValue;

function calculateTotalPrice(startDate, returnDate) {
  const start = new Date(startDate);
  const end = new Date(returnDate);

  let days = end - start;
  days = Math.floor(days / (1000 * 60 * 60 * 24)) + 1;

  if (!isNaN(days) && days > 0) {
    totalPrice.textContent = `Rp. ${(carPrice * days).toLocaleString("id-ID")}`;
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
