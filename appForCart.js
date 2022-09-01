function minusQuantity(tableNum, name, quantity, toppings) {

};

$('#cart').on('click', '.orderDishMinus', function(event) {
    var tableNum = document.getElementById('tableNum');
    var quantity = document.querySelectorAll('.orderDishQuantity')[0];
    var name = document.querySelectorAll('.orderDishName')[0];
    var toppings = document.querySelectorAll('.orderDishToppings')[0];
    minusQuantity(tableNum, name, quantity, toppings);
    deleteDish(tableNum, name, quantity, toppings);
})

$('#cart').on('click', '.orderDishPlus', function(event) {
    var tableNum = document.getElementById('tableNum');
    var quantity = document.querySelectorAll('.orderDishQuantity')[0];
    var name = document.querySelectorAll('.orderDishName')[0];
    var toppings = document.querySelectorAll('.orderDishToppings')[0];
    plusQuantity(tableNum, name, quantity, toppings);
})