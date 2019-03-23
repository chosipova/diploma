$(document).ready(function () {
  $('.navbar-menu__item').each(function () {
    var location = window.location.href;
    var link = this.href;
    if (location == link) {
      $(this).addClass('current');
    }
  });
});