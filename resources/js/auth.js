//Authentication Form
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('login-container');

//SinUp Button Trigger
signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

//SingIn Button Trigger
signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});