<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../public/css/style.css?v=<?=rand()?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css?v=<?=rand()?>"  media="screen,projection"/>
    <link rel="stylesheet" href="../../public/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <nav>
      <a href="#" data-target="slide-out" class="sidenav-trigger menupt"><i class="material-icons"><img id='menuimg' src="../../public/images/menu.png" alt="">
  </i></a> 
         <div id="bigpgdiv">
      <li class="pagesbig pgbighome">Home</li>
      <li class="pagesbig">Registration</li>
      <li class="pagesbig">Settings</li>
    </div>
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
       
      </div>
    </li>
    <div class="pagesn">
      <li class="pages">Home</li>
      <li class="pages">Registration</li>
      <li class="pages">Settings</li>
      <li class="pages">About</li>
    </div>
  </ul>
      <div class='logotp'></div> 
      <div id="hide">
        hahaha
      </div>
 
  </nav>
  <section class='row section'>
    <div class='col s5'>
      <div class="mthdiv">
      <h1 class='gameicon 'id="math" onclick="math">MATH</h3>
          <div class='icons mth topicon'>
        </div>
      </div>
      <div class='memdiv'>
          <h1 class='gameicon'id="memor" onclick="memory">MEMORY</h3>
          <div class='icons mem botticon'>
       
          </div>
      </div>
    </div>
    <div class='col s5'>
      <div class='logdiv'>
          <h1 class='gameicon'id="logic" onclick="logic">LOGIC</h3>
          <div class='icons logic topicon'>
          </div>
      </div>
      <div class='attdiv'>
          <h1 class='gameicon'id="attent" onclick="attent">ATTENT</h3>
          <div class='icons att botticon'>
          
      </div>
        </div>
    </div>
    
    
  </section>
  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
  <script src="../../public/js/script.js?v=<?=rand()?>"></script>
  <script type="text/javascript" src="../../public/js/materialize.min.js?v=<?=rand()?>"></script>
</body>
</html>