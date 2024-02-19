const csrf = document.querySelector("meta[name = 'csrf-token']")
let emailInput = document.querySelector("#EI");
let verificationCode = document.querySelector("#PI");

function checkEmail() {
    const email = emailInput.value;
    fetch("/check-email", {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-Token': csrf.content },
        body: JSON.stringify({ 'email': email })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showCode();
        } else {
            console.log('Email does not exist in the database');
        }
    })
    .catch(error => {
        console.log('Error checking email', error);
    });
}

function showCode(){
    let email = document.getElementById('EI');
    let sbutton = document.querySelector('sbutton');
    let showLabel = document.querySelector('label');
    let showInput = document.querySelector('input-group-special');

    sbutton.onclick=()=>{
        showLabel.classList.remove('hidden');
        showInput.classList.remove('hidden');
    }

}