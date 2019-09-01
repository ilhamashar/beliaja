$(document).ready(function () {
  $('.slider-one').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1
  });

  $('.input-number-increment').click(function() {
    var $input = $(this).parents('.input-number-group').find('.input-number');
    var val = parseInt($input.val(), 10);
    $input.val(val + 1);
  });

  $('.input-number-decrement').click(function() {
    var $input = $(this).parents('.input-number-group').find('.input-number');
    var val = parseInt($input.val(), 10);
    $input.val(val - 1);
  });

  // swiper slider

  var swiper = new Swiper('.single-item-swipe',{
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next-1',
      prevEl: '.swiper-button-prev-1',
    },
    pagination: {
      el: '.swiper-pagination',
    }
  });

  var Swiper6 = new Swiper('.six-items-swipe',{
    slidesPerView: 6,
    slidesPerGroup: 3,
    spaceBetween: 20,
    navigation: {
      nextEl: '.swiper-button-next-6',
      prevEl: '.swiper-button-prev-6',
    }
  });

  var Swiper4 = new Swiper('.four-items-swipe',{
    slidesPerView: 4,
    slidesPerGroup: 1,
    spaceBetween: 15,
    navigation: {
      nextEl: '.swiper-button-next-4',
      prevEl: '.swiper-button-prev-4',
    }
  });

  // tooltip 
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  // timer
  var expiredDate = document.getElementById("expired_date").innerHTML;
  var countDownDate = new Date(expiredDate).getTime();
  // console.log(countDownDate);
  var x = setInterval(function(){
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("hour").innerHTML = hours;
    document.getElementById("minute").innerHTML = minutes;
    document.getElementById("second").innerHTML = seconds;

   console.log(distance);

    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "<b> Waktu Melakukan Pembayaran Telah HABIS <b>";
    }
  });
})