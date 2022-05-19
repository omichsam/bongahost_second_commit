// external js: isotope.pkgd.js

// init Isotope elements
var $box = $(".isotope-box").isotope({
  itemSelector: ".isotope-item"
});
// filter functions
// bind filter button click
$(".isotope-toolbar").on("click", "button", function () {
  var filterValue = $(this).attr("data-type");
  $(".isotope-toolbar").find(".active").removeClass("active");
  $(this).addClass("active");
  if (filterValue !== "*") {
    filterValue = '[data-type="' + filterValue + '"]';
  }
  console.log(filterValue);
  $box.isotope({ filter: filterValue });
});

// change is-checked class on buttons