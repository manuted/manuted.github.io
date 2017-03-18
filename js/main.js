jQuery( document ).ready(function() {
	function plus(){
		var count = Number($('.count').text());
		count++;
		$('.count').text(count);
	}
	function minus(){
		var count = Number($('.count').text());
		if(count > 1){
			count--;
		}
		$('.count').text(count);
	}
	
	function buy(){
		var count = Number($('.count').text());
		var is_js = 1;
		$.ajax({
		  type: "POST",
		  url: "add_to_cart.php",
		  data: {
			count: count,
			js: is_js
		  },
		  success: function(msg){
			$('.message').text(msg);
			$('.message').addClass('active');
			 setTimeout(function () {
                $('.message').removeClass('active');
            }, 3000)
		    //alert( "Прибыли данные: " + msg );
		  }
		});
	}
	
	$('.plus_wrapper').click(plus);
	$('.minus_wrapper').click(minus);
	$('.button_buy').click(buy);
})