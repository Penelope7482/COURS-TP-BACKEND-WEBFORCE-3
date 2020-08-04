
function codePostal(){
    let httpRequest;

    
    document.getElementById("ajaxButton").addEventListener('click', makeRequest);

    function makeRequest(){
      httpRequest = new XMLHttpRequest();
    let codePostal= document.getElementById("codePostal").value;
      if (!httpRequest){
        alert('Abandon: Impossible de créer une instance de XMLHTTP');
        return false;
      }
        let reg = new RegExp(/[0-9]{5}/);
      if (reg.test(codePostal)){
      httpRequest.onreadystatechange = alertContents;
      httpRequest.open('GET', 'https://geo.api.gouv.fr/communes?codePostal=' + codePostal);
      httpRequest.send();
    } else{
        alert ('Veuillez entrer un format de code postal valide')
    }}

    function alertContents(){
      if (httpRequest.readyState === XMLHttpRequest.DONE){
        if (httpRequest.status === 200){
            let villes = JSON.parse(httpRequest.responseText)[0];
          alert (villes.nom);
        }else{
          alert ('il y a eu un problème avec la requête.');
        }
        }
      }
    }

    codePostal();

