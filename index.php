<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NFT Assets to image</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container w-830">
            <h1 class="text-center">NFT Assets to PSD Generator</h1>
            <form class="form-inline justify-content-center" action="">
                <label for="contract_address" class="mr-1 mb-2">Contract Address:</label>
                <input type="text" class="form-control mb-2 mr-1" placeholder="Enter Contract address" id="contract_address" required value=''>
                <label for="pwd" class="mr-1 mb-2">Token Id:</label>
                <input type="text" class="form-control mb-2 mr-1" placeholder="Enter Token id" id="token_id" required value="">
                <button type="submit" class="btn btn-primary mr-1 mb-2 get_info_btn">Get Info</button>
                <button type="button" class="btn btn-success mb-2 download_btn" disabled>Download</button>
            </form>
            <div class="result_wrapper text-center d-none" id="result_wrapper">
                <div class="info_wrapper row">
                    <div class="col-3 text-left fee"><img class="marks" src="assets/img/score.png"></div>
                    <div class="col-6 text-center"><img class="logo" src="assets/img/logo.png"></div>
                    <div class="col-3 text-right"><img class="qrcode" src="assets/img/qrcode.jpg"></div>
                    <div class="col-8 text-left">
                        <p class="owner">AlexxVault</p>
                        <p class="contract_name">Bored Ape Yacht Club</p>
                        <p class="tokenid">#2815</p>
                    </div>
                    <div class="col-4 text-right">
                        <div class="row">
                            <div class="for_center">
                                <p class="net_name text-center">Ethereum</p>
                                <p class="schema text-center">ERC-1155</p>
                                <p class="address text-center">0x495f...7b5e</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-wrapper">
                    <img class="tokenimg" src="https://img.seadn.io/files/d67477e51780cdeaf45fd96d97b1dfa9.png?auto=format&w=600" />
                </div>
                <img class="overlay" src="assets/img/overlay.png">
            </div>
            <div class="error_wrapper d-none">
                <div class="alert alert-danger">
                    <strong>Wrong parameter!</strong> Try again to input contract address and token id.
                </div>
            </div>
        </div>
        <div class="lds-facebook d-none"><div></div><div></div><div></div></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/dom-to-image.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>