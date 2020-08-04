(function () {

  $("#ajaxButton").on('click', function () {

    //  $('#ajaxButton').attr('disabled', true);
    $('.list').empty();

    $.ajax({
      url: 'https://stats.naminilamy.fr/',
      type: 'get',

      success: function (data) {
        $("<ul>Il y a " + data.length + " données statistiques:</ul><br>").appendTo(".list");

        for (let i = 0; i < data.length; i++) {
          let objet = data[i];

          $('<li>' + objet.value + '</li>' + '<li>' + objet.title + '</li><button type="submit" id=' + objet.id + ' class="updateButton" enabled>Mettre à jour </button>').appendTo("ul");
console.log(objet.value);
console.log(objet.title); 
          $("#" + objet.id).on('click', function () {
          
            $("<form><input value=" + objet.value + "><input value=" + objet.title + "><button type='submit' id=" + objet.id +">Valider mise à jour</button></form>").appendTo("#formCreation");
            console.log(objet.value);
console.log(objet.title); });
       
    //        $.ajax({
    //          url: 'https://stats.naminilamy.fr/',
    //          type: 'put',

          //   success: function (data) {
          //     if (data.id = objet.id){
          //    
          //   },
//
//  //Si requête AJAX n'abouti pas: erreur
//  error: function () {
//    alert("La requête n'a pas abouti")
//  },
           // })
          }
      }
    });
    
  });
  })
 ();



