$(document).ready(function () {
	$('#submit').click(function () {
		//alert($('#teacher')[0].checked);
		var username = $('#username').val();
		if ($('#teacher')[0].checked) {    //原生方法
			$.ajax({
				type: 'POST',
				url: 'module/admin/handle/login.handle.php',
				dataType: 'json',
				data: {
					username: username,
					password: $('#password').val()
					},
				success: function (data) {
					if (data.success) {
					    //alert(data.msg);
						window.location.href = 'module/admin/admin.php';
					    }
					else {
						alert(data.msg);
						}
				    }
			});
		}
		else if ($('#student')[0].checked) {
			// alert("功能尚未开通！");
			$.ajax({
				type: 'POST',
				url: 'module/exam/handle/login.handle.php',
				dataType: 'json',
				data: {
					username: username,
					password: $('#password').val()
				},
				success: function (data) {
					if (data.success) {
						window.location.href = 'module/exam/index.php';
					}
					else {
						alert(data.msg);
					}
				},
				error: function () {
					alert('服务器连接失败！');
				}
			});
		}
	});
	$('#register').on('click', function () {
		window.location.href = 'module/register/register.php';
	});
});