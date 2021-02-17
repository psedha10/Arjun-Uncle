//preview of image after upload
function PreviewImage() {
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("image").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("preview").src = oFREvent.target.result;
  };
}


//right navigation pane for checklist
function openNav() {
  document.getElementById("mySidenav").style.width = "365px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}