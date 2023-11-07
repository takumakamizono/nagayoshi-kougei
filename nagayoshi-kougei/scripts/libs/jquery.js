jQuery(function () {
  var appear = false;
  var pagetop = $("#page_top");
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      if (appear == false) {
        appear = true;
        pagetop.stop().animate(
          {
            bottom: "0px",
          },
          300
        );
      }
    } else {
      if (appear) {
        appear = false;
        pagetop.stop().animate(
          {
            bottom: "-50px",
          },
          300
        );
      }
    }
  });
  pagetop.click(function () {
    $("body, html").animate({ scrollTop: 0 }, 500);
    return false;
  });
});

$(function () {
  $(".works__list").slick({
    arrows: true,
    autoplay: true,
    adaptiveHeight: true,
    centerMode: true,
    centerPadding: "20%",
    slidesToShow: 2,
    dots: true,
    responsive: [
      {
        breakpoint: 960,
        settings: {
          slidesToShow: 1, // ブレイクポイント960px以下での表示数
          centerPadding: "10%",
        },
      },
    ],
  });
});

$(document).ready(function () {
  $(".archive-list__dropdown").change(function () {
    var selectedOption = $(this).find("option:selected");
    var archiveLink = selectedOption.val();
    if (archiveLink) {
      window.location.href = archiveLink;
    }
  });
});

function redirectToArchive() {
  var select = document.querySelector(".archive-list__dropdown");
  var archiveLink = select.options[select.selectedIndex].value;

  // ページリダイレクト
  if (archiveLink) {
    window.location.href = archiveLink;
  }
}
