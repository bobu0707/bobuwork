$(window).on('load', function () {
  endLoading();
});
setTimeout('endLoading()', 10000);
function endLoading() {
  $('.loader').fadeOut(600, function () {
    $('#loading').fadeOut(600);
  })
}
