<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | World Builder</title>

        <meta charset="utf8">
        <meta name="description" content="World Builder is an ecosytsem of projects leveraging blockchain technology to improve the human condition.">
        <meta name="keywords" content="blockchain, crypto, future, innovation, think-tank, technology">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/world.css" />

        <link rel="icon" type="image/png" href="assets/img/etc.png">

        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/f352960784.js" crossorigin="anonymous"></script>
    </head>

    <body class="wallpaper">
        <?php include('modules/navbar.php'); ?>

        <!-- SPACING OF 5 BR'S NECESSARY FOR TOP OF CONTENT TO SHOW WITH STICKY NAVBAR. -->
        <br /><br /><br /><br /><br />

        <!-- MAIN CONTENT DIV -->
        <div class="container">
            <div class="row jumbotron glassPanel rcAll">
                <div class="container">
                    <div class="row">
                        <div class="col text-left">
                            <h1 class="text-white">NFT Marketplace</h1>
                            <p class="text-success">Home of the World Builder NFT Ecosystem</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card glassPanel border-light rcAll">
                        <div class="card-header glassPanel text-white rcTop">NFT Projects</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-left">
                                      <button type="button" class="btn btn-dark btn-sm btn-block">CUR Fractional NFTs</button>
                                      <button type="button" class="btn btn-dark btn-sm btn-block">CMD Titles</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom"></div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card glassPanel border-light rcAll">
                        <div class="card-header glassPanel text-white rcTop">Your Collection</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-left text-white">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer glassPanel rcBottom"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Dependencies -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/tronweb.js"></script>
        <script src="assets/js/frac_nft.js"></script>
        <script src="assets/js/titles.js"></script>

        <!-- Dapp Scripts -->
    </body>
</html>
