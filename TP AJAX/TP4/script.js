(function () {
  $(".la-square-jelly-box").hide();

  $("#ajaxButton").on('click', function () {
    $('.list').empty();

    $(".la-square-jelly-box").show();


    let codePostal = $("#codePostal").val();

    $.ajax({
      url: 'https://geo.api.gouv.fr/communes?codePostal=' + codePostal,
      type: 'get',
      success: function (data) {
        
     
        //création élément ul
        $("<ul>Il y a " + data.length + " communes ayant ce code postal:</ul>").appendTo(".list");

        for (let i = 0; i < data.length; i++) {

          let ville = data[i].nom;

          //création élément li pour chaque ville 
          $("<li>" + ville + " </li>").appendTo("ul");

        }

        $(".la-square-jelly-box").hide();
      },
      error: function(){
        $(".la-square-jelly-box").hide();
        alert("La requête n'a pas abouti")
      }}); 
   });
})();



