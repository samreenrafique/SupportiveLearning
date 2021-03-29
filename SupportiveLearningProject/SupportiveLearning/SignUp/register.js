
$(function(){
 var $register = $("#registration");
 if($register.length){
     $register.validate({
         rules:{
            first_name:{
                required:true,
                minlength:3,
                maxlength:20,
                lettersonly:true
            },
            last_name:{
                required:true,
                minlength:3,
                maxlength:20
            },
            dob:{
                required:true
            },
            email:{
                required:true,
                email:true,
                minlength:3,
                maxlength:50
            },
            pswd:{
                required:true,
                minlength:3,
                maxlength:20
            },
            dropdown:{
                required:true
            }
         },
         messages:{
            first_name:{
                required: "First Name is mandatory!",
                lettersonly: "Only Alphabet are Allowed"
            }, 
            last_name:{
                required: 'Last Name is mandatory!',
                lettersonly: 'Only Alphabet are Allowed',
            },
            dob:{
                required: 'This Field is Required!'
            },
            email:{
                required: 'This Field is Required!',
                email: 'Enter Valid Email'
            }, 
            pswd:{
                required: 'This Field is Required!'
            }, 
            dropdown:{
                required: 'This Field is Required!'
            }
              
         }
     })
 }
})