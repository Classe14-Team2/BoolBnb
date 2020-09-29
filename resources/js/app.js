require('./bootstrap');

var $ = require('jquery');

$(document).ready(function() {
  $('#address-new').focusout(function() {
  var citta = $('#address-new').val();
    $.ajax({
      url: 'https://places-dsn.algolia.net/1/places/query?query=' + citta,
      method: 'GET',
      success: function(data) {
        var coord = data.hits[0]._geoloc;
        var lat = coord.lat;
        var lng = coord.lng;
        // console.log(lat);
        // console.log(lng);
        $('#lat').val(lat);
        $('#lon').val(lng);
      },
      error: function() {
        
      }
    });
  });
});
