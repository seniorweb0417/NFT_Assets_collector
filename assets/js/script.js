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
});