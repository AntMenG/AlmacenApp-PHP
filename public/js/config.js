$( function () {
  $(document).keyup( function (e) {
      if (e.keyCode == 27) {
        $('.contConfig').css('display','none');
        $('.activConf').removeClass('active');
        $('.activConf[data-c="CF"]').addClass('active');
        $('body').removeClass('blur' + Cback);
        $('body').addClass('back' + Cback);
        $('body').css('overflow','auto');
        $('#Container').removeClass('ContainerBlur');
        $('#Configuration').css('display','none');
        $('#PI').css(
          'box-shadow',
          '0px 0px 50px 10px rgba( 1, 1, 1, 0.7)'
        );
        $('#Finder').css({
          'display' : 'none',
          'opacity' : 0
        });
      }
  });

  $('#Bconfig').on('click', function () {
    $('#CF').css('display','block');
    back = $('body').attr('class');
    if (back.length == 5) {
      Cback = back[4];
    } else {
      Cback = back[4];
      Cback += back[5];
    }
    $('body').removeClass('back' + Cback);
    $('body').addClass('blur' + Cback);
    $('body').css('overflow','hidden');
    $('#Container').addClass('ContainerBlur');
    $('#Configuration').css('display','block');
    $('#PI').css(
      'box-shadow',
      '0px 0px 50px 10px rgba( 1, 1, 1, 0)'
    );
  });

  $('#CF button').click( function () {
    if ($(this).attr('class').length == 5) {
      Nback = $(this).attr('class')[4];
    } else {
      Nback = $(this).attr('class')[4];
      Nback += $(this).attr('class')[5];
    }
    if(Nback != Cback){
      $.post( "config/config.php", {
        background: Nback
      }, function( data ) {
        if(data == 'Realizado'){
          $('.blur' + Cback).addClass('blur' + Nback);
          $('.blur' + Cback).removeClass('blur' + Cback);
          Cback = Nback;
        }
      });
    }
  });

  $('#Configuration .activConf').click( function () {
    $('.contConfig').css('display','none');
    $('.activConf').removeClass('active');
    $(this).addClass('active');
    $('#' + $(this).attr('data-c')).css('display','block');
  });

});
