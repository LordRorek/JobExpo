
var chat = document.getElementById("chat");

$(document).ready(function() {
  $('.item-1').click(function() {
    var target = "#" + $(this).attr('class').split(' ')[0] + "-settings"
    var siblings = $(this).siblings()
    $(target).removeClass('delete');
    $(siblings).each(function() {
      var item = "#" + $(this).attr('class').split(' ')[0] + "-settings"
      $(item).addClass('delete');
    });
  });
  $('.item-2').click(function() {
    $(chat).addClass('delete');
    var target = "#" + $(this).attr('class').split(' ')[0] + "-settings"
    var siblings = $(this).siblings()
    $(chat).addClass('delete');
    $(target).removeClass('delete');
    $(siblings).each(function() {
      var item = "#" + $(this).attr('class').split(' ')[0] + "-settings"
      $(item).addClass('delete');
    });
  });
  $('.item-3').click(function() {
    var target = "#" + $(this).attr('class').split(' ')[0] + "-settings"
    var siblings = $(this).siblings()
    $(chat).addClass('delete');
    $(target).removeClass('delete');
    $(siblings).each(function() {
      var item = "#" + $(this).attr('class').split(' ')[0] + "-settings"
      $(item).addClass('delete');
    });
  });
  $('.item-4').click(function() {
    var target = "#" + $(this).attr('class').split(' ')[0] + "-settings"
    var siblings = $(this).siblings()
    $(chat).addClass('delete');
    $(target).removeClass('delete');
    $(siblings).each(function() {
      var item = "#" + $(this).attr('class').split(' ')[0] + "-settings"
      $(item).addClass('delete');
    });
  });
});
