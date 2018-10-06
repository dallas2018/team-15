
//date picker
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

//form dropdown
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

//Custom ID for forms
  var input = document.getElementById("myInput");
  input.addEventListener("keyup", function(event) {
      event.preventDefault();
      if (event.keyCode === 13) {
          document.getElementById("myBtn").click();
      }
  });

  document.getElementById('myInput').onkeydown = function(event) {
      if (event.keyCode == 13) {
          alert('5');
      }
  }
