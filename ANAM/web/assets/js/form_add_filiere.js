$(document).ready(function() {
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
            var $container2 = $('div#free_anambundle_etablissement_filiere');
             // On ajoute un lien pour ajouter une nouvelle catégorie
            var $lienAjout2 = $('<a href="#" id="ajout_filiere" class="btn">Nouveau champs filiere</a>');
            $container2.append($lienAjout2);
            
            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
            $lienAjout2.click(function(e) {
            ajouterCategorie2($container2);
            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
            });
            
            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = $container2.find(':input').length;
            
              // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
            if (index === 0) {
                ajouterCategorie2($container2);
            } else {
                // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
                $container2.children('div').each(function() {
                ajouterLienSuppression($(this));
            });
            }
            // La fonction qui ajoute un formulaire Categorie
  function ajouterCategorie2($container2) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte "__name__label__" qu'il contient par le label du champ
    // - le texte "__name__" qu'il contient par le numéro du champ
    var $prototype = $($container2.attr('data-prototype').replace(/__name__label__/g, '')
                                                        .replace(/__name__/g, ''));
//.replace(/__name__label__/g, '' + (index+1))
//              .replace(/__name__/g, index));
    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression($prototype);
    // On ajoute le prototype modifié à la fin de la balise <div>
    $container2.append($prototype);
    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }
  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression($prototype) {
    // Création du lien
    $lienSuppression2 = $('<a href="#" class="btn btn-danger">Supprimer</a>');
    // Ajout du lien
    $prototype.append($lienSuppression2);
    // Ajout du listener sur le clic du lien
    $lienSuppression2.click(function(e) {
      $prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
  
  //***************** Loading formulaire ***************************//
  
  var options2 = {
    beforeSend: function()
    {
        $("#progress").show();
        //clear everything
        $("#bar").width('0%');
        $("#message").html("");
        $("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete)
    {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%');
 
    },
    success: function()
    {
        $("#bar").width('100%');
        $("#percent").html('100%');
 
    },
    complete: function(response)
    {
        $("#message").html("<font color='green'>"+response.responseText+"</font>");
    },
    error: function()
    {
        $("#message").html("<font color='red'> ERROR: unable to upload files</font>");
 
    }
 
};
 
     $("form").ajaxForm(options2);
});        