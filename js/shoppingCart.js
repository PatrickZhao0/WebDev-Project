let quantities = document.querySelectorAll(".product_quantity");
let unitPrices = document.querySelectorAll(".unitPrice");
let subtotals = document.querySelectorAll(".subtotal");
let total = document.querySelector("#total");
let inputs = document.forms[0].elements;
let tel = inputs[3];
let email = inputs[2];
let zip = inputs[7];


document.forms[0].addEventListener("submit", function(e){
    if (validate() == true) e.preventDefault();
    console.log(validate());
});

for(let quantity of quantities){
    quantity.addEventListener("change", calcTotal);
}



function calcTotal(){
    console.log("calcTotal();");
    let tempTotal = 0;
    for(let item = 0; item < quantities.length; item ++){
        subtotals[item].value = quantities[item].value * unitPrices[item].value;
        tempTotal += parseInt(subtotals[item].value);
        console.log(tempTotal.value);
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
            return true;
        }
    }
    if (email.value.indexOf(".") == -1 || email.value.indexOf("@") == -1){
        alert("Your email address is missing '@' or '.'");
        return true;
    }
    if (tel.value.length != 9){
        alert("Phone number should be 9 digits");
        return true;
    }
    if (zip.value.length != 5){
        alert("Zip code should be 5 digit");
        return true;
    }
    return false;
}