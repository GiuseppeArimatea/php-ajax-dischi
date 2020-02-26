const $ = require('jquery');
const Handlebars = require("handlebars");


$(document).ready(function() {
  $.ajax(
  {
  url: "",
  method: "GET",
  data: {
        
      },
  success: function (data) {
    console.log(data);
  }
    },
  error: function (richiesta, stato, errori) {
    alert("E' avvenuto un errore. " + errori);
    }
  }
);
});
