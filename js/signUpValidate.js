let form = document.forms[0];
let password = form.elements[2];
let confirmPass = form.elements[3];

form.addEventListener("submit", function(e){
    console.log("Hello World");
    console.log(password);
    console.log(confirmPass);
    e.preventDefault();
    validate();
});

function validate(){
    if (password.value != confirmPass.value) {
        alert("The two passwords are not match, please check again");
    }
    if (password.value.length < 6){
        alert("Password: minimum 6 character required.")
    }
};