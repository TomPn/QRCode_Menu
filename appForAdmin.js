

var tableList = ["A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8", "A9", "A10", "A11", "A12", 
                 "C1", "C2", "C3", "C4", "C5", "C6", "C7", "C8", "C9", "C10", "C11", "C12"];


tableList.forEach(idk);
var test=0;

function idk(tableID){
  if(document.referrer.includes("adminPageDetail")){
    activeItem = JSON.parse(sessionStorage.getItem("tableData"+tableID));
  } else{
    activeItem = data.filter(item => item.tableID.indexOf(tableID) > -1);
  }
  if(activeItem != null){
    if(activeItem.length > 0){

      
      sessionStorage.setItem('tableData'+tableID,JSON.stringify(activeItem));

      var tableID = activeItem[0].tableID;
      var orderPrice = activeItem[0].orderPrice;
      var orderStatus = activeItem[0].orderStatus;
      

      $('<div/>',{
        class: 'activeItem',
        id:'activeItem-'+tableID,
        style:(Number(activeItem[0].orderStatus) == 0)? "background-color:rgb(255, 254, 196);":"background-color:#daeb9e;"
      }).appendTo('#admin');

      $('#activeItem-'+tableID).on('click',function(){
        sessionStorage.setItem("tableID",tableID);
        window.location.href = 'adminPageDetail.php';
      })
      
      $('<div/>',{
        class: 'adminText',
        id:'adminText-'+tableID
      }).appendTo('#activeItem-'+tableID);

      
      $('<p/>',{
          text: '桌号',
          class: 'tableID',
          id:'tableID-'+tableID
      }).appendTo('#adminText-'+tableID);


      $('<span/>',{
        text:tableID,
        style:"font-weight:bold;font-size:large;"
      }).appendTo('#tableID-'+tableID);


      var beforeTax = parseFloat(orderPrice).toFixed(2);
      var tax = Number(parseFloat(orderPrice)*0.13).toFixed(2);
      var afterTax = Number(parseFloat(orderPrice)*1.13).toFixed(2);
      $('<p/>',{
          text: "$"+beforeTax+' + $'+tax+' = ',
          class: 'orderPrice',
          id:'orderPrice-'+tableID
      }).appendTo('#adminText-'+tableID);

      $('<span/>',{
        text:'$'+afterTax,
        style:"font-weight:bold;font-size:large;"
      }).appendTo('#orderPrice-'+tableID);

      $('<div/>',{
        class: 'adminStatus',
        id:'adminStatus-'+tableID,
        style:(Number(activeItem[0].orderStatus) == 0)? "background-color:rgb(255, 254, 196);":"background-color:#daeb9e;"
      }).appendTo('#activeItem-'+tableID);


      $('<div/>',{
        text:(Number(orderStatus) == 0)? '未下单':'已下单',
        class: 'orderStatus',
        id:'orderStatus-'+tableID
      }).appendTo('#adminStatus-'+tableID);

      if(Number(orderStatus) == 1){
        $('<div/>',{
          text:'已付款',
          class:'updatePaidStatus',
          id:'updatePaidStatus-'+tableID
        }).appendTo('#adminStatus-'+tableID);

        $('#activeItem-'+tableID).unbind();

        $('#updatePaidStatus-'+tableID).on('click',function(){
          $(this).parent().parent().remove();
          $.redirect('adminPage.php', {status: 2,tableID:tableID});
          
        });
      }
      
    }
  }
}


