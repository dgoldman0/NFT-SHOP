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
                            <h1 class="text-white">NFT Minting System</h1>
                            <p class="text-success">Let's Create Something New!</p>
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
                                      <button type="button" class="btn btn-dark btn-sm btn-block" id = "proj-select-curnft">CUR Fractional NFTs</button>
                                      <button type="button" class="btn btn-dark btn-sm btn-block" id = "proj-select-cmdtitles">CMD Titles</button>
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
                                  <form id = "curnft-mint">
                                    <div class = "form-row">
                                      <div class = "col-md-8">
                                        <div class="form-group" id = "cur-back">
                                          <label for="initial_backing ">Initial CUR Backing</label>
                                          <input type="text" class="form-control" id="initial_backing" aria-describedby="backHelp" placeholder="1,000 CUR minimum backing">
                                          <small id="backHelp" class="form-text text-muted">The amount of CUR to initially back the NFT.</small>
                                        </div>
                                        <div class="form-group" id = "cur-frac">
                                          <label for="initial_fractions">Initial Fractions</label>
                                          <input type="text" class="form-control" id="initial_fractions" aria-describedby="fracHelp" placeholder="Number of Initial Fractions">
                                          <small id="fracHelp" class="form-text text-muted">The initial fractions will be distributed upon creation.</small>
                                        </div>
                                        <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="moreFrac">
                                          <label class="form-check-label text-white" for="moreFrac">Allow more fractions.</label>
                                        </div>
                                        <div class="form-group" id = "cur-to">
                                          <label for="initial_fractions">Receiver Address</label>
                                          <!-- Could replace the placeholder text with address found in tronweb -->
                                          <input type="text" class="form-control" id="receiver_address" aria-describedby="addressHelp" placeholder="TRON Address to Receive Tokens">
                                          <small id="addressHelp" class="form-text text-muted">The initial fractions generated will be sent to this address.</small>
                                        </div>
                                      </div>
                                      <div class = "col-md-4">
                                        <div class = "form-group" id = "image">
                                          <label for = "image_select">Select Preview</label>
                                          <input type = "image" id = "image_select" aria-describedby = "imageHelp" src = "https://images.unsplash.com/photo-1487088678257-3a541e6e3922?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3774&q=80" width = "200" />
                                          <small id = "imageHelp" class = "form-text text-muted">Select a preview image for the NFT.</small>
                                        </div>
                                        <div class = "form-group" id = "media">
                                          <label for = "media_select">Select Media</label>
                                          <input type = "file" id = "media_select" aria-describedby = "mediaHelp" />
                                          <small id = "mediaHelp" class = "form-text text-muted">Select the media to be certified by the NFT (if different from preview image).</small>
                                        </div>
                                        <input id="image_file" type="file" accept = "image/*" style="display: none;" />
                                      </div>
                                    </div>
                                    <hr/>
                                    <div class="form-group" id = "cur-title">
                                      <label for="nft_title">NFT Title</label>
                                      <input type="text" class="form-control" id="nft_title" aria-describedby="titleHelp" placeholder="A Fancy Title">
                                      <small id="titleHelp" class="form-text text-muted">Choose a title for this NFT.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="nft_description">NFT Description</label>
                                        <textarea class="form-control" id="nft_description" rows="3" placeholder = "Plain Text or Markdown Description"></textarea>
                                    </div>
                                    <hr/>
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="termsCheck">
                                      <label class="form-check-label text-white" for="termsCheck">I agree to all <a href = "terms.php">terms and conditions</a>.</label>
                                    </div>
                                    <hr/>
                                    <button type="button" id = "create-nft" class="btn btn-primary">Create NFT</button>
                                  </form>
                                  <form id = "cmdtitle-mint">
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
        <script src="assets/lib/mint.js"></script>
        <script src="assets/lib/abi.js"></script>
        <!-- Dapp Scripts -->
    </body>
</html>
