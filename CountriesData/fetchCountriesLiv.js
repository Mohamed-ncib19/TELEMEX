//detch cities_(ville de livraison) depend on country_liv(pays de livraison) choice
var countryLiv = document.querySelector('#pays5');
var villeLiv = document.querySelector('#ville5');
var latitudeLiv = document.querySelector('#latitude1');
var longitudeLiv = document.querySelector('#longitude1');

function initializeLiv(){

  
  if(countryLiv.value === "Cameroun"){
    countryLivCode ='cm';
  }else if(countryLiv.value === "Senegal"){
    countryLivCode = 'sn';
  }else if(countryLiv.value === "Côte dIvoire"){
    countryLivCode = 'ci';
  }else if(countryLiv.value === "Togo"){
    countryLivCode = 'tg';
  }else if(countryLiv.value === "Congo(R)"){
    countryLivCode = 'cg';
  }else if(countryLiv.value === "Gabon"){
    countryLivCode = 'ga';
  }else if(countryLiv.value === "Tchad"){
    countryLivCode = 'td';
  }else if (countryLiv.value === "République centrafricaine"){
    countryLivCode = 'cf'
  }else if(countryLiv.value === "Guinée équatoriale"){
    countryLivCode = 'gq';
  }


    const JSONCitiesLiv = `./CountriesData/${countryLivCode}.json`;
     fetch(JSONCitiesLiv)
      .then((response) => {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error("Error fetching JSON data");
        }
      })
      .then((data) => {
        removeAll(villeLiv);
       data.forEach(city => {
            const option = document.createElement('option');
            option.setAttribute('id','ville_liv');
            option.setAttribute('data-lat',city['lat'])
            option.setAttribute('data-lng',city['lng'])
            option.value = city.city;
            option.textContent = city.city
            villeLiv.appendChild(option);
            
          });
          latitudeLiv.value = data[0]['lat']
          longitudeLiv.value = data[0]['lng']

        
      })
      .catch((error) => console.error(error));
    
    
}
//remove existed options from "villes"
function removeAll(selectBox) {
  while (selectBox.options.length > 0) {
    selectBox.remove(0);
  }
}

function handleSelectionChange() {
  const selectedOption = villeLiv.options[villeLiv.selectedIndex];
  console.log(selectedOption.value);
  latitudeLiv.value= selectedOption.getAttribute('data-lat')
  longitudeLiv.value= selectedOption.getAttribute('data-lng')
}

villeLiv.addEventListener('change', handleSelectionChange);
