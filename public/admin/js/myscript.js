$(document).ready(function() {
	$("div.messageNotification").delay(4000).slideUp();
});
function xacnhanxoa(msg) {
	console.log('click');
	return confirm(msg);
}

$(document).ready(function () {
    $("#addImages").click(function () {
        $("#insertMoreButtonImageDetail").append('<div class="form-group"><input type="file" name="imagesProductDetail[]"></div>');
    })
});

$(document).ready( function () {
   $('#addFormSizeQuantity').click( function () {
       $('#formSizeQuantity').append('<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><label>Size</label><input class="form-control" name="size[]" placeholder="Please Enter Quantity" /></div><div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><label>Quantity</label><input class="form-control" name="quantity[]" placeholder="Please Enter Size" /></div>');
   });
});

// delete image detail
$(document).ready(function () {
    $(".del_img_demo").on('click', function () {
        var url = "http://localhost/webbanhang/admin/product/deleteImgDetail/";
        var _token = $("form[name='formEditProduct']").find("input[name='_token']").val();
        var idHinh = $(this).parent().find("img").attr("idHinh");
        var img = $(this).parent().find("img").attr("src");
        var rid = $(this).parent().find("img").attr("id");
        $.ajax({
            url: url + idHinh,
            type: 'GET',
            cache: false,
            data: {
                "_token": _token,
                "idHinh": idHinh,
                "urlHinh": img
            },
            success: function (data) {
                if(data === "success") {
                    $("#" + rid).remove();
                } else {
                    alert("Lỗi! Xin Hãy Liên Hệ Admin");
                }
            }
        });
    });
});

// ajax change status payment of deal
$(document).ready( function () {
    $('.edit-button-status-payment').on('click', function () {
        $(this).next().removeClass('unvisible');    // show select option
        $(this).addClass('unvisible');              // hidden button edit
        $(this).prev().prev().addClass('unvisible');// hidden text status payment
    });
    
    $('.done-status-payment').on('click', function () {
        let status_payment = $(this).prev().val();
        let deal_id = $(this).next().val();
        let sale_id = $(this).next().next().val();
        
        let url = '/webbanhang/admin/deal/updateDeal';
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'POST',
            cache: false,
            data: {
                'deal_id': deal_id,
                'status_payment': status_payment,
                'sale_id': sale_id
            },
            success: function (data) {
                if(data['status'] === 'success') {
                    $('.change_status_payment').addClass('unvisible');
                    if(data['status_payment'] === '0')
                    {
                        $(`#status-payment-${data['deal_id']}`).text('Chưa thanh toán');
                    } else if(data['status_payment'] === '1') {
                        $(`#status-payment-${data['deal_id']}`).text('Đã thanh toán');
                    }
                    $('.status-payment').removeClass('unvisible');
                    $('.edit-button-status-payment').removeClass('unvisible');
                    $(`#td-salesman-${data['deal_id']}`).text(data['salesman']);
                }
            }
        });
    })
});

// ajax change status of deal
$(document).ready(function () {
   $('.edit-button-status').on('click', function () {
       $(this).addClass('unvisible');               // hidden button edit status
       $(this).prev().prev().addClass('unvisible'); // hidden text status
       $(this).next().removeClass('unvisible');     // show button done
   });
   
   $('.done-status').on('click', function () {
       let status = $(this).prev().val();
       let deal_id = $(this).next().val();
       let sale_id = $(this).next().next().val();
       
       let url = '/webbanhang/admin/deal/updateStatusDeal';
       
       $.ajax({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           url: url,
           type: 'POST',
           cache: false,
           data: {
               'deal_id': deal_id,
               'status': status,
               'sale_id': sale_id
           },
           success: function (data) {
               if(data['status_ajax'] === 'success') {
                   $('.change_status').addClass('unvisible');
                   if(data['status'] === '0')
                   {
                       $(`#status-${data['deal_id']}`).text('Đang trong kho');
                   } else if(data['status'] === '1') {
                       $(`#status-${data['deal_id']}`).text('Xuất kho, đang vận chuyển');
                   } else if(data['status'] === '2') {
                       $(`#status-${data['deal_id']}`).text('Đã giao nhận hàng');
                   }
                   $('.status').removeClass('unvisible');
                   $('.edit-button-status').removeClass('unvisible');
                   $(`#td-salesman-${data['deal_id']}`).text(data['salesman']);
               }
           }
       });
   })
   
});
