let form = document.forms[0];
let password = form.elements[2];
let confirmPass = form.elements[3];

form.addEventListener("submit", function(e){
    if(!validate()) e.preventDefault();
});

function validate(){
    if (password.value != confirmPass.value) {
        alert("The two passwords are not match, please check again");
        return false;
    }
    if (password.value.length < 6){
        alert("Password: minimum 6 character required.")
        return false;
    }
    return true;
};