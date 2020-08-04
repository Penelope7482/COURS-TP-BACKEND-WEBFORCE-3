(function () {

  $("#ajaxButton").on('click', function () {
    let codePostal = $("#codePostal").val();
    $.get('https://geo.api.gouv.fr/communes?codePostal=' + codePostal, function (data) {
      let villes = [];

      for (let i = 0; i < data.length; i++) {
        let ville = data[i].nom;
        villes.push(ville);
      }
      alert(villes);
    });
  });


})();