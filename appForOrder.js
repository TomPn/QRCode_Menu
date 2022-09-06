var tableID = localStorage.getItem("enteredTableID");
var dishName = JSON.parse(localStorage.getItem("dishName"));
var dishPrice = JSON.parse(localStorage.getItem("dishPrice"));
var price = parseFloat(dishPrice.substring(1));

$('#tableID').html(tableID);
$('title').html(tableID);
$("#dishToOrderName").html(dishName);
$('#addToCartPrice').html("$"+price); 

var checkboxs = $('input[type=checkbox]');
checkboxs.each(function(){
    $(this).on('click',changed);
})

    

var notes = "加";

$('.addToCart').on("click",addToCartClicked);



function addToCartClicked(){
    const isTextSelected = window.getSelection().toString();
    
    if (localStorage.getItem('itemList') == null) {
        const items =[];
        localStorage.setItem('itemList',JSON.stringify(items));
    }
    var addNotes = "；特殊备注："+$('#additionalNotes').val();
    const item = {"name": dishName, "price": price, "quantity": 1, "notes": notes.slice(0,-2)+addNotes, "totalPrice": price};
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
    console.log(price);
    document.getElementById('addToCartPrice').innerHTML = "$"+price;
    document.cookie="currentPrice=$".concat(JSON.stringify(price));
}