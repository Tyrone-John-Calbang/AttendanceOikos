const csrf = document.querySelector("meta[name = 'csrf-token']")
let emailInput = document.querySelector("#EI");
let verificationInput = document.querySelector("#PI");

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
    let verificationButton = document.getElementById('verificationButton');
    let hiddenElements = document.querySelectorAll('.hidden');

    verificationButton.hidden = true;
    hiddenElements.forEach(hiddenElement=>{
        hiddenElement.hidden = false;
    });

    }

function submitCode() {
    const verificationCode = verificationInput.value;
    fetch("/submit-code", {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-Token': csrf.content },
        body: JSON.stringify({ 'verificationCode': verificationCode })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href='/reset';
        } else {
            console.log('Code does not exist in the database');
        }
    })
    .catch(error => {
        console.log('Error checking code', error);
    });
}
