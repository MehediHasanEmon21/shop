$(document).ready(function(){


	$(document).on('click','.product_fav',function(){
    var icon_class = $(this);
		var product_id = $(this).data('id');
    var auth_id = $(this).data('auth-id');
              if(product_id) {
                 $.ajax({
                     url: '/api/add/wishlist',
                     type:"POST",
                     dataType:"json",
                     data: {
                     	product_id: product_id,
                      auth_id: auth_id,
                     },
                     success:function(data) {
                       const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            $(icon_class).addClass('active');
                            $('#wishlist_count').text(data.wishlist_count);
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }

                     },
                    
                 });
             } else {
                 alert('danger');
             }
		

	})


  $(document).on('click','.addCart',function(){

      var element = $(this);
      var product_id = element.data('id');

      if (product_id) {

        $.ajax({

            url: '/api/cart/add',
            method: 'POST',
            data: {
              product_id: product_id
            },
            success:function(data){

              const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                  })
              if (data.success) {

                $('#cart_total').html(`<span>${data.cart_total}</span>`)

                Toast.fire({
                    type: 'success',
                    title: data.success
                  })

              }
              

            }

        })
      }

  })


})


