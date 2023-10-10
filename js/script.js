"use strict";

const aboutBtn = document.querySelector("#about-link");
const vehiclesBtn = document.querySelector("#vehicles-link");
const offersBtn = document.querySelector("#offers-link");
const loginBtn = document.querySelector("#login");
const signupBtn = document.querySelector("#signup");
const loginCrossBtn = document.querySelector("#login-CrossBtn");
const signupCrossBtn = document.querySelector("#signup-CrossBtn");

const aboutSection = document.querySelector(".section--2");
const offersSection = document.querySelector(".section--3");
const vehiclesSection = document.querySelector(".section--4");
const loginModal = document.querySelector(".login-modal");
const signupModal = document.querySelector(".signup-modal");

// Scrolling Effect start
aboutBtn.addEventListener("click", () => {
  aboutSection.scrollIntoView({ behavior: "smooth" });
});

vehiclesBtn.addEventListener("click", () => {
  vehiclesSection.scrollIntoView({ behavior: "smooth" });
});

offersBtn.addEventListener("click", () => {
  offersSection.scrollIntoView({ behavior: "smooth" });
});

// Scrolling Effect end

// Opening Login Modal
loginBtn.addEventListener("click", function () {
  loginModal.classList.remove("unactive");
});

// Opening Signup Modal
signupBtn.addEventListener("click", function () {
  signupModal.classList.remove("unactive");
});

loginCrossBtn.addEventListener("click", function () {
  loginModal.classList.add("unactive");
});

signupCrossBtn.addEventListener("click", function () {
  signupModal.classList.add("unactive");
});
