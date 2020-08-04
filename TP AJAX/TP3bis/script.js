 (function () {
  $("#ajaxButton").on('click', function () {
    $('.list').empty();
    $("<ul>Liste des villes:</ul>").appendTo(".list");

    let codePostal = $("#codePostal").val();

    $.get('https://geo.api.gouv.fr/communes?codePostal=' + codePostal, function (data) {

      for (let i = 0; i < data.length; i++) {

        let ville = data[i].nom;

        //création élément li pour chaque ville 
        $("<li>" + ville +"</li>").appendTo("ul");
      
      }
    });
  });
})();    

