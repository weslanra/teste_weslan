$(document).ready(function(){
  $('#form_file input[type=submit]').click(function(e) {
    e.preventDefault();
    var formData = new FormData($("#form_file")[0]);

    $.ajax({
      url: "../readyFile/",
      data: formData,
      type: "POST",
      cache: false,
      contentType: false,
      processData: false,
      success: function(data) {
        $('#content-text').html(data);
      },
    });
  });
});