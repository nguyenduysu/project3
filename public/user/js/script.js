// ajax add product to cart
$(document).ready(function () {
    $('#addToCart').on('click', function () {
        let url = "/webbanhang/addProductToCart";
        let product_id = parseInt($('#product_id').val());
        let quantity = parseInt($('#quantity').val());
        let size = parseInt($('input[name="size"]:checked').val());

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'POST',
            cache: false,
            data: {
                'product_id' : product_id,
                'quantity' : quantity,
                'size' : size
            },
            success: function (data) {
                if(data['status'] === 'success') {
                    console.log('success');
                    $('.show-quantity-cart').text(''+ data['totalCart'] +'');
                    alert('Successful');
                }
            }
        });
    });
});

// ajax delete product in cart
$(document).ready( function () {
   $('.product-close').on('click', function () {
       let url = "/webbanhang/deleteProductInCart";
       let product_id = parseInt($(this).prev().prev().text());
       let product_size = parseInt($(this).prev().text());
       if(confirm('Bạn chắc chắn muốn xóa không?')) {
           $.ajax({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               url: url,
               type: 'POST',
               cache: false,
               data: {
                   'product_id': product_id,
                   'product_size': product_size
               },
               success: function (data) {
                   if(data['status'] === 'success') {
                       let element_id_size_deleted = "" + data['product_id'] + data['product_size'];
                       $('#'+element_id_size_deleted).remove();
                       $('.total-price-shopping-cart-page').text('' + data['priceCart'] + ' VNĐ');
                       $('.show-quantity-cart').text(''+ data['totalCart'] +'');
                   }
               }
           });
       }

   });
});

let $w = $(window).scroll(function(){
    if ( $w.scrollTop() > 100 ) {
        $('.header-section').css({
            "padding-top": "10px",
            "height": "60px",
            "position":"fixed",
            "background": "white",
            "width": "100%",
            "z-index": "10",
        });
    } else {
        $('.header-section').css({
            "padding-top": "38px",
            "height": "104px",
            "position":"",
            "background": "",
            "width": "",
            "z-index": ""
        });
    }
});

// check chose size when add product to cart
$(document).ready( function () {
    $('.one-size').children().first().prop('checked', true);
    $('.one-size').on('click', function () {
       $(this).children().first().prop('checked', false);
       $(this).children().first().prop('checked', true);
       $(this).addClass('chose-size');
       $(this).siblings().removeClass('chose-size');
       // $(this).siblings().attr("disabled", "disabled").off('click');
   });
});

//
$(document).ready(function () {
   $('.change-quantity-in-cart').on('click', function () {
      let quantity = $(this).children().next().val();
      let product_id = $(this).parent().next().next().text();
      let product_size = $(this).parent().next().next().next().text();
      let url = '/webbanhang/changeQuantityProductInCart';
      if( quantity <= 0) {
          if (confirm ('Bạn chắc chắn muốn xóa không?')) {
              $.ajax({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: url,
                  type: 'POST',
                  cache: false,
                  data: {
                      'quantity': quantity,
                      'product_id': product_id,
                      'product_size': product_size
                  },
                  success: function (data) {
                      if(data['status'] === 'success') {
                          console.log('success');
                          let id_element = data['product_id'] + '' + data['product_size'];
                          $('#total-' + id_element).text(data['totalPrice'] + ' VNĐ');
                          $('.show-quantity-cart').text(''+ data['totalCart']);
                          $('.total-price-shopping-cart-page').text('' + data['priceCart'] + ' VNĐ');
                          if(data['quantity'] == 0) {
                              $('#' + id_element).attr('hidden', true);
                          }
                      }
                  }
              });
          }
      } else {
          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: url,
              type: 'POST',
              cache: false,
              data: {
                  'quantity': quantity,
                  'product_id': product_id,
                  'product_size': product_size
              },
              success: function (data) {
                  if(data['status'] === 'success') {
                      console.log('success');
                      let id_element = data['product_id'] + '' + data['product_size'];
                      $('#total-' + id_element).text(data['totalPrice'] + ' VNĐ');
                      $('.show-quantity-cart').text(''+ data['totalCart']);
                      $('.total-price-shopping-cart-page').text('' + data['priceCart'] + ' VNĐ');
                  }
              }
          });
      }
      
   });
});


