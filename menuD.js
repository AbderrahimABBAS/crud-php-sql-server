
//Slide-out Mobile Menu
$("#dropdown-content").hide();

$("#mobile-menu #dropbtn").click(function () {

    $("#dropdown-content").show();

});

$("#mobile-menu #dropdown-content").mouseleave(function () {
    $("#dropdown-content").hide();
});



//Mobile Menu Slide Down Content

$(".submenu-content").hide();

$(".submenu-btn").click(function () {
    $(this).siblings().slideToggle();
    $(this).children(".fa-caret-left").switchClass("fa-caret-left", "fa-caret-down", 100, "linear");
    $(this).children(".fa-caret-down").switchClass("fa-caret-down", "fa-caret-left", 100, "linear");

});


//Menu Dropdowns

$("#breadcrumbs .dropdown-content").hide();

$("#breadcrumbs .dropbtn").mouseover(function () {

    $(this).siblings().show();
});

$("#breadcrumbs div.dropdown").mouseleave(function () {

    $("#breadcrumbs .dropdown-content").hide();
});


