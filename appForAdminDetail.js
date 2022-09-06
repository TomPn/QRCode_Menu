
var orderID = localStorage.getItem("orderID");

var data = JSON.parse(localStorage.getItem("orderData"+orderID));


$('#adminDetailH1').html(data[0].tableID);




data.forEach(idk);

function idk(dishItem){

    var ID = dishItem.ID;

    console.log(dishItem);

    $('<div/>',{
        class:'adminDetailItem',
        id:'adminDetailItem-'+orderID
    }).appendTo('#adminDetail');

    $('<div/>',{
        class:'adminDetailItemLeft',
        id:'adminDetailItemLeft-'+orderID
    }).appendTo('#adminDetailItem-'+orderID);

    $('<p/>',{
        text: dishItem.dishID+" "+dishItem.dishName,
        class: 'adminDetailDishName',
    }).appendTo('#adminDetailItemLeft-'+orderID);

    $('<p/>',{
        text: (dishItem.notes === '') ? '备注：无' :'备注：加'+dishItem.notes,
        class: 'adminDetailDishNote',
    }).appendTo('#adminDetailItemLeft-'+orderID);

    $('<div/>',{
        class:'adminDetailItemRight',
        id:'adminDetailItemRight-'+orderID
    }).appendTo('#adminDetailItem-'+orderID);

    $('<p/>',{
        text: "数量： "+dishItem.dishQuant,
        class: 'adminDetailDishQuant',
    }).appendTo('#adminDetailItemRight-'+orderID);

    $('<p/>',{
        text: "$"+dishItem.dishTotalPrice,
        class: 'adminDetailDishNote',
    }).appendTo('#adminDetailItemRight-'+orderID);
}

$('<div/>',{
    class:"adminOrderBtn",
    id:"adminOrderBtn-"+data[0].orderID
}).appendTo('#adminDetail');

$("<p/>",{
    text:"$"+data[0].orderPrice,
    class:'adminOrderBtnPrice',
    id:"adminOrderBtnPrice-"+orderID
}).appendTo('#adminOrderBtn-'+orderID);

$("<p/>",{
    text:(Number(data[0].orderStatus) == 0)? '未下单':'已下单',
    class:'adminOrderBtnSubmitOrder',
    id:"adminOrderBtnSubmitOrder-"+orderID,
    style:(Number(data[0].orderStatus) == 0)? "background-color:rgb(255, 254, 196);":"background-color:#daeb9e;"
}).appendTo('#adminOrderBtn-'+orderID);



$("#adminOrderBtn-"+orderID).on('click',function(){
    if($("#adminOrderBtnSubmitOrder-"+orderID).html()=='未下单'){
        $("#adminOrderBtnSubmitOrder-"+orderID).html('已下单');
        $("#adminOrderBtnSubmitOrder-"+orderID).css('background-color','#daeb9e');
        data.forEach(dishItem => dishItem.orderStatus=1);
    } else{
        $("#adminOrderBtnSubmitOrder-"+orderID).html('未下单');
        $("#adminOrderBtnSubmitOrder-"+orderID).css('background-color','rgb(255, 254, 196)');
        data.forEach(dishItem => dishItem.orderStatus=0);
    }
    localStorage.setItem('orderData'+orderID,JSON.stringify(data));
    $.redirect('adminPage.php', {status: data[0].orderStatus,orderID:orderID});
    
})


