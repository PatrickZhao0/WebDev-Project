let quantities = document.querySelectorAll(".product_qauntity");
let unitPrices = document.querySelectorAll(".unitPrice");
let subtotals = document.querySelectorAll(".subtotal");
let total = document.querySelector(".total");
let inputs = document.forms[0].elements;
let tel = inputs[3];
let email = inputs[2];
let zip = inputs[7];

console.log(document.forms[0]);

document.forms[0].addEventListener("submit", function(e){
    e.preventDefault();
    validate();
});

for(let quantity of quantities){
    console.log(quantity);
    quantity.addEventListener("change", calcTotal);
}



function calcTotal(){
    let tempTotal = 0;
    for(let item = 0; item < quantities.length; item ++){
        subtotals[item].value = quantities[item].value * unitPrices[item].value;
        tempTotal += subtotals[item].value;
    }
    total.value = tempTotal;
}

function validate(){
    let empty = false;
    for(let input of inputs){
        if (input.value == "" || input.value == null){
            input.focus();
            input.style.backgroundColor = "#CBCBCB";
            alert("Fields are Empty");
            return;
        }
    }
    if (email.value.indexOf(".") == -1 || email.value.indexOf("@") == -1){
        alert("Your email address is missing '@' or '.'");
        return;
    }
    if (tel.value.length != 9){
        alert("Phone number should be 9 digits");
        return;
    }
    if (zip.value.length != 5){
        alert("Zip code should be 5 digit");
        return;
    }
}