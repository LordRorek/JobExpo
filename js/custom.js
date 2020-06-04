var chat = document.getElementById("chat");
var personal = document.getElementById("item-1");
var statement = $( "#settings" ).hasClass('active');

$(document).ready(function(){
  $( "#settings" ).click(function() {
    setTimeout(check, 0.0000001)
  });
  function check(){
    if (!statement) {
      $(chat).addClass('delete');
      $(personal).addClass('active');
      $(document.getElementById("item-1-settings")).removeClass('delete');
      $(document.getElementById("item-2-settings")).addClass('delete');
      $(document.getElementById("item-3-settings")).addClass('delete');
      $(document.getElementById("item-4-settings")).addClass('delete');
      console.log("HELLO!");
    };
  };
});
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
    $(target).removeClass('delete');
    $(siblings).each(function() {
      var item = "#" + $(this).attr('class').split(' ')[0] + "-settings"
      $(item).addClass('delete');
    });
  });
  $('.item-3').click(function() {
    var target = "#" + $(this).attr('class').split(' ')[0] + "-settings"
    var siblings = $(this).siblings()
    $(target).removeClass('delete');
    $(siblings).each(function() {
      var item = "#" + $(this).attr('class').split(' ')[0] + "-settings"
      $(item).addClass('delete');
    });
  });
  $('.item-4').click(function() {
    var target = "#" + $(this).attr('class').split(' ')[0] + "-settings"
    var siblings = $(this).siblings()
    $(target).removeClass('delete');
    $(siblings).each(function() {
      var item = "#" + $(this).attr('class').split(' ')[0] + "-settings"
      $(item).addClass('delete');
    });
  });
});

function countChar1(val) {
  var len = val.value.length;
  $('#current1').text(len);
};
function countChar2(val) {
  var len = val.value.length;
  $('#current2').text(len);
};
