const $ = require("jquery");
const Handlebars = require("handlebars");


$(document).ready(function() {
  $.ajax(
  {
    url: "http://localhost/php-ajax-dischi/server.php",
    method: "GET",
    success: function (array) {
      console.log(array);
      stampaRisultato(array);
    },
    error: function (richiesta, stato, errori) {
      alert("E' avvenuto un errore. " + errori);
    }
  },
  );
});

function stampaRisultato(array) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < array.length; i++) {
    var context = {
      poster: array[i].poster,
      title: array[i].title,
      author: array[i].author,
      year: array[i].year
    };
    var html = template(context);
    $(".boxs").append(html);
  }
}
