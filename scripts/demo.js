/*jslint  browser: true, white: true, plusplus: true */
/*global $, countries */

$(function () {
    'use strict';

    var countriesArray = $.map(countries, function (value, key) { return { value: value, data: key }; });

    // Setup jQuery ajax mock:
    $.mockjax({
        url: '*',
        responseTime: 2000,
        response: function (settings) {
            var query = settings.data.query,
                queryLowerCase = query.toLowerCase(),
                re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
                suggestions = $.grep(countriesArray, function (country) {
                     // return country.value.toLowerCase().indexOf(queryLowerCase) === 0;
                    return re.test(country.value);
                }),
                response = {
                    query: query,
                    suggestions: suggestions
                };

            this.responseText = JSON.stringify(response);
        }
    });

    // Initialize ajax autocomplete:
    $('#autocomplete-ajax').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: countriesArray,
        lookupFilter: function(suggestion, originalQuery, queryLowerCase) {
            var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');
            return re.test(suggestion.value);
        },
        onSelect: function(suggestion) {
            $('#selction-ajax').html('You selected: ' + suggestion.value + ', ' + suggestion.data);
        },
        onHint: function (hint) {
            $('#autocomplete-ajax-x').val(hint);
        },
        onInvalidateSelection: function() {
            $('#selction-ajax').html('You selected: none');
        }
    });

    var nhlTeams = ['Douala','Yaoundé','Bamenda','Maroua','Nkongsamba','Bafoussam','Garoua','Ngaoundéré','Bertoua','Loum','Kumba','Edéa','Kumbo','Foumban','Mbouda','Dschang','Limbé','Ebolowa','Kousséri','Guider','Meiganga','Yagoua','Mbalmayo','Bafang','Tiko','Bafia','Wum','Kribi','Buea','Sangmélima','Foumbot','Bangangté','Batouri','Banyo','Nkambé','Bali','Mbanga','Mokolo','Melong','Manjo','Garoua-Boulaï','Mora','Kaélé','Tibati','Ndop','Akonolinga','Eséka','Mamfé','Obala','Muyuka','Nanga-Eboko','Abong-Mbang','Fundong','Nkoteng','Fontem','Mbandjock','Touboro','Ngaoundal','Yokadouma','Pitoa','Tombel','Kékem','Magba','Bélabo','Tonga','Maga','Koutaba','Blangoua','Guidiguis','Bogo','Batibo','Figuil','Makénéné','Gazawa','Tcholliré','Moloundou','Brazzaville','Pointe-Noire','Dolisie','Nkayi','Loandjili','Ouesso','Madingou','Owando','Gamboma','Impfondo','Sibiti','Mossendjo','Kinkala','Makoua','Ngabé','Ewo','Boko','Pokola','Louvakou','Sembé','Oyo','Mossendjo','Loango','Mindouli','Madingou','Djambala','Mouyondzi','Etoumbi','NDjaména','Moundou','Abeche','Sarh','Faya-Largeau','Koumra','Kelo','Mongo','Pala','Am Timan','Ati','Bongor','Doba','Mao','Oum Hadjer','Moussoro','Bitkine','Biltine','Massaguet','Dourbali','Laï','Léré','Kyabé','Massakory','Bokoro','Bousso','Benoye','Bébédjia','Adré','Ngama','Béré','Fianga','Bol','Bol','Moïssala','Guelendeng','Goundi','Gounou Gaya','Baïbokoum','Aozou','Melfi','Massenya','Bangui','Bimbo','Berbérati','Carnot','Bambari','Bouar','Bria','Bossangoa','Nola','Bangassou','Boda','Sibut','Kaga-Bandoro','Mbaiki','Bozoum','Batangafo','Paoua','Ippy','Bocaranga','Kabo','Alindao','Yaloké','Baoro','Gamboula','Ndélé','Dékoa','Bouca','Grimari','Bossembélé','Kembé','Zémio','Mobaye','Kouango','Baboua','Damara','Birao','Obo','Libreville','Port-Gentil','Franceville','Oyem','Moanda','Mouila','Lambaréné','Tchibanga','Koulamoutou','Makokou','Bitam','Tsogni','Gamba','Mounana','Ntoum','Nkan','Lastourville','Okondja','Ndendé','Booué','Fougamou','Ndjolé','Mbigou','Mayumba','Mitzic','Mékambo','Lékoni','Mimongo','Minvoul','Medouneu','Omboué','Cocobeach','Kango','Bata','Malabo','Ebebiyín','Aconibe','Añisoc','Luba','Evinayong','Mongomo','Mengomeyén','Mikomeseng','Rebola','Bidjabidjan','Niefang','Cogo','Nsok','San Antonio de Palé','Mbini','Nsork','Ayene','Nkimi','Machinda','Acurenam','Corisco','Baney','Bicurga','Nsang','Kenzou','Kye-Ossi'];
    var nbaTeams = [''];
    var nhl = $.map(nhlTeams, function (team) { return { value: team, data: { category: '' }}; });
    var nba = $.map(nbaTeams, function (team) { return { value: team, data: { category: '' } }; });
    var teams = nhl.concat(nba);

    // Initialize autocomplete with local lookup:
    $('#autocomplete').devbridgeAutocomplete({
        lookup: teams,
        minChars: 1,
        onSelect: function (suggestion) {
            $('#selection').html('You selected: ' + suggestion.value + ', ' + suggestion.data.category);
        },
        showNoSuggestionNotice: true,
        noSuggestionNotice: 'Sorry, no matching results',
        groupBy: 'category'
    });
    
    // Initialize autocomplete with custom appendTo:
    $('#autocomplete-custom-append').autocomplete({
        lookup: countriesArray,
        appendTo: '#suggestions-container'
    });

    // Initialize autocomplete with custom appendTo:
    $('#autocomplete-dynamic').autocomplete({
        lookup: countriesArray
    });
});