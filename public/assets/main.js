$(document).ready(function() {

    $("#search_product").autocomplete({
        source: '../autocomplete/search_product',
      });
      
    $('#get_search_product').click(function() {
        var product = $('#search_product').val();
        $.ajax({
            type:'GET',
            URL: 'get_product/'+product,
            success:function(data) {
                alert(data);
            }
        });
    });
});