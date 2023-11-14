<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid justify-content-center">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="font-family: 'Sarabun', sans-serif; "
                href="/index.html"><font color="#FFFFFF">My Profile</font></a>
            </li>
           <li class="nav-item">
            <a class="nav-link active" aria-current="page" style="font-family: 'Sarabun', sans-serif; "
            href="/interested.html"><font color="#FFFFFF">My Interested</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="font-family: 'Sarabun', sans-serif; "
                href="/about_su.html"><font color="#FFFFFF">About SU</font></a>
            </li>   
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="font-family: 'Sarabun', sans-serif; font-weight:800;"
                href="db.php"><font color="#FFFFFF">Database</font></a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <?php
        
            $servername = "db";
            $username = "devops";
            $password = "devops101";
        
            $dbhandle = mysqli_connect($servername, $username, $password);
            $selected = mysqli_select_db($dbhandle, "titanic");

            echo "Connected database server<br>";
            echo "Selected database";
        ?>
    </div>    
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

<style>
    body {
        background-image: url(https://drive.google.com/uc?export=view&id=1awWzx_qKs6qPE-B4Rnjr-oAplmR3oQRC);
    }
    a {
        border-radius: 15px;
    }
    a:hover{
        background-color: #ED7977;
    }
</style>    
    
</html>

