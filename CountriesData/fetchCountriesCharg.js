//detch cities_(ville de chargement) depend on country_liv(pays chargement) choice
var country = document.querySelector('#pays4');
var villeCharge = document.querySelector('#ville4');
var latitude = document.querySelector('#latitude');
var longitude = document.querySelector('#longitude');

function initialize(){

  
  if(country.value === "Cameroun"){
    countryCode ='cm';
  }else if(country.value === "Senegal"){
    countryCode = 'sn';
  }else if(country.value === "Côte dIvoire"){
    countryCode = 'ci';
  }else if(country.value === "Togo"){
    countryCode = 'tg';
  }else if(country.value === "Congo(R)"){
    countryCode = 'cg';
  }else if(country.value === "Gabon"){
    countryCode = 'ga';
  }else if(country.value === "Tchad"){
    countryCode = 'td';
  }else if (country.value === "République centrafricaine"){
    countryCode = 'cf'
  }else if(country.value === "Guinée équatoriale"){
    countryCode = 'gq';
  }


    const JSONCities = `./CountriesData/${countryCode}.json`;
     fetch(JSONCities)
      .then((response) => {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error("Error fetching JSON data");
        }
      })
      .then((data) => {
        removeAll(villeCharge);
       data.forEach(city => {
            const option = document.createElement('option');
            option.setAttribute('id','ville_ch');
            option.setAttribute('data-lat',city['lat'])
            option.setAttribute('data-lng',city['lng'])
            option.value = city.city;
            option.textContent = city.city
            villeCharge.appendChild(option);
       });
       latitude.value = data[0]['lat']
       longitude.value = data[0]['lng']
     
        
      })
      .catch((error) => console.error(error));
    
    
}
//remove existed options_charg from "villes"
function removeAll(selectBox){
  while (selectBox.options.length > 0) {
    selectBox.remove(0);
  }
}

function handleSelectionChange(){
  const selectedOption = villeCharge.options[villeCharge.selectedIndex];
  console.log(selectedOption.value);
  latitude.value= selectedOption.getAttribute('data-lat')
  longitude.value= selectedOption.getAttribute('data-lng')


}

villeCharge.addEventListener('input', handleSelectionChange);





