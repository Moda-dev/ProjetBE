$(document).ready(function(){
  $("#ajoutEnfant").hide();
  $("#addParent").hide();
  
	$("#addEnfant").click(function(){
		$("#ajoutEnfant").show();
    $("#addParent").show();
		$('#ajoutAdherent').hide();
  });
  
  $("#addParent").click(function(){
    $("#addParent").hide();
		$("#ajoutEnfant").hide();
		$('#ajoutAdherent').show();
  });

  $('.btnAddEnfant').click(function(){
    $('#ajoutEnfant').show();
  });
  // Remplissage de la liste classe
  $('#nomEtablissement').on('change', function() {
     $.ajax({
        url : 'controller/controller_classes.php', // Le controller à appeler
        type : 'POST', // Methode POST
        data : { etablissement: this.value },
        success: function(data){
          console.log(data);
          $('#classeEtablissement').html(data);
        }
      });
  });

});

 function idParent(id){
    $('#id-parent').val(id);
  }

/*
 * Permet la récupération du nom du fichier selectionné
 * Et l'affiche dans le input
 */
$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) console.log(log);
        }
    });
});