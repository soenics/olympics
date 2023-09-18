<?php
// Step 1: Establish a database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'olympics';

$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Step 2: Execute a database query
$query = "SELECT * FROM news";
$result = mysqli_query($connection, $query);

// Step 3: Retrieve data
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Step 4: Display data using HTML and PHP
?>

<!DOCTYPE html>
<html>
<head>
    <title>News</title>
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
  <!-- nav -->
  
  <!-- /navs -->
  <div class="mt-5"></div>
  <div class="container">
    <h1 class="h-6 text-info">News</h1>
    <div class="row">

    <?php foreach ($data as $record): ?>
        <!-- <div class="card">
           
            <p><?php echo $record['info']; ?></p>
        </div> -->
        <div class="col-md-6">
            <div class="card mb-3">
              <a href="<?php echo $record['imagelink'];?>">
              
                <img src="uploads/<?php echo $record['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $record['title']; ?></h5>
                  <p class="card-text"><?php echo $record['info']; ?></p>
                  
                </div>
                </a>
                
              </div>
        </div>
    <?php endforeach; ?>
    </div>
    </div>
    </div>

</body>
</html>

<?php
// Step 5: Close the database connection
mysqli_close($connection);
?>
