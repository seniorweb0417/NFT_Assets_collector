$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'process.php',
            data: {
                action: 'GET_INFO', 
                address: $('#contract_address').val(),
                tokenid: $('#token_id').val()
            },
            success: function(result) {
                $('.test').html(result);
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

        domtoimage.toJpeg(document.getElementById('result_wrapper'), { quality: 1, width: 1110, height: 1434 })
        .then(function (dataUrl) {
            var link = document.createElement('a');
            link.download = contract_address + '_' + token_id + '.jpeg';
            link.href = dataUrl;
            link.click();
        });
    });
});