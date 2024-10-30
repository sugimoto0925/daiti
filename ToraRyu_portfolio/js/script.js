$(function(){
  $('.btn-trigger').on('click', function() {
    const navSp = $('#nav-sp');
    $(this).toggleClass('active');

    if ($(navSp).hasClass('active')) {
      // これは閉じる時の処理
      $(navSp).removeClass('active');
      $(navSp).css('display', 'none');
      return false;
    } else {
      // これが開く時の処理
      $(navSp).addClass('active');
      $(navSp).css('display', 'block');
      return false;
    }
  });
});
