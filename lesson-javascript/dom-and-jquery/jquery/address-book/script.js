$(document).ready(function () {
  $("ul#address-book li").click(function () {
    const name = $(this).text();
    const address = $(this).data("address");
    const phone = $(this).data("phone");

    $(this).data("active", true);
    $(this).siblings().data("active", false);

    $(this).addClass("selected");
    $(this).siblings().removeClass("selected");

    $("#contact-selected").html(`${name}.<br>Address: ${address}.<br>Phone: ${phone}`);
  });

  $("#set-address").click(function () {
    const liSelected = $("ul#address-book li.selected");
    liSelected.data("address", $("#new-address").val());

    liSelected.click(); // just to refresh view
  });
});
