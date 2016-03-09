<div class="retour-message">
  <div class="alert alert-success msg-info" role="alert">
    <strong>Connexion : </strong> <?php echo $message; ?>
  </div>
  <div class="alert alert-danger msg-info" id="msg-error" role="alert" style="<?php if(isset($error) and $error == 1){echo "display: inline-block";}?>">
    <strong>Erreur :</strong> <?php echo $message; ?>
  </div>
</div>
<!-- Page de connexion -->
<div id="login" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
    <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Connexion</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Mot de passe perdu ?</a></div>
            </div>   
            <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>  
                <form id="loginform" class="form-horizontal" role="form" method="POST" action=""><!-- Ajouter le controler qui va bien-->            
                    <div class="input-group input">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Identifiant">
                    </div>
                        
                    <div  class="input-group input">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="login-password" type="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                      <div class="col-sm-12 controls">
                        <button type="submit" id="submit-login" class="btn btn-success">Submit</button>
                      </div>
                    </div>  
              </form>     
        </div>                     
    </div>  
</div>