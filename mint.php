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
                        <div class="card-header glassPanel text-white rcTop">Mint Options</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                  <form>
                                    <div class = "form-row">
                                      <div class = "col-md-12">
                                        <div class="form-group" id = "CUR-BACK">
                                          <label for="initial_backing ">Initial CUR Backing</label>
                                          <input type="text" class="form-control" id="initial_backing" aria-describedby="backHelp" placeholder="CUR Backing">
                                          <small id="backHelp" class="form-text text-muted">The amount of CUR to initially back the NFT (minimum of x CUR).</small>
                                        </div>
                                        <div class="form-group" id = "CUR-FRAC">
                                          <label for="initial_fractions">Initial Fractions</label>
                                          <input type="text" class="form-control" id="initial_fractions" aria-describedby="fracHelp" placeholder="Number of Initial Fractions">
                                          <small id="fracHelp" class="form-text text-muted">The initial fractions will be distributed upon creation.</small>
                                        </div>
                                        <div class="form-group" id = "CUR-TO">
                                          <label for="initial_fractions">Receiver Address</label>
                                          <!-- Could replace the placeholder text with address found in tronweb -->
                                          <input type="text" class="form-control" id="receiver_address" aria-describedby="addressHelp" placeholder="TRON Address to Receive Tokens">
                                          <small id="addressHelp" class="form-text text-muted">The initial fractions generated will be sent to this address.</small>
                                        </div>
                                      </div>
                                      <div class = "col-md-12">
                                        <img src = "https://unsplash.com/photos/QMDap1TAu0g"/>
                                      </div>
                                    </div>
                                        <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">I agree to all <a href = "terms.php">terms and conditions</a>.</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Create NFT</button>
                                  </form>
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
