function storage(storage) {

  $("[form-localstorage] input, [form-localstorage] select, [form-localstorage] textarea").each(function() {
      var name = $(this).attr("name");

      $(this).change(function() {
          storage.setItem(name, $(this).attr("name", name).val());
      });

      if (storage.getItem(name)) {
          $(this).attr("name", name).val(storage.getItem(name));
      }
  });

  $("input[type='reset']").click(function() {
    storage.clear();
    window.location = window.location;
  });

  var cor = storage.getItem('cordasfontes');

  $("#cor").change(function() {
      var name = $(this).attr("name");
      storage.setItem('cordasfontes', $(this).attr("name", name).val());
      // $('form').toggleClass(name);
  });

  if (storage.getItem('cordasfontes')) {
      $('form').attr("class",cor);
  }

}
storage(localStorage); // localSorage ou sessionStorage


