$(document).ready(function(){
  for(i = 0; i < 10; i++) {
    $.ajax({
      url: "https://randomuser.me/api",
      type: "GET",
      success: function(data) {
        addUser(data);
      },
    });
  }
});

function addUser( data ) {
  var user = data.results[0];
  var gender = "";
  
  if(user.gender == "female")
    gender = "Feminino";
  else  
    gender = "Masculino";
  
  $('#table-user tbody').append(
    "<tr>" +
      "<td>" +
        "<img src='" + user.picture.thumbnail + "' alt='image'>" +
      "</td>" +
      "<td>" + user.name.title + " " + user.name.first + " " + user.name.last + "</td>" +
      "<td>" + gender + "</td>" +
      "<td>" + user.dob.age + "</td>" +
      "<td>" + user.nat + "</td>" +
      "<td>" + user.email + "</td>" +
      "<td>" + user.login.username + "</td>" +
      "<td>" + user.phone + "</td>" +
      "<td>" + user.cell + "</td>" +
      "<td>" + user.location.country + "</td>" +
      "<td>" + user.location.state + "</td>" +
      "<td>" + user.location.city + "</td>" +
      "<td>" + user.location.street.name + ", nº " + user.location.street.number + "</td>" +
      "<td>" + user.location.postcode + "</td>" +
      "<td>" + user.location.timezone.offset + "</td>" +
      "<td>" + user.location.timezone.description + "</td>" +
    "</tr>"
  );
}