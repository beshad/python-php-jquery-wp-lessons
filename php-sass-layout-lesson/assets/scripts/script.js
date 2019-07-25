$(document).ready(function(event) {

  $('#flip').click(function() {
    $('#panel').slideToggle('slow');
    $('i').toggleClass('fa-arrow-down');
    $('i').toggleClass('fa-arrow-up');
  })

  $("#show-me-something").click(function() {
    for(let i=1;i < 9; i++) {
      $(`#box-${i}`).fadeToggle(i*1000);
    }
  });

});
