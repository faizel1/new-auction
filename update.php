<?php include "header.php";?>


<button id="mybtn">open Modal</button>

<div id="myModal" class="modal">
<div class="modal-content">
<span class="close">&times;</span>
<p>sosdhfsdhgfjdsfkjhjkdsf</p>
</div>
</div>



<script>

var modal=document.getElementById("myModal");
var btn=document.getElementById("mybtn");
var span=document.getElementByClassname("close")[0];

btn.onclick=function(){
modal.style.dispaly="block"


}
span.onclick=function(){
modal.style.dispaly="none"


}
window.onclick=function(event){
modal.style.dispaly="none"


}




</script>