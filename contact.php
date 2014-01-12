<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>contato</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <link href="css/codirc.css" rel="stylesheet">
    <script type="text/javascript">var RecaptchaOptions = {theme:'white'};</script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
              <a class="navbar-brand" href="index.html">CODIRC 2014 - Distrito 4540</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="venue.html">Local do Evento</a></li>
                <li><a href="schedule.html">Programação</a></li>
                <li><a href="signup.html">Inscreva-se</a></li>
                <li><a href="count.html">Inscritos</a></li>
                <li><a href="sponsor.html">Apoio</a></li>
                <li><a href="contact.php">Contato</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contato</h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contato</li>
          </ol>
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
          src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=S%C3%A3o+Carlos+-+S%C3%A3o+Paulo,+Brazil&amp;aq=0&amp;oq=s%C3%A3o+carlos&amp;sll=37.0625,-95.677068&amp;sspn=39.592876,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=S%C3%A3o+Carlos+-+S%C3%A3o+Paulo,+Brazil&amp;ll=-22.017876,-47.886423&amp;spn=0.022678,0.038581&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Dúvidas ou  Sugestões? Mande um email pra gente :)</h3>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Nome*</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email*</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Telefone</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Mensagem*</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
                <div id="recaptcha_div"></div>
        <?php
            require_once('recaptchalib.php');
            $publickey = "6LdNuOwSAAAAAD6yGqbV3Z3GwNFDXwAaZjsQq6cf ";
            echo recaptcha_get_html($publickey);
        ?>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Enviar</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Rotaract Bandeirantes</h3>
          <h4>São Carlos</h4>
          <p>
            Reuniões: Colégio Caaso</br>
            Toda Segunda-Feira às 19H</br>
            São Carlos - SP</br>
          </p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:secretaria@rotaractbandeirantes.org">Secretaria</a></p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:tesouraria@rotaractbandeirantes.org">Tesouraria</a></p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:suporte@rotaractbandeirantes.org">Suporte Técnico</a></p>
          
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: De 13 de Junho às 12:00 </br>
            Até dia 16 de Junho às 18:00</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/RotaractClubSaoCarlosBandeirantes" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Rotaract Club de São Carlos - Bandeirantes Bandeirantes 2014</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

  </body>
</html>
