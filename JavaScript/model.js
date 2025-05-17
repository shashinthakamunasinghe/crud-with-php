var updateStudentModal = document.getElementById("updateStudentModal");
updateStudentModal.addEventListener("show.bs.modal", function (event) {
  var button = event.relatedTarget;

  // Get data from button
  var id = button.getAttribute("data-id");
  var firstname = button.getAttribute("data-firstname");
  var lastname = button.getAttribute("data-lastname");
  var address = button.getAttribute("data-address");
  var city = button.getAttribute("data-city");
  var phoneno = button.getAttribute("data-phoneno");
  var email = button.getAttribute("data-email");
  var password = button.getAttribute("data-password");

  // Set data in modal form
  document.getElementById("editId").value = id;
  document.getElementById("firstname").value = firstname;
  document.getElementById("lastname").value = lastname;
  document.getElementById("address").value = address;
  document.getElementById("city").value = city;
  document.getElementById("phone").value = phoneno;
  document.getElementById("email").value = email;
  document.getElementById("password").value = password;
});
