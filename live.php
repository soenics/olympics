<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lives</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-gradient fixed-top">
    <div class="container">
    <a class="navbar-brand order-1 text-info tilteone" href="index.php">Olympics</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item active ">
          <a class="nav-link p-4 text-info linka" href="index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-4 text-info linka" href="about.php">About</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link p-4 text-info linka" href="viewdata.php">
            News
          </a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link p-4 text-info linka" href="live.php">Live</a>
        </li>

        
        
      </ul>
      <a href="userlogin.php">
      <button type="button" class="btn btn-outline-info mx-4">Logout</button>
      </a>
      
      
      
    </div>
  
   
    
</div>


  </nav>

<header>
    <h1 class="h1one">Livestream
      <div class="live-icon">
        <span class="icon"></span>
        <span class="text">LIVE</span>
      </div>

    </h1>
   
  
    

  </header>


  <main>
    <div id="videoContainer">
      <video src="video/live.mp4" class="videoone" id="livestreamVideo" controls>

      </video>
    </div>
  </main>

  <footer>
    <p>&copy; 2023 Olympics Website. All rights reserved.</p>
  </footer>
    <script src="script.js"></script>
</body>
</html>