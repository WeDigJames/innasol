jQuery(document).ready(function () {
    
    jQuery(".user-edit").click(function (e) {
        e.preventDefault();
        var userid = jQuery(this).attr('id');
        jQuery('#userid').html(userid);
    });

    jQuery(".backToTop").click(function (e) {
        e.preventDefault();
        jQuery("html, body").animate({
            scrollTop: 0
        }, 1000);
    });

    jQuery(".super > button").click(function (e) {
        e.preventDefault();
        jQuery(".super > ul").toggle();
    });

    jQuery('.super > button').toggle(function () {
        jQuery(this).html('Disable Editing');
    }, function () {
        jQuery(this).html('Enable Editing');
    });

});

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");

var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}