$(document).ready(function() {
	$(".btn-favorites").click(function(event) {
		$.ajax({
			// url: '/wp-admin/admin-ajax.php',
			url: dvfavorites.url,
			type: 'POST',
			data: {
				security: dvfavorites.nonce,
				post_id: dvfavorites.post_id,
				action: 'dv_favorites_test'
			},
			beforeSend: function(){
				$(".btn-favorites").fadeOut(300, function(){
					$(".dv-favorites-hidden").fadeIn();
				});
			},
			success: function(res){
				console.log(res);
				$(".dv-favorites-hidden").fadeOut(300);
				$("#favorites").html(res);
			},
			error: function() {
				alert("Ошибка");
			}
		})

		event.preventDefault();
	});
});