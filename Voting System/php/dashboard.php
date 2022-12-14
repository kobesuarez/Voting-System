<?php
    include 'admin.php';
    session_start();
    if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
        header('Location: admin.php');
        exit;
    }else{
        header('Location: dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/stylesheets/dashboard.css">
    <script src="/scripts/admin.js"></script>
    <title>Adminitrator</title>
</head>
<body>
    <div class="topnav">
        <img src="/cict.png" class="img">
        <div class="title">
            <p>
                <h1>Taguig City University</h1>
                <h3>College of Information Communication and Technology Admin Portal</h3>
            </p>
        </div>
        <div class="adminpanel">
            <div class="adminlogo">
                <img src="" alt="" class="logo">
            </div>
            <h3 class="adminname">Admin</h3>
        </div>
    </div>
    <div class="sidenav">
        <ul>
            <li><button type = "button" class="dashboardbtn">Dashboard</button></li>
            <li>
            <a href="/htmlpages/voter.html">
                <button type = "button" class="voterbtn">Voters List</button>
            </a></li>
            <li>Candidates</li>
        </ul>
    </div>
    <div class="dashboard">
        <div class="position"></div>

        <div class="candidates"></div>

        <div class="voters"></div>

        <div class="hgraph"></div>
        <div class="tally"></div>

    </div>
    
</body>

</html>