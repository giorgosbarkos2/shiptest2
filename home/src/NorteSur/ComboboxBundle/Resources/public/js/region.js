

$(document).ready(function() {
    $("#Region").change(function() {
        $("#Region option:selected").each(function() {
            elegido = $(this).val();
            
            console.log(elegido);
            
            $.post($("#formRegiones").attr("action"), {elegido: elegido}, function(data) {
                
                $("#comuna").html(data);
            });
        });
    })
    
    
    
    
       
    
    
   
    
    
    
    
    
    
})
