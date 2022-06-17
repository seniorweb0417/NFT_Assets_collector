$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault();

        showLoading(true);
        $.ajax({
            method: 'POST',
            url: 'process.php',
            data: {
                action: 'GET_INFO', 
                address: $('#contract_address').val(),
                tokenid: $('#token_id').val()
            },
            success: function(result) {
                showLoading(false);
                var res = [];
                try {
                    res = JSON.parse(result);

                    if (!('success' in res)) {
                        var img_url = res.image_url;
                        var owner = res.owner.user.username;
                        var contract_name = res.collection.name;
                        var blockchain = res.permalink;
                        blockchain = blockchain.replace('https://testnets.opensea.io/', '');
                        var arr = blockchain.split('/');
                        var net_name = capitalizeFirstLetter(arr[1]);
                        var schema = res.asset_contract.schema_name;
                        var address = res.asset_contract.address.substr(0, 6) + '...' + res.asset_contract.address.substr(-4, 4);

                        $('.tokenimg').attr('src', img_url);
                        $('.owner').html(owner);
                        $('.contract_name').html(contract_name);
                        $('.tokenid').html($('#token_id').val());
                        $('.net_name').html(net_name);
                        $('.schema').html(schema);
                        $('.address').html(address);

                        showResult(true);
                    } else {
                        showResult(false);
                    }
                    console.log(res);
                } catch(e) {
                    showResult(false);
                    console.log(res);
                }
            }
        });
    });

    $('.download_btn').click(function() {
        var contract_address = $('#contract_address').val().trim();
        var token_id = $('#token_id').val().trim();

        if ($('#contract_address').val().trim() == '') {
            alert('Enter contract address'); return;
        }

        if ($('#token_id').val().trim() == '') {
            alert('Enter token id'); return;
        }

        showLoading(true);
        domtoimage.toJpeg(
            document.getElementById('result_wrapper'), { 
                quality: 1, 
                width: 830, 
                height: 1370
            })
            .then(function (dataUrl) {
                showLoading(false);
                var link = document.createElement('a');
                link.download = contract_address + '_' + token_id + '.jpeg';
                link.href = dataUrl;
                link.click();
            });
    });
});

function showLoading(state) {
    if (!state) {
        $('.lds-facebook').addClass('d-none');
        $('button').removeAttr('disabled');
    } else {
        $('.lds-facebook').removeClass('d-none');
        $('button').attr('disabled', '');
    }
}

function showResult(bRet) {
    if (bRet) {
        $('.result_wrapper').removeClass('d-none');
        $('.error_wrapper').addClass('d-none');
        $('.download_btn').removeAttr('disabled');
    } else {
        $('.error_wrapper').removeClass('d-none');
        $('.result_wrapper').addClass('d-none');
        $('.download_btn').attr('disabled', '');
    }
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}