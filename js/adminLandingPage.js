"use strict";
const formContainer = document.querySelector(".login");
const submitBtn = document.querySelector(".signup-btn");
const inputFields = document.querySelectorAll(".inputField");
const signupFields = document.querySelectorAll(".signupField");
const promptBox = document.querySelector(".promptBox");
const signupForm = document.querySelector(".signup__form");
const loginForm = document.querySelector(".loginPart");
const signup = document.querySelectorAll(".signupBox");
const loginBtn = document.querySelector("#login-btn");
const boxDetail = document.querySelector(".signupPart");
const inputBox = document.querySelectorAll(".inputBox");

submitBtn.addEventListener("click", () => {
  // to hide the login form when sign up button is clicked
  formContainer.style.height = "0%";
  formContainer.style.transition = "all ease .8s";
  inputFields.forEach((e) => e.classList.add("u__hidden"));

  // to show the sign up box
  promptBox.style.height = "60%";
  promptBox.style.transition = "all ease .8s .8s";
  signupFields.forEach((e) => (e.style.animationPlayState = "running"));
  loginForm.style.display = "none";
  boxDetail.style.top = "-30%";
  // document.querySelector(".top").style.display = "none";
  document
    .querySelectorAll(".signupBox")
    .forEach((e) => (e.style.display = "flex"));
});

//when user clicks on login btn
loginBtn.addEventListener("click", function () {
  // Input button of prompt box disapper and make prompt box height zero
  document
    .querySelectorAll(".signupBox")
    .forEach((e) => (e.style.display = "none"));

  ///now reduce the height of prompt box
  document.querySelector(".promptBox").style.height = "0%";
  document.querySelector(".promptBox").classList.toggle("u__visible");

  //now make the login height 60%
  document.querySelector(".login").style.transition = "all ease 2s .51s";
  document.querySelector(".login").style.height = "60%";

  document
    .querySelectorAll(".inputField")
    .forEach((e) => e.classList.remove("u__hidden"));
  document.querySelector(".loginPart").style.transition = "all ease .2s .1s";

  // document.querySelector(".loginPart").style.display = "flex";
  document.querySelector(".loginPart").classList.add("addflex");
  // document.querySelector(".loginPart").style.transition = "all ease .8s 12s";
  console.log("hello");
  flexcall();
});

function flexcall() {
  document.querySelector(".loginPart").style.display = "flex";
  boxDetail.style.top = "40%";
  // boxDetail.style.transition = "all ease .8s .10s";
}
