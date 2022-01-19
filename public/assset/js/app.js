$(document).ready(function() {
  var ckbox = $("input[name='bac_niveau']");
  var chkId = '';
  $( "#AN" ).hide( 700 );
      $("#ly").text("lycée (*)");
        $("#vilely").text("Ville de lycée (*)");
        $( "#morakaba" ).show();
      $( "#AN" ).show( "slow" );
      
 ckbox.on('click', function() {
    
    if (ckbox.is(':checked')) {
      $("input[name='bac_niveau']:checked").each ( function() {
   			chkId = $(this).val() + ",";
        chkId = chkId.slice(0, -1);
 	  });
      if (chkId == 'actuel') {
      $( "#AN" ).hide( 700 );
      $("#ly").text("lycée (*)");
        $("#vilely").text("Ville de lycée (*)");
        $( "#morakaba" ).show();
      $( "#AN" ).show( "slow" );
      } else {
      $( "#AN" ).hide( 700 );
      $("#ly").text("Etablissement actuelle (*)");
      $("#vilely").text("Ville de l'établissement (*)");
      $( "#morakaba" ).hide();

      $( "#AN" ).show( "slow" );

       }


    }     
  });
});