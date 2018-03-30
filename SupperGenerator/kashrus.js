import $ from 'jquery';


  (function() {
     var ta=document.getElementById('ta');
     var newtext;
     var hot=document.getElementById('h');
    var notHot=document.getElementById('nh');
     var mby=document.getElementById('mby');
     var mnby=document.getElementById('mnby');
     var sixty=document.getElementById('s');
     var notSixty=document.getElementById('ns');
     var warm=document.getElementById('w');

$('#submit').click(function(){
      ta.value="";
//empties textarea
 if(sixty.checked){
   if(notHot.checked||(warm.checked&&(nmby.checked||knby.checked))){
         newtext="If one is not sure that the knife was clean, the meat should be rinsed off and scrubbed to remove any residue that was on the dairy knife. Preferably a small section surrounding the area where the knife cut the meat should be removed from the meat.";
     }
     else if(warm.checked&&mby.checked){
        newtext="Even if the knife was clean, a thin section (k'dei klipah) surrounding the area where the knife cut the meat should be removed from the meat and the knife should be stuck in the ground 10 times";
     }
     else{
     newtext="A thin section (k'dei klipah) surrounding the area where the knife cut the meat should be removed from the meat, because the taste of the knife is concentrated in the area where the knife cut. The rest of the meat is permitted because of bitul b'shishim. The knife needs to be kashered with boiling hot water (the taste of meat in the knife isn't batel).";
 }
}
 else if(notSixty.checked) {
    
     if(notHot.checked||(warm.checked&&(nmby.checked||knby.checked))){
         newtext="If one is not sure that the knife was clean, the meat should be rinsed off and scrubbed to remove any residue that was on the dairy knife. Preferably a small section surrounding the area where the knife cut the meat should be removed from the meat. ";
    
    } else if(hot.checked&&mby.checked){
         newtext="All of the meat is prohibited, because the pressure of the knife spreads the dairy taste throughout the meat. The knife must be kashered with boiling hot water before using.";
     }
     else if(warm.checked&&mby.checked){
         newtext="Even if the knife was clean, a thin section (k'dei klipah) surrounding the area where the knife cut the meat should be removed from the meat and the knife must be stuck in the ground 10 times. Although the meat wasn't yad soledes, the pressure of the knife spreads the dairy taste into a thin section of the meat.";
     }
     
     else if(hot.checked&&(nmby.checked||knby.checked)){
       newtext="A thin section (k'dei klipah) surrounding the area where the knife cut the meat should be removed from the meat because there may have been a small amount of dairy residue stuck to the knife. The rest of the meat is permitted. The minhag is that the knife should be kashered with boiling hot water before using. ";
     }

     }
     //appends newtext to textarea
      ta.value += newtext;
     event.preventDefault();
     });

$('#clear').click(function(){
  ta.value="";
 });
 $('#previous').click(function(){
  location('kashrus2.html');
 });
  }());