let form = document.form[0];
let password = form.elements[2];
let confirm = form.elements[3];

form.addEventListener("submit", function(e){
    e.prvernDefault();
    validate();
});

function validate(){
    if (password != confirm) {
        alert("The two passwords are not match, please check again");
    }
};