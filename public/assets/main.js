$(document).ready(function() {    
    $('#get_search_product').click(function() {
        var product = $('#search_product').val();
        $.ajax({
            type:'GET',
            url: 'get_product/'+product,
            success:function(data) {
                if(data.not_exists) {
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'red');
                    $('#notifDiv').text('Product Not Exists');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                } else {
                    window.location = 'http://127.0.0.1:3000/product_detail/'+data;
                }
            }
        });
    });
});