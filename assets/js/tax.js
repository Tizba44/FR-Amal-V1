// truc select taxonomy ==============================================================================


$(document).ready(function () {
    $('select').selectize({
        sortField: 'text'
      });
      document.getElementById("submit-button").addEventListener("click", function() {
          document.getElementById("form-id").submit();
        });
        
    });
    