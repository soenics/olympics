<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Uploade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<!-- s -->
<section>
        <div class="form-box">
            <div class="form-value">
                <form action="admuploade.php" method="POST" enctype="multipart/form-data">
                    <h2>Upload Data</h2>
                    <div class="inputbox">
                        
                        <input type="file" name="image" id="image"  required>
                        
                    </div>
                    <div class="inputbox">
                        
                        <input type="text" name="title" id="title" required>
                        <label for="title">Enter Title</label>
                    </div>

                    <div class="inputbox">
                        
                        <input type="text" name="info" id="info" required>
                        <label for="info">Enter info</label>
                    </div>

                    <div class="inputbox">
                     
                        <input type="text" name="imagelink" id="imagelink" required>
                        <label for="imagelink">Enter Image Link</label>
                    </div>

                    
                    <input class="btn btn-outline-info" type="submit" value="Upload">
                    
                </form>
            </div>
        </div>
    </section>
<!-- / -->


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

    
</body>
</html>