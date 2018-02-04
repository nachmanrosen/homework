 /*global $*/
(function () {
    "use strict";
 
 $.getJSON('https://jsonplaceholder.typicode.com/users?callback=?',
            {
                type: 'json'
            },
            function (data) {
                data.forEach(function (user){
                   
                   $('<ul><li>'+user.name +'</li><li>'+user.website +'</li>'+'<li>'+user.company.name +'</li>'+'<li>'+user.company.catchPhrase +
                   '</li><li>'+user.company.bs +'</li><button id="'+user.id+'">SELECT</button></ul><br>')
                  
                    .appendTo(list) 
                     $('#'+user.id).click(function(){
                      localStorage.setItem("userid", user.id);
                      location='blogs.html';
                     });
                   
                   
                });
            });

            }());


 

