
var tableID = sessionStorage.getItem("tableID");
$('#adminDetailH1').html(tableID);

var data = JSON.parse(sessionStorage.getItem("tableData"+tableID));


data.forEach(idk);

function idk(dishItem){

    var dishID = dishItem.dishID;

    $('<div/>',{
        class:'adminDetailItem',
        id:'adminDetailItem-'+dishID
    }).appendTo('#adminDetail');

    $('<div/>',{
        class:'adminDetailItemLeft',
        id:'adminDetailItemLeft-'+dishID
    }).appendTo('#adminDetailItem-'+dishID);

    $('<p/>',{
        text: dishID+" "+dishItem.dishName,
        class: 'adminDetailDishName',
    }).appendTo('#adminDetailItemLeft-'+dishID);

    $('<p/>',{
        text: (dishItem.notes === '') ? '备注：无' :'备注：加'+dishItem.notes,
        class: 'adminDetailDishNote',
    }).appendTo('#adminDetailItemLeft-'+dishID);

    $('<div/>',{
        class:'adminDetailItemRight',
        id:'adminDetailItemRight-'+dishID
    }).appendTo('#adminDetailItem-'+dishID);

    $('<p/>',{
        text: "数量： "+dishItem.dishQuant,
        class: 'adminDetailDishQuant',
    }).appendTo('#adminDetailItemRight-'+dishID);

    $('<p/>',{
        text: "$"+dishItem.dishTotalPrice,
        class: 'adminDetailDishNote',
    }).appendTo('#adminDetailItemRight-'+dishID);
}

$('<div/>',{
    class:"adminOrderBtn",
    id:"adminOrderBtn-"+tableID
}).appendTo('#adminDetail');

$("<p/>",{
    text:"$"+data[0].orderPrice,
    class:'adminOrderBtnPrice',
    id:"adminOrderBtnPrice-"+tableID
}).appendTo('#adminOrderBtn-'+tableID);

$("<p/>",{
    text:(Number(data[0].orderStatus) == 0)? '未下单':'已下单',
    class:'adminOrderBtnSubmitOrder',
    id:"adminOrderBtnSubmitOrder-"+tableID,
    style:(Number(data[0].orderStatus) == 0)? "background-color:rgb(255, 254, 196);":"background-color:#daeb9e;"
}).appendTo('#adminOrderBtn-'+tableID);



$("#adminOrderBtn-"+tableID).on('click',function(){
    if($("#adminOrderBtnSubmitOrder-"+tableID).html()=='未下单'){
        $("#adminOrderBtnSubmitOrder-"+tableID).html('已下单');
        $("#adminOrderBtnSubmitOrder-"+tableID).css('background-color','#daeb9e');
        data.forEach(dishItem => dishItem.orderStatus=1);
    } else{
        $("#adminOrderBtnSubmitOrder-"+tableID).html('未下单');
        $("#adminOrderBtnSubmitOrder-"+tableID).css('background-color','rgb(255, 254, 196)');
        data.forEach(dishItem => dishItem.orderStatus=0);
    }
    sessionStorage.setItem('tableData'+tableID,JSON.stringify(data));
    $.redirect('adminPage.php', {status: data[0].orderStatus,tableID:tableID});
    
})


