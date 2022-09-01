var dishName = JSON.parse(sessionStorage.getItem("dishName"));
var dishPrice = JSON.parse(sessionStorage.getItem("dishPrice"));
var price = parseFloat(dishPrice.substring(1));

document.getElementById("dishToOrder").innerText = dishName;
document.getElementsByClassName('addToCartPrice')[0].innerHTML = "$".concat(price);

var checkboxs = document.querySelectorAll('input[type=checkbox]');
for(var i = 0; i < checkboxs.length; ++i){ 
    var checkbox = checkboxs[i];
    checkbox.addEventListener("change",changed);
} 

var notes = "";


var addToCart = document.querySelector('body');
addToCart.addEventListener("click",footerClicked);


function footerClicked(event){
    
    /*
    const isTextSelected = window.getSelection().toString();
    if (!isTextSelected) { 
        window.open('A1.php');
    }
    */
    
    var dish = {
        price:price,
        notes:notes,
        dishName:dishName
    }
    

    var request = $.ajax({
        url:"http://localhost:3000/order.php",
        type:"POST",
        data:dish,
        dataType: "html"
        // success:function(data){
        //     console.log(data);
        // }
    });

    // request.done(function(msg) {
    //     alert ( "Response: " + msg );
    // });



/*
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "test.php?name=t", true);
    ajax.send();
    ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("hh");
    }
*/
};





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
    document.getElementsByClassName('addToCartPrice')[0].innerHTML = "$".concat(price);
    console.log(notes);
    console.log(price);
}