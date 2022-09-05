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

var addToCart = document.querySelector('.addToCart');
addToCart.addEventListener("click",addToCartClicked);


function addToCartClicked(){
    const isTextSelected = window.getSelection().toString();
    
    if (localStorage.getItem('itemList') == null) {
        const items =[];
        localStorage.setItem('itemList',JSON.stringify(items));
    }
    const item = {"name": dishName, "price": price, "quantity": 1, "notes": notes, "totalPrice": price};
    // item[0] = {dishName};
    // item[1] = price;
    // item[2] = 1;
    // item[3] = notes;
    // item[4] = item[1] * item[2];
    
    var items = JSON.parse(localStorage.getItem('itemList'));
    items.push(item);
    localStorage.setItem('itemList',JSON.stringify(items));
    console.log(items);
    if (!isTextSelected) { 
        window.location.href='A1.php';
    }
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