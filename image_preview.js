//preview of image after upload
function PreviewImage1() {
  var oFReader1 = new FileReader();
  oFReader1.readAsDataURL(document.getElementById("image1").files[0]);
  oFReader1.onload = function (oFREvent) {document.getElementById("preview1").src = oFREvent.target.result;};
}

function PreviewImage2() {
  var oFReader2 = new FileReader();
  oFReader2.readAsDataURL(document.getElementById("image2").files[0]);
  oFReader2.onload = function (oFREvent) {document.getElementById("preview2").src = oFREvent.target.result;};
}

function PreviewImage3() {
  var oFReader3 = new FileReader();
  oFReader3.readAsDataURL(document.getElementById("image3").files[0]);
  oFReader3.onload = function (oFREvent) {document.getElementById("preview3").src = oFREvent.target.result;};
}