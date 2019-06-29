$(document).ready(function(){
$("#create-customer").submit(function(event){
  event.preventDefault();
  var form = $(this);
  var data = form.serialize();
  $.ajax({
  url:'../php/create.php',
  method: 'POST',
  data: data,
  success:function(result){
   $('#result').css("display","block").delay(3000).html(result);
   document.getElementById("create-customer").reset();
  }});
});
$("#edit-customer").submit(function(event){
  event.preventDefault();
  var form = $(this);
  var data = form.serialize();
  var customerId = $('#edit-customer').attr("data-cid");
  $.ajax({
  url:'../php/edit.php?id='+customerId,
  method: 'POST',
  data: data,
  success:function(result){
   $('#result').css("display","block").delay(3000).html(result);
   document.getElementById("edit-customer").reset();
  }});
});

});

function editCustomer(id){
  window.location = 'http://localhost/~mac/mawdoo3/pages/edit.php?id='+id;
}
function loadData(){
   var customerId = $('#edit-customer').attr("data-cid");
   $.ajax({
   url:'../php/getData.php?id='+customerId,
   success:function(result){
     var resultArray = result.split(" ");
     $("#nameInput").val(resultArray[0]);
     $("#name2Input").val(resultArray[1]);
     $("#phoneInput").val(parseInt(resultArray[2]));
     $("#emailInput").val(resultArray[3]);

   }});
}
function deleteCustomer(id){
  $.ajax({
  url:'http://127.0.0.1:8000/api/destroy/'+id,
  success:function(result){
   alert(result);
  }});
}
