<?php
// Establish the database connection (code from Step 1)
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "olympics";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the table
$sql = "SELECT * FROM registrationuser";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3757f8e0d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
    

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
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
          <a href="adminlogin.php">
          <button type="button" class="btn btn-outline-info mx-4">Logout</button>
          </a>
          
          
          
        </div>
      
       
        
    </div>
    
    
      </nav>
      <div class="container">
    <h2 class="mt-4">User Registration Data</h2>
    <div class="row">
    <div class="col-12 col-md-6 mt-4">
      <div class="row mt-4 flex-column flex-lg-row">
                        <div class="col">
                        <h2 class="h6 text-white-50">LOCATION</h2>
                        <div class="card mb-3" style="height: 280px">
                        <div class="card-body">
                        <small class="text-muted">Regional</small>
                        <div class="progress mb-4 mt-2" style="height: 5px">
                        <div class="progress-bar 
                        bg-success w-25"></div>
                        </div>
                        <small class="text-muted">Global</small>
                        <div class="progress mb-4 mt-2" style="height: 5px">
                        <div class="progress-bar 
                        bg-primary w-75"></div>
                        </div>
                        <small class="text-muted">Local</small>
                        <div class="progress mb-4 mt-2" style="height: 5px">
                        <div class="progress-bar 
                        bg-warning w-50"></div>
                        </div>
                        <small class="text-muted">Internal</small>
                        <div class="progress mb-4 mt-2" style="height: 5px">
                        <div class="progress-bar bg-danger w-25"></div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col">
                        <h2 class="h6 text-white-50">DATA</h2>
                        <div class="card mb-3" style="height: 280px">
                        <div class="card-body">
                        <div class="text-end">
                        <button class="btn btn-sm 
                        btn-outline-secondary">
                        <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-sm 
                        btn-outline-secondary">
                        <i class="fas fa-sort-amount-up"></i>
                        </button>
                        <button class="btn btn-sm 
                        btn-outline-secondary">
                        <i class="fas fa-filter"></i>
                        </button>
                        </div>
                        <table class="table">
                            <tr>
                            <th>ID</th>
                            <th>Age Group</th>
                            <th>Data</th>
                            <th>Progress</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>20-30</td>
                            <td>19%</td>
                            <td>
                            <i class="fas fa-chart-pie"></i>
                            </td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>30-40</td>
                            <td>40%</td>
                            <td>
                            <i class="fas fa-chart-bar"></i>
                            </td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>40-50</td>
                            <td>20%</td>
                            <td>
                            <i class="fas fa-chart-line"></i>
                            </td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>>50</td>
                            <td>11%</td>
                            <td>
                            <i class="fas fa-chart-pie"></i>
                            </td>
                            </tr>
                            </table>
                            </div>
                            </div>
                            </div>
                            </div>
                            <a href="adminuploade.php">
                            <button  type="button" class="btn btn-primary btn-lg btn-block">News Upload </button>
    </div></a>
    <div class="col-12 col-md-6">
    <table class="mt-5">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <a href="admin_view.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "No records found.";
        }
        ?>
    </table>
    </div>
    </div>
    </div>
</body>
</html>
