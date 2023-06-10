$("button").click(() => {
  if ($(".picture").hasClass("show")) {
    $("button").html("Show");
    $(".picture").removeClass("show");
  } else {
    $("button").html("Hide");
    $(".picture").addClass("show");
  }
});
