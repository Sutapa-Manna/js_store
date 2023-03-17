<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">





</head>

<body>
    <div>
        <?php
        include 'components/header.php';
        ?>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/img1.jpg" class="d-block " alt="..." style="width: 100%; height: 390px">
            </div>
            <div class="carousel-item">
                <img src="./img/img2.jpg" class="d-block" alt="..." style="width: 100%; height: 390px">
            </div>
            <div class=" carousel-item">
                <img src="./img/img3.jpg" class="d-block " alt="..." style="width: 100%; height: 390px">
            </div>
        </div>
        <button class=" carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:black; width:30px; height:30px"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:black;width:30px; height:30px"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div>
        <?php
        include 'components/footer.php';
        ?>
    </div>



</body>

</html>