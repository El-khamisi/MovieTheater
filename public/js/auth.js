/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/auth.js ***!
  \******************************/
//Authentication Form
var signUpButton = document.getElementById('signUp');
var signInButton = document.getElementById('signIn');
var container = document.getElementById('login-container'); //SinUp Button Trigger

signUpButton.addEventListener('click', function () {
  container.classList.add("right-panel-active");
}); //SingIn Button Trigger

signInButton.addEventListener('click', function () {
  container.classList.remove("right-panel-active");
});
/******/ })()
;