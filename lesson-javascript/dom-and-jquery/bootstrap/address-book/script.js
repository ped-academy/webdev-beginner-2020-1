$(document).ready(function () {
  let liSelected = null;

  $("ul#address-book li").click(function () {
    liSelected = $(this);

    const name = liSelected.text();
    const address = liSelected.data("address");
    const phone = liSelected.data("phone");

    liSelected.addClass("active");
    liSelected.siblings().removeClass("active");

    $("#contact-selected").html(`<b>${name}</b><br>Address: ${address}<br>Phone: ${phone}`);

    $('#details-card').show();
  });

  $('#edit').click(function () {
    $("#new-address").val(liSelected.data("address"));
    $("#new-phone").val(liSelected.data("phone"));

    $("#edit-modal").modal('show').on('hide.bs.modal', function () {
      $("#form-error").remove();
      $("input").removeClass('is-valid is-invalid');
    });
  });

  $("#save").click(function (event) {
    event.preventDefault();

    const newAddress = $("#new-address");
    const newPhone = $("#new-phone");

    try {
      checkMinLength(newAddress, 3);
      checkMinLength(newPhone, 9);

      liSelected.data("address", newAddress.val());
      liSelected.data("phone", newPhone.val());

      liSelected.click(); // just to refresh view

      $("#edit-modal").modal('hide');
      $(".toast").toast('show');
    } catch (e) {
      showErrors(e)
    }
  });

  function checkMinLength(element, length) {
    if (element.val().length < length) {
      element.removeClass('is-valid').addClass('is-invalid');
      throw `Minimum length is ${length}`;
    } else {
      element.removeClass('is-invalid').addClass('is-valid');
    }
  }

  function showErrors(message) {
    const alert = $("#form-error");

    if (alert.length === 0) {
      const div = $('<div id="form-error"></div>').addClass('alert alert-danger').html(message);

      $("#edit-modal form").append(div);
    } else {
      alert.html(message);
    }
  }
});
