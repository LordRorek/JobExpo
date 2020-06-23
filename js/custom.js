var chat = document.getElementById("chat");
var personal = document.getElementById("item-1");
var statement = $( "#settings" ).hasClass('active');

function chatRestore(){
  $(chat).removeClass('delete');
  $(document.getElementById("item-1-settings")).addClass('delete');
  $(document.getElementById("item-2-settings")).addClass('delete');
  $(document.getElementById("item-3-settings")).addClass('delete');
  $(document.getElementById("item-4-settings")).addClass('delete');
};

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
    };
  };
});

function settingsRestore(set){
  $(chat).addClass('delete');
  var target = "#" + $(set).attr('class').split(' ')[0] + "-settings"
  var siblings = $(set).siblings()
  $(target).removeClass('delete');
  $(siblings).each(function() {
    var item = "#" + $(this).attr('class').split(' ')[0] + "-settings"
    $(item).addClass('delete');
  });
};

$(document).ready(function() {
  $('.item-1').click(function() {
    settingsRestore(this);
  });
  $('.item-2').click(function() {
    settingsRestore(this);
  });
  $('.item-3').click(function() {
    settingsRestore(this);
  });
  $('.item-4').click(function() {
    settingsRestore(this);
  });
});

$('#expo').click(function() {
  chatRestore();
});
$('#chats').click(function() {
  chatRestore();
});

function countChar2(val) {
  var len = val.value.length;
  $('#current2').text(len);
};
