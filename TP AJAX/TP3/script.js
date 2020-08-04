(function () {

  $("#ajaxButton").on('click', function () {
    let codePostal = $("#codePostal").val();
    $.get('https://geo.api.gouv.fr/communes?codePostal=' + codePostal, function (data) {

      document.getElementsByTagName('body');
      //crée élément UL     
      let ul = document.createElement("ul", { id: 'listeVille' });
      //insertion Ul dans le dom
      let insertionUlDansDOM = document.getElementById('listeVille');
      document.getElementById('form').append(ul);
     
      for (let i = 0; i < data.length; i++) {
        let ville = data[i].nom;


        //création élément li pour chaque ville 
        let li = document.createElement("li", { id: 'ville' });
        //ajout contenu à li
        li.append(ville);
        //ajoute li crée dans le DOM (ul)
        ul.append(li);
  

      }

    });
  });


})();