<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/3757f8e0d4.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="style.css" />
</head>
<body>


    <div class="container">
        
        
        <form action="regphp.php" method="POST">
          <h1 class="form-title mt-5">Registration</h1>
          <div class="main-user-info">
            <div class="user-input-box">
              <label for="fullName">First Name</label>
              <input class="form-control" type="text"
                      id="fullName"
                      name="firstname"
                      placeholder="Enter Full Name"/>
            </div>
            <div class="user-input-box">
              <label for="username">Last Name</label>
              <input class="form-control" type="text"
                      id="username"
                      name="lastname"
                      placeholder="Enter Username"/>
            </div>
            <div class="user-input-box">
              <label for="email">Email</label>
              <input class="form-control" type="email"
                      id="email"
                      name="email"
                      placeholder="Enter Email"/>
            </div>
            <div class="user-input-box">
              <label for="phoneNumber">Phone Number</label>
              <input class="form-control" type="text"
                      id="phoneNumber"
                      name="phoneno"
                      placeholder="Enter Phone Number"/>
            </div>
            <div class="user-input-box">
              <label for="password">Password</label>
              <input class="form-control" type="password"
                      id="password"
                      name="password"
                      placeholder="Enter Password"/>
            </div>
            <div class="user-input-box">
              <label for="confirmPassword">Country</label>
              <input class="form-control" type="text"
                      id="confirmPassword"
                      name="country"
                      placeholder="Enter Country"/>
            </div>
            <div class="user-input-box">
                <label for="confirmPassword">City</label>
                <input class="form-control" type="text"
                        id="confirmPassword"
                        name="city"
                        placeholder="Enter City"/>
              </div>
              <div class="user-input-box">
                <label for="confirmPassword">Your Favorite Sports</label>
                <div class="select-button">
                    <select name="favsport">
                      <option value="" disabled selected>Select an option</option>
                      <option value="Alpine Skiing">Alpine Skiing</option>
                      <option value="Archery">Archery</option>
                      <option value="Artistic Gymnastics">Artistic Gymnastics</option>
                      <option value="Artistic Swimming">Artistic Swimming</option>
                      <option value="Athletics">Athletics</option>
                      
                      <option value="Badminton">Badminton</option>
                      <option value="Baseball Softball">Baseball Softball</option>
                      <option value="Beach Handball">Beach Handball</option>
                      <option value="Beach Volleyball">Beach Volleyball</option>
                      <option value="Biathlon">Biathlon</option>
                      <option value="Bobsleighl">Bobsleigh</option>
                      <option value="Boxing">Boxing</option>
                      <option value="Breaking">Breaking</option>

                      <option value="Canoe Flatwater">Canoe Flatwater</option>
                      <option value="Canoe Slalom">Canoe Slalom</option>
                      <option value="Cross-Country Skiing
                      ">Cross-Country Skiing
                    </option>
                      <option value="Curling">Curling</option>
                      <option value="Cycling BMX Freestyle">Cycling BMX Freestyle</option>
                      <option value="Cycling BMX Racing">Cycling BMX Racing</option>
                      <option value="Cycling Mountain Bike
                      ">Cycling Mountain Bike
                    </option>
                      <option value="Cycling Road">Cycling Road</option>
                    </select>
            </div>

              </div>
              <div class="user-input-box">
                <label for="dob">Date of birth:</label>
                <input  type="date" id="dob" name="dob" class="form-control dob-input">
              </div>
          </div>
          <div class="gender-details-box">
            <span class="gender-title">Gender</span>
            <div class="gender-category">
              <input  type="radio" name="gender"  value="Male">
              <label for="male">Male</label>
              <input type="radio" name="gender"value="Female">
              <label for="female">Female</label>
              <input type="radio" name="gender"  value="Other">
              <label for="other">Other</label>
            </div>
            
          
          <div class="form-submit-btn ">
            <input type="submit" name="save_data" class="btn-info" value="Register">
          </div>
        </form>
      </div>
   
    
</body>
</html>