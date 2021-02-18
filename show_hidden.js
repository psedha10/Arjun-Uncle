//showing hidden <div>
function showDiv1(select) {
  //for no
  if (select.value == 1) {
    document.getElementById("hidden_div2").style.display = "block";
  } else {
    document.getElementById("hidden_div2").style.display = "none";
  }

  //for yes
  if (select.value == 2) {
    document.getElementById("hidden_div1").style.display = "block";
  } else {
    document.getElementById("hidden_div1").style.display = "none";
  }
}

function showDiv2(select) {
  if (select.value == 1) {
    document.getElementById("hidden_div3").style.display = "block";
  } else {
    document.getElementById("hidden_div3").style.display = "none";
  }

  if (select.value == 2) {
    document.getElementById("hidden_div4").style.display = "block";
  } else {
    document.getElementById("hidden_div4").style.display = "none";
  }
}

function showDiv3(select) {
  if (select.value == 1) {
    document.getElementById("hidden_div5").style.display = "block";
  } else {
    document.getElementById("hidden_div5").style.display = "none";
  }

  if (select.value == 3) {
    document.getElementById("hidden_div6").style.display = "block";
  } else {
    document.getElementById("hidden_div6").style.display = "none";
  }

  if (select.value == 2) {
    document.getElementById("hidden_div7").style.display = "block";
  } else {
    document.getElementById("hidden_div7").style.display = "none";
  }
}

function showDiv4(select) {
  if (select.value == 1) {
    document.getElementById("hidden_div8").style.display = "block";
  } else {
    document.getElementById("hidden_div8").style.display = "none";
  }

  if (select.value == 2) {
    document.getElementById("hidden_div9").style.display = "block";
  } else {
    document.getElementById("hidden_div9").style.display = "none";
  }

  if (select.value == 3) {
    document.getElementById("hidden_div10").style.display = "block";
  } else {
    document.getElementById("hidden_div10").style.display = "none";
  }

  if (select.value == 4) {
    document.getElementById("hidden_div11").style.display = "block";
  } else {
    document.getElementById("hidden_div11").style.display = "none";
  }

  if (select.value == 5) {
    document.getElementById("hidden_div12").style.display = "block";
  } else {
    document.getElementById("hidden_div12").style.display = "none";
  }
}
