<!doctype html>
<html lang="en">
  <head>
    <title>PHP Google Autocomplete Address Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h5 class="card-title text-white">PHP Google Autocomplete Address</h5>
                    </div>
 
                    <div class="card-body">
                        <div class="form-group">
                            <label for="autocomplete"> Country </label>
                            <input onchange="initialize()" type="text" name="country" id="country" class="form-control" placeholder="Select Location">
                        </div>
                        <div class="form-group">
                            <label for="autocomplete"> Location/City/Address </label>
                            <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Select Location">
                        </div>
 
                        <div class="form-group" id="lat_area">
                            <label for="latitude"> Latitude </label>
                            <input type="text" name="latitude" id="latitude" class="form-control">
                        </div>
 
                        <div class="form-group" id="long_area">
                            <label for="latitude"> Longitude </label>
                            <input type="text" name="longitude" id="longitude" class="form-control">
                        </div>
                    </div>
 
                </div>
            </div>
        </div>
    </div>
 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBzlVZve6W0EpZiZdIx5FZbz9fcZ0Lje0g&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
    <script>  $(document).ready(function() {
        $("#lat_area").addClass("d-none");
        $("#long_area").addClass("d-none");
   });
   var country = document.getElementById('country');

   country.addEventListener('change', (event) => {
  console.log(event,country.value)
  google.maps.event.addDomListener(window, 'load', initialize);

});


   function initialize() {
       var input = document.getElementById('autocomplete');
       var country = document.getElementById('country');

       const options = {
 
    componentRestrictions: { country: country.value },
    
  };
       var autocomplete = new google.maps.places.Autocomplete(input,options);
       autocomplete.addListener('place_changed', function() {
           var place = autocomplete.getPlace();

           console.log(place)

           $('#latitude').val(place.geometry['location'].lat());
           $('#longitude').val(place.geometry['location'].lng());

        // --------- show lat and long ---------------
           $("#lat_area").removeClass("d-none");
           $("#long_area").removeClass("d-none");
       });
   }</script>
  </body>
</html>