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
        <div class="container">
            <h1 class="text-center">NFT Assets to PSD Generator</h1>
            <form class="form-inline justify-content-center" action="">
                <label for="contract_address" class="mr-sm-2 mb-2">Contract Address:</label>
                <input type="text" class="form-control mb-2 mr-sm-2"  placeholder="Enter Contract address" id="contract_address">
                <label for="pwd" class="mr-sm-2 mb-2">Token Id:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Enter Token id" id="token_id">
                <button type="button" class="btn btn-primary mr-sm-2 mb-2 get_info_btn">Get Info</button>
                <button type="button" class="btn btn-success mb-2 download_btn">Download</button>
            </form>
            <div class="result_wrapper text-center">
                This is result wrapper
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>