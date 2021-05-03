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
