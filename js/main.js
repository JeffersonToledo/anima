/* Login --------------------------------------------------------------------------- */

$(document).ready(function () {
  $(".fontLogin").click(function () {
    $(".popLogin").toggleClass("display");
  });
});

/* Suítes Reservas ----------------------------------------------------------------- */

$(".btnPalace").click(function () {
  $(".slide").addClass("display");
  $(".form-palace").removeClass("display");
});

$(".btnPalaceVoltar").click(function () {
  $(".slide").removeClass("display");
  $(".form-palace").addClass("display");
});

$(".btnDream").click(function () {
  $(".slide").addClass("display");
  $(".form-dream").removeClass("display");
});

$(".btnDreamVoltar").click(function () {
  $(".slide").removeClass("display");
  $(".form-dream").addClass("display");
});

$(".btnSound").click(function () {
  $(".slide").addClass("display");
  $(".form-sound").removeClass("display");
});

$(".btnSoundVoltar").click(function () {
  $(".slide").removeClass("display");
  $(".form-sound").addClass("display");
});

/* Modo App ------------------------------------------------------------------------------------------------------------ */

$(".btnPalace2").click(function () {
  $(".modoApp").addClass("display");
  $(".form-palaceApp").removeClass("display");
});

$(".btnPalaceVoltar2").click(function () {
  $(".modoApp").removeClass("display");
  $(".form-palaceApp").addClass("display");
});

$(".btnDream2").click(function () {
  $(".modoApp").addClass("display");
  $(".form-dreamApp").removeClass("display");
});

$(".btnDreamVoltar2").click(function () {
  $(".modoApp").removeClass("display");
  $(".form-dreamApp").addClass("display");
});

$(".btnSound2").click(function () {
  $(".modoApp").addClass("display");
  $(".form-soundApp").removeClass("display");
});

$(".btnSoundVoltar2").click(function () {
  $(".modoApp").removeClass("display");
  $(".form-soundApp").addClass("display");
});

/* Fim do modo App ---------------------------------------------------------------------------------------------------------- */

$(document).ready(function () {
  $(".resultado").hide();

  $("#myForm").ajaxForm({
    target: ".resultado",
    success: function (retorno) {
      // $('.resultado').html(retorno);
      $(".resultado").show();
      $("#myForm").resetForm();
    },
  });
});

/* Modal Imagens -------------------------------------------------------------------------------------------*/

var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");

var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var img2 = document.getElementById("myImg2");
var modalImg2 = document.getElementById("img02");
var captionText = document.getElementById("caption");
var captionText2 = document.getElementById("caption2");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

$('.flex #myImg2').each(function(index, element) {
  // console.log(index + ' : ' + element.innerHTML);
  this.onclick = function(){
    modal2.style.display = "block";
    modalImg2.src = this.src;
    captionText2.innerHTML = this.alt;
  }
});

var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close2")[0];

span.onclick = function() { 
  modal.style.display = "none";
}
span2.onclick = function() { 
  modal2.style.display = "none";
}