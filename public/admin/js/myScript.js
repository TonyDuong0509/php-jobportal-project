function showAlert(type, message) {
  var alertHtml = `
      <div class="alert alert-${type} alert-dismissible fade show" role="alert">
          ${message}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  `;
  $("#alert-container").html(alertHtml);

  setTimeout(function () {
    $(".alert").alert("close");
  }, 3000);
}

$(document).on("click", "#confirm", function (e) {
  e.preventDefault();
  var link = $(this).attr("href");

  Swal.fire({
    title: "Are you sure?",
    text: "Confirm This Data?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, Confirm it!",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = link;
      Swal.fire("Confirm!", "Your file has been Confirm.", "success");
    }
  });
});
