$(document).ready(function () {
  // if (screen.width <= 768) {
  //   $("#menuList").hide();
  // }
  $("#menuBtn").click(function () {
    $("#menuList").slideToggle("slow", function () {
      // Animation complete.
    });
  });
});