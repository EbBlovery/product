$(function(){
   $('#submit').click(function(){
   	   var username = $('#username').val();
   	   var password = $('#password').val();
   	   if(!username || !password){
           console.log('qinshurumimahuo zhanghao');
   	   }else{
   	   	   $.post('http://localhost/php-demo/login.php',{"username":username,"password":password},
              function(data){
              	 var data = JSON.parse(data);
                 if(data.code == 0) {
                    sessionStorage.setItem('token',data.token);
                    location.href="index.html";
                 }else{
                 	location.reload();
                 }
              }
   	   	   	)
   	   }
   })
})