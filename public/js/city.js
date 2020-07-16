
$(document).ready(function(){

    alert('asdad')  ;
    
        $('#country').on('change',function(){
              var country=$("#country option:selected").val();
     
        $.get('/cityByCountry/'+country,function(data){
           $('#citybox').empty().append(data);
       
            });
        });

});