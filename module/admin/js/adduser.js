$(document).ready(function () {
	$('#btn_submit').click(function () {
		if ($('#username').val() === '' || $('#password').val() === '') {
			alert("标题和答案不能为空!");
			}
		else {
			$.ajax({
				type: 'POST',
				url: 'handle/adduser.handle.php',
				dataType: 'json',
				data: {
					username: $('#username').val(),
					password: $('#password').val(),
					name: $('#name').val(),
					academy: $('#academy').val(),
					subject: $('#subject').val()
				},
				success: function (data) {
					if (data.success) {
						$('#info').html(data.message);
						$('#info').css('color','green');
						}
					else {
						$('#info').html(data.message);
						$('#info').css('color','red');
						}
				}
			});
		}
	});
	
	$('#btn_reset').click(function () {
			$('#username').val('');
			$('#password').val('');
			$('#name').val('');
			$('#academy').val('');
			$('#subject').val('');
			$('#info').html('');
		})
		
		
		
		
		
})