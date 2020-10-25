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
                    window.location = 'http://127.0.0.1:8000/product_detail/'+data;
                }
            }
        });
    });

    $('#search_product').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         var url = "autocomplete/fetch";
         $.ajax({
          url:url,
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#productList').fadeIn();  
                    $('#productList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function() {
        $('#search_product').val($(this).text());
        $('#productList').fadeOut();
    });
});

const input = document.querySelector('#search_product');

input.addEventListener('blur', function(event) {
    var $trigger = $(".dropdown");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".dropdown-menu").slideUp("fast");
        }  
  })
  
  input.addEventListener('focus', function() {
    // $(".filter-box").show();
    $(this).find(".dropdown-menu").slideToggle("fast");

  })