"use strict";

const backBtn = document.querySelector(".allCars--backButton");
const bookingCrossBtn = document.querySelector("#bookingModal-CrossBtn");
const carDetailsBtn = document.querySelector(".car-details-btn");

const bookingModal = document.querySelector(".booking-modal");

//go to index page when backBtn is triggered
backBtn.addEventListener("click", function () {
  console.log("hi");
  window.location.href = "http://localhost/car-rental-project";
});

// Open booking Modal
carDetailsBtn.addEventListener("click", function () {
  bookingModal.classList.remove("unactive");
});

// Close booking Modal
bookingCrossBtn.addEventListener("click", function () {
  bookingModal.classList.add("unactive");
});
