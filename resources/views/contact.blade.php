<!DOCTYPE html>
<html>
 <head>
  <title>Contact us </title>
   <link rel="stylesheet" href="css/principal-style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
         <!------------------------------------- Navbar section-------------------------------------------------->
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">ETBSEL</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="/#banner">Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/#nous">Apropos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/#services">Services</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/#pknous">Offres</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
              
        </section>
        <!-------------------------------------Form section-------------------------------------------------->
   <section id="contact">
    <div class="container">
        <div class="row">
          
                <div class="col-md-6">
                        <img src="Assets/mail.png" class="img-fluid mail">
                </div>
                <div class="col-md-6">
                  
                  <h1 class="contact-title">Contactez-nous !</h1>
                  @if(count($errors)>0)
                  <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                  <ul>
                    @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
                  </ul>
                  </div>
                  @endif
                  @if ($message=Session::get('success'))
                  <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                  <strong>{{$message}}</strong>
                  </div>
                  @endif
                <form action="{{url('contact/send')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="">Nom et prénom</label>
                      <input type="text" name="nom" id="nom"class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="mail" id="mail"class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Sujet</label>
                      <input type="text" name="sujet" id="sujet"class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Message</label>
                      <textarea name="msg" id="msg"  rows="8" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      
                      <input type="submit" name="submit" id="submit" class="form-control" value="Envoyer">
                    </div>
                    
                  </form>
                </div>
        </div>
        
      
    </div>
    <div style="width: 100%; position: bottom;"> <img src="Assets/wave3.png" class="bottom-img"></div>
  </section>
  <section id="footer-contact">

  
  <div class="container text-center">
    <div class="row text-center">
    <div class="col-md-6">
     <h4 style="color: white;padding-top:50px;">Contactez-nous!</h4>
     <a href=/contact style="color: white">Contactez-nous</a>
    </div>
    <div class="col-md-6">
     <img src="Assets/logo.png" style="height: 100px;width: 100px; margin-bottom: 20px;">
     <p style="color: white">&copy; ETBSEL</p>
     </div>
    </div>
  </section>

  </div>
</body>
<script>
  AOS.init();
</script>
</html>