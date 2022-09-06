
//var tableList = ["A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8", "A9", "A10", "A11", "A12", 
                // "C1", "C2", "C3", "C4", "C5", "C6", "C7", "C8", "C9", "C10", "C11", "C12"];


orders.forEach(createOrder);

function createOrder(orderID){
  if(document.referrer.includes("adminPageDetail")){
    activeItem = JSON.parse(localStorage.getItem("orderData"+orderID));
  } else{
    activeItem = data.filter(item => item.orderID.indexOf(orderID) > -1);
  }
  if(activeItem != null){
    if(activeItem.length > 0){
      
      console.log(activeItem);
      
      localStorage.setItem('orderData'+orderID,JSON.stringify(activeItem));

      var tableID = activeItem[0].tableID;
      var orderPrice = activeItem[0].orderPrice;
      var orderStatus = activeItem[0].orderStatus;
      

      $('<div/>',{
        class: 'activeItem',
        id:'activeItem-'+orderID,
        style:(Number(activeItem[0].orderStatus) == 0)? "background-color:rgb(255, 254, 196);":"background-color:#daeb9e;"
      }).appendTo('#admin');

      $('#activeItem-'+orderID).on('click',function(){
        localStorage.setItem("orderID",orderID);
        window.location.href = 'adminPageDetail.php';
      })
      
      $('<div/>',{
        class: 'adminText',
        id:'adminText-'+orderID
      }).appendTo('#activeItem-'+orderID);

      
      $('<p/>',{
          text: '桌号',
          class: 'tableID',
          id:'tableID-'+orderID
      }).appendTo('#adminText-'+orderID);


      $('<span/>',{
        text:tableID,
        style:"font-weight:bold;font-size:large;"
      }).appendTo('#tableID-'+orderID);


      var beforeTax = parseFloat(orderPrice).toFixed(2);
      var tax = Number(parseFloat(orderPrice)*0.13).toFixed(2);
      var afterTax = Number(parseFloat(orderPrice)*1.13).toFixed(2);
      $('<p/>',{
          text: "$"+beforeTax+' + $'+tax+' = ',
          class: 'orderPrice',
          id:'orderPrice-'+orderID
      }).appendTo('#adminText-'+orderID);

      $('<span/>',{
        text:'$'+afterTax,
        style:"font-weight:bold;font-size:large;"
      }).appendTo('#orderPrice-'+orderID);

      $('<div/>',{
        class: 'adminStatus',
        id:'adminStatus-'+orderID,
        style:(Number(activeItem[0].orderStatus) == 0)? "background-color:rgb(255, 254, 196);":"background-color:#daeb9e;"
      }).appendTo('#activeItem-'+orderID);


      $('<div/>',{
        text:(Number(orderStatus) == 0)? '未下单':'已下单',
        class: 'orderStatus',
        id:'orderStatus-'+orderID
      }).appendTo('#adminStatus-'+orderID);

      if(Number(orderStatus) == 1){
        $('<div/>',{
          text:'未付款',
          class:'updatePaidStatus',
          id:'updatePaidStatus-'+orderID
        }).appendTo('#adminStatus-'+orderID);

        $('#activeItem-'+orderID).unbind();

        $('#updatePaidStatus-'+orderID).on('click',function(){
          $(this).parent().parent().remove();
          localStorage.clear();
          $.redirect('adminPage.php', {status: 2,orderID:orderID});
          
        });
      }
      
    }
  }
}


