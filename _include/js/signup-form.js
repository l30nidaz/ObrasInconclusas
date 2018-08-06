$().ready(function(){
    $("#complaint-form").validate({
        rules:{
            email:{
                required:true,
                email:true
            },
            name:{
                required:true
            },
            distrito: { valueNotEquals: "default" },
            title:{
                required:true
            }
        },
        messages:{
            email:"Ingrese un email válido ",
            name:"Ingrese su nombre completo",
            distrito: { valueNotEquals: "Selecciona un distrito" },
            title:"Agrega un título a la queja que presenta"

        },       
        
        submitHandler:function(){
            var form = $('form')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);
            
            $.ajax({
                url: "_include/php/controller/upload.php",
                data: formData,
                // THIS MUST BE DONE FOR FILE UPLOADING
                contentType: false,
                processData: false,
                method:"POST",
                success: function (data) { 
                    var locationToGo = "#home-slider";
                    var resetForm=true;
                    var obj = JSON.parse(data);
                    if(!obj['isOk']){
                       locationToGo = "#complaint"; 
                       resetForm = false;
                       
                    }
                    $( "#dialog-message" ).html(obj.message).dialog({
                        modal: true,
                        buttons: {
                          Entendido: function() {
                            $( this ).dialog( "close" );
                            location.hash=locationToGo;
                          }
                        }
                    });
                    if(resetForm){
                        form.reset();//borra los campos del formulario    
                    }
                    
                }
            });
            return false;
        }
    });
    
$.validator.addMethod("valueNotEquals", function(value, element, arg){
return arg !== value;
}, "Valores no deben ser iguales.");


   
});
