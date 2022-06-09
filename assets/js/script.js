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
                if (result == 'SUCCESS') {
                    $('.result_wrapper').removeClass('d-none');
                    $('.error_wrapper').addClass('d-none');
                    $('.download_btn').removeAttr('disabled');
                } else {
                    $('.error_wrapper').removeClass('d-none');
                    $('.result_wrapper').addClass('d-none');
                    $('.download_btn').attr('disabled', '');
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