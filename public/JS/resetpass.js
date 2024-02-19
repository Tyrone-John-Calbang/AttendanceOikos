const csrf = document.querySelector("meta[name = 'csrf-token']")
let password = document.querySelector("#EI");
let confirm_password = document.querySelector("#PI");
function submitForm(){
    fetch("/submitcode", {
        method:'POST', 
        headers:{'Content-Type':'application/json', 'X-CSRF-Token': csrf.content},
        body: JSON.stringify({'email': email.value, 'code': password.value})
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
        window.location.href = "/reset"
    })
    .catch(error => {
        console.log('ErrorSubmittingCode', error)
    })
}

function handlePassword(){
    let pass_error=document.getElementById('password-err');
    let conf_error=document.getElementById('confirm-err');
    if(confirm_password.value.length===0){
        conf_error.textContent="Password is required!";
    }
    if(password.value.length===0){
        pass_error.textContent="Confirm password is required!";
    }
    else{
        pass_error.textContent="";
        conf_error.textContent="";
        console.log("Loggged in!");
    }
}

password.addEventListener('change',()=>{
    let pass_error=document.getElementById('password-err');
    if(password.value.length<8){
        pass_error.textContent="Password must exceed at least 8 characters!";
    }
    if(password.value.length===0){
        console.log('something');
        pass_error.textContent="";
    }
});
confirm_password.addEventListener('change',()=>{
    let conf_error=document.getElementById('confirm-err');
    if(password.value!=confirm_password.value ){
        conf_error.textContent="Confirm password and password does not match!";
    }
    else{
        conf_error.textContent="";
    }
});
