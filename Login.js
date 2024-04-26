const form = document.querySelector('#form');
const email = document.querySelector('#email');
const password = document.querySelector('#password');

form.addEventListener('submit',(e)=>{
    
    if(!validate()){
        e.preventDefault();
    }
})

function validate() {
    const emailVal = email.value.trim();
    const passwordVal = password.value.trim();
    const validEmail = "food@email.com";
    const validPassword = "123";

    if (emailVal === validEmail && passwordVal === validPassword) {
        window.location.href = "shops.html";
    } else {
        alert("Invalid email or password. Please try again.");
    }
}
