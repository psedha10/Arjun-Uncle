//showing hidden <div>
function showDiv1(select) {
  //for no
  if (select.value == 1) {document.getElementById("hidden_div2").style.display = "block";} 
  else {document.getElementById("hidden_div2").style.display = "none";}

  //for yes
  if (select.value == 2) {document.getElementById("hidden_div1").style.display = "block";} 
  else {document.getElementById("hidden_div1").style.display = "none";}
}

function showDiv2(select) {
  if (select.value == 1) {document.getElementById("hidden_div3").style.display = "block";} 
  else {document.getElementById("hidden_div3").style.display = "none";}

  if (select.value == 2) {document.getElementById("hidden_div4").style.display = "block";} 
  else {document.getElementById("hidden_div4").style.display = "none";}
}
