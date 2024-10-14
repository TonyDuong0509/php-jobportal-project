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
