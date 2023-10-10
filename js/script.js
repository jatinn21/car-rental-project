"use strict";

const aboutBtn = document.querySelector("#about-link");
const vehiclesBtn = document.querySelector("#vehicles-link");
const offersBtn = document.querySelector("#offers-link");
const aboutSection = document.querySelector(".section--2");
const offersSection = document.querySelector(".section--3");
const vehiclesSection = document.querySelector(".section--4");

aboutBtn.addEventListener("click", () => {
  aboutSection.scrollIntoView({ behavior: "smooth" });
});

vehiclesBtn.addEventListener("click", () => {
  vehiclesSection.scrollIntoView({ behavior: "smooth" });
});

offersBtn.addEventListener("click", () => {
  console.log("hi");
  offersSection.scrollIntoView({ behavior: "smooth" });
});
