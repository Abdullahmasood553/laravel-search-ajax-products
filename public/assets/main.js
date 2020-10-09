$(document).ready(function() {    
    $('#get_search_product').click(function() {
        var product = $('#search_product').val();
        alert(product);
        $.ajax({
            type:'GET',
            url: 'get_product/'+product,
            success:function(data) {
                if(data == 'Product not available') {
                    $('#product_msg').show();
                } else {
                    window.location = 'http://127.0.0.1:8000/'+data;
                }
            }
        });
    });
});