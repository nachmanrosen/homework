/*global $*/
(function () {
    "use strict";

var x=0;
var userID=localStorage.getItem("userid");
var myblogs=[];
var postID;
var flag=1;
var flag2=1;
var flag3=1;
$.getJSON('https://jsonplaceholder.typicode.com/posts?callback=?',
            {
                 q: userID,
                type: 'json'
            },
            function (data) {
                data.forEach(function (post){
                    myblogs.push(post);
                   
                   /* $('<h1>'+post.title+'</h1><br><p>'+post.body+'</p>'
                    )
                    .appendTo(posts) */
                
                });
                display();
            });

function display(){
                    postID=myblogs[x].id;
                    $('<h1>'+myblogs[x].title+'</h1><br><p>'+myblogs[x].body+'</p><button id="comments1">SHOW COMMENTS</button> ')
                    .appendTo(post1)
                    $('#comments1').click(function(){
                    if(flag==1){
                        
                        $("#comments1").html('HIDE COMMENTS');
                        flag++;
                        $.getJSON('https://jsonplaceholder.typicode.com/comments?callback=?',
                            {
                            q:postID ,
                            type: 'json'
                             },
                         function (data) {
                         data.forEach(function (comment){
                            $('<p>'+comment.name+'</p><br><p>'+comment.email+'</p><br><p>'+comment.body+'</p>')
                            .appendTo(commentBox1)
                         });
                             });
                    }
                    else{
                        $("#commentBox1").empty();
                        flag--;
                        $("#comments1").html('SHOW COMMENTS');
                    }
                    });
                    x++;

                    
                    $('<h1>'+myblogs[x].title+'</h1><br><p>'+myblogs[x].body+'</p><button id="comments2">SHOW COMMENTS</button>' )
                    .appendTo(post2)
                    $('#comments2').click(function(){
                    if(flag2==1){
                            flag2++;
                        $("#comments2").html('HIDE COMMENTS');
                         $.getJSON('https://jsonplaceholder.typicode.com/comments?callback=?',
                            {
                            q:myblogs[x].id,
                            type: 'json'
                             },
                         function (data) {
                         data.forEach(function (comment){
                            $('<p>'+comment.name+'</p><br><p>'+comment.email+'</p><br><p>'+comment.body+'</p>')
                            .appendTo(commentBox2)
                         });
                             });
                    }
                    else{
                            $("#commentBox2").empty();
                            flag2--;
                             $("#comments2").html('SHOW COMMENTS');
                        } 
                    });
                    x++;

                    
                    $('<h1>'+myblogs[x].title+'</h1><br><p>'+myblogs[x].body+'</p><button id="comments3">SHOW COMMENTS</button>' )
                    .appendTo(post3)
                     $('#comments3').click(function(){
                    if(flag3==1){
                             flag3++;
                         $("#comments3").html('HIDE COMMENTS');
                         $.getJSON('https://jsonplaceholder.typicode.com/comments?callback=?',
                            {
                            q:myblogs[x].id, 
                            type: 'json'
                             },
                         function (data) {
                         data.forEach(function (comment){
                            $('<p>'+comment.name+'</p><br><p>'+comment.email+'</p><br><p>'+comment.body+'</p>')
                            .appendTo(commentBox3)
                         });
                             });
                    } 
                    else{
                             $("#commentBox3").empty();
                            flag3--;
                             $("#comments3").html('SHOW COMMENTS');
                         }
                     });
                    
                   
}



$('#previous').click(function(){
  x-=3;
  $('div').empty();
  display();
 });

 $('#next').click(function(){
  x+=3;
$('div').empty();
  display();
 }); 
 }());