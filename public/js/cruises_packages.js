function checkView(){
   var isChecked = document.getElementById("viewCheckbox").checked;
   if(isChecked){
 $.get('/cruises/list',function(data){
    $('#viewDiv').empty().append(data);
    });
 
   } else {
   $.get('/cruises/grid',function(data){
    $('#viewDiv').empty().append(data);
    });

   }
}


function changeView(){

$('#viewCheckbox').on('click',function(){
 var isChecked = document.getElementById("viewCheckbox").checked;
    
   if(isChecked){
 $.get('/cruises/list',function(data){
    $('#viewDiv').empty().append(data);
    });
  
 
   } else {
   $.get('/cruises/grid',function(data){
    $('#viewDiv').empty().append(data);
    });
 

   }
});
}



$(document).ready(function() {
 checkView(); 
});
