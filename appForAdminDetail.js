
var orderID = localStorage.getItem("orderID");

var data = JSON.parse(localStorage.getItem("orderData"+orderID));


$('#adminDetailH1').html(data[0].tableID);




data.forEach(idk);

function idk(dishItem){

    var ID = dishItem.ID;

    console.log(dishItem);

    $('<div/>',{
        class:'adminDetailItem',
        id:'adminDetailItem-'+ID
    }).appendTo('#adminDetail');

    $('<div/>',{
        class:'adminDetailItemLeft',
        id:'adminDetailItemLeft-'+ID
    }).appendTo('#adminDetailItem-'+ID);

    $('<p/>',{
        text: dishItem.dishID+" "+dishItem.dishName,
        class: 'adminDetailDishName',
    }).appendTo('#adminDetailItemLeft-'+ID);

    $('<p/>',{
        text: (dishItem.notes === '') ? '备注：无' :'备注：加'+dishItem.notes,
        class: 'adminDetailDishNote',
    }).appendTo('#adminDetailItemLeft-'+ID);

    $('<div/>',{
        class:'adminDetailItemRight',
        id:'adminDetailItemRight-'+ID
    }).appendTo('#adminDetailItem-'+ID);

    $('<p/>',{
        text: "数量： "+dishItem.dishQuant,
        class: 'adminDetailDishQuant',
    }).appendTo('#adminDetailItemRight-'+ID);

    $('<p/>',{
        text: "$"+dishItem.dishTotalPrice,
        class: 'adminDetailDishNote',
    }).appendTo('#adminDetailItemRight-'+ID);
}

$('<div/>',{
    class:"adminOrderBtn",
    id:"adminOrderBtn-"+data[0].ID
}).appendTo('#adminDetail');

$("<p/>",{
    text:"$"+data[0].orderPrice,
    class:'adminOrderBtnPrice',
    id:"adminOrderBtnPrice-"+ID
}).appendTo('#adminOrderBtn-'+ID);

$("<p/>",{
    text:(Number(data[0].orderStatus) == 0)? '未下单':'已下单',
    class:'adminOrderBtnSubmitOrder',
    id:"adminOrderBtnSubmitOrder-"+ID,
    style:(Number(data[0].orderStatus) == 0)? "background-color:rgb(255, 254, 196);":"background-color:#daeb9e;"
}).appendTo('#adminOrderBtn-'+ID);



$("#adminOrderBtn-"+ID).on('click',function(){
    if($("#adminOrderBtnSubmitOrder-"+ID).html()=='未下单'){
        $("#adminOrderBtnSubmitOrder-"+ID).html('已下单');
        $("#adminOrderBtnSubmitOrder-"+ID).css('background-color','#daeb9e');
        data.forEach(dishItem => dishItem.orderStatus=1);
    } else{
        $("#adminOrderBtnSubmitOrder-"+ID).html('未下单');
        $("#adminOrderBtnSubmitOrder-"+ID).css('background-color','rgb(255, 254, 196)');
        data.forEach(dishItem => dishItem.orderStatus=0);
    }
    localStorage.setItem('orderData'+ID,JSON.stringify(data));
    $.redirect('adminPage.php', {status: data[0].orderStatus,orderID:orderID});
    
})


