  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
     <style type="text/css">
      
  #banner {
    display: -ms-flexbox;
    -ms-flex-pack: center;
    -ms-flex-align: center;
    padding: 8em 0 6em 0;
    -moz-align-items: center;
    -webkit-align-items: center;
    -ms-align-items: center;
    align-items: center;
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    background-image: url("banner.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    border-top: 0;
    min-height: 100vh;
    height: 100vh !important;
    position: relative;
    text-align: center;
    overflow: hidden;
  }

    #banner .inner {
      -moz-transform: scale(1.0);
      -webkit-transform: scale(1.0);
      -ms-transform: scale(1.0);
      transform: scale(1.0);
      -moz-transition: opacity 1s ease, -moz-transform 1s ease;
      -webkit-transition: opacity 1s ease, -webkit-transform 1s ease;
      -ms-transition: opacity 1s ease, -ms-transform 1s ease;
      transition: opacity 1s ease, transform 1s ease;
      opacity: 1;
      position: relative;
      z-index: 2;
    }
    #banner:before {
      -moz-transition: opacity 3s ease;
      -webkit-transition: opacity 3s ease;
      -ms-transition: opacity 3s ease;
      transition: opacity 3s ease;
      -moz-transition-delay: 1.25s;
      -webkit-transition-delay: 1.25s;
      -ms-transition-delay: 1.25s;
      transition-delay: 1.25s;
      content: '';
      display: block;
      background-color: #000;
      height: 100%;
      left: 0;
      opacity: 0.65;
      position: absolute;
      top: 0;
      width: 100%;
      z-index: 1;
    }
    #header {
    /*background: rgba(0, 0, 0, 0.75);*/
    color: #aed6f1;
    cursor: default;
    height: 3.25em;
    left: 0;
    line-height: 3.25em;
    position: fixed;
    text-align: right;
    top: 0;
    width: 100%;
    z-index: 10001;
  }

    #header > .logo {
      display: inline-block;
      height: inherit;
      left: 1.25em;
      line-height: inherit;
      margin: 0;
      padding: 0;
      position: absolute;
      top: 0;
    }

      #header > .logo a {
        font-size: 1.25em;
        color: #3498db;
      }

        #header > .logo a:hover {
          color: #3498db;
        }

      #header > .logo span {
        font-weight: 300;
        font-size: .8em;
        color: #FFF;
      }

    #header > a {
      -moz-transition: color 0.2s ease-in-out;
      -webkit-transition: color 0.2s ease-in-out;
      -ms-transition: color 0.2s ease-in-out;
      transition: color 0.2s ease-in-out;
      display: inline-block;
      padding: 0 0.75em;
      color: inherit;
      text-decoration: none;
      color: #FFF;
    }

      #header > a:hover {
        color: #3498db;
      }
   
    </style>
  </head>
  <body>


  <?php 
    session_start();
     if(isset($_SESSION["login"])) {
      ?>
      <p>already login click to <a href="/web2/logout.php">logout</a></p>
       
   <?php
   die();   
  }
    ?>

  <form action="login_auth.php" method="post">
    <section id="banner">
        <div class="inner">
          <header>
             <!--  <div class="container">
              <div class="row">
              <div class="col-md-6"> -->
              <div class="form-group">
              <label for="exampleInputName1"></label>
              <input type="text" name="name" class="form-control transparent-input" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Enter name">
              </div>
              <div class="form-group">
              <label for="exampleInputPassword1"></label>
              <input type="password" name="password" class="form-control transparent-input" id="exampleInputPassword1" placeholder="Password">
              </div>
             <!--  <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Check me out
              </label>
              </div> -->
               <button id="3" type="submit" class="button big scrolly">login</button>
             <!--  </div>
              </div>
              </div> -->
          </header>
          
        </div>
      </section>
   
  </form>
    <?php 
    
     if(isset($_SESSION["loginerror"])) {
      echo $_SESSION["loginerror"];
      
  }
    ?>
      <header id="header" class="alt">
        <div class="logo"><a href="sac.jpg">Sachin <span>by TEMPLATED</span></a></div>
      </header>
  </body>
  </html>