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

function PreviewImage4() {
  var oFReader4 = new FileReader();
  oFReader4.readAsDataURL(document.getElementById("image4").files[0]);
  oFReader4.onload = function (oFREvent) {document.getElementById("preview4").src = oFREvent.target.result;};
}

function PreviewImage5() {
  var oFReader5 = new FileReader();
  oFReader5.readAsDataURL(document.getElementById("image5").files[0]);
  oFReader5.onload = function (oFREvent) {document.getElementById("preview5").src = oFREvent.target.result;};
}

function PreviewImage6() {
  var oFReader6 = new FileReader();
  oFReader6.readAsDataURL(document.getElementById("image6").files[0]);
  oFReader6.onload = function (oFREvent) {document.getElementById("preview6").src = oFREvent.target.result;};
}

function PreviewImage7() {
  var oFReader7 = new FileReader();
  oFReader7.readAsDataURL(document.getElementById("image7").files[0]);
  oFReader7.onload = function (oFREvent) {document.getElementById("preview7").src = oFREvent.target.result;};
}

function PreviewImage8() {
  var oFReader8 = new FileReader();
  oFReader8.readAsDataURL(document.getElementById("image8").files[0]);
  oFReader8.onload = function (oFREvent) {document.getElementById("preview8").src = oFREvent.target.result;};
}

function PreviewImage9() {
  var oFReader9 = new FileReader();
  oFReader9.readAsDataURL(document.getElementById("image9").files[0]);
  oFReader9.onload = function (oFREvent) {document.getElementById("preview9").src = oFREvent.target.result;};
}

function PreviewImage10() {
  var oFReader10 = new FileReader();
  oFReader10.readAsDataURL(document.getElementById("image10").files[0]);
  oFReader10.onload = function (oFREvent) {document.getElementById("preview10").src = oFREvent.target.result;};
}