var dishName = JSON.parse(sessionStorage.getItem("dishName"));
var dishPrice = JSON.parse(sessionStorage.getItem("dishPrice"));
var price = parseFloat(dishPrice.substring(1));

document.getElementById("dishToOrderName").innerText = dishName;
document.getElementById('addToCartPrice').innerHTML = "$".concat(price);

var checkboxs = document.querySelectorAll('input[type=checkbox]');
for(var i = 0; i < checkboxs.length; ++i){ 
    var checkbox = checkboxs[i];
    checkbox.addEventListener("change",changed);
} 

var notes = "";


var addToCart = document.querySelector('footer');
addToCart.addEventListener("click",footerClicked);


function footerClicked(event){
    const isTextSelected = window.getSelection().toString();
    if (!isTextSelected) { 
        window.open('A1.php');
    }
    sessionStorage.setItem('toppings',JSON.stringify(notes));
    sessionStorage.setItem('dishPrice',JSON.stringify(price));
}


function changed(){ 
    var toppingName = this.parentElement.parentElement.parentElement.getElementsByClassName("toppingName")[0].innerHTML;
    var toppingPrice = this.parentElement.parentElement.parentElement.getElementsByClassName("toppingPrice")[0].innerHTML;
    toppingPrice = parseFloat(toppingPrice.substring(1));
    if(this.checked){ 
        notes = notes.concat(toppingName);
        notes = notes.concat(", ");
        price = price + toppingPrice;

    } else{ 
        notes = notes.replace(toppingName.concat(", "),"");
        price = price - toppingPrice;
    } 
    price = Number((price).toFixed(2));
    document.getElementById('addToCartPrice').innerHTML = "$".concat(price);
    console.log(notes);
    console.log(price);
    document.cookie="currentPrice=$".concat(JSON.stringify(price));
}