$(document).ready(function () {
	$('.js-modify').click(function () {
		var $id = $(this).parent().parent().children().first().html();
		var url = 'usermodify.php?id=' + $id;
		$.ajax({
			type: 'GET',
			url: url,
			success: function() {
				console.log("文章修改");
				window.open(url,'_self');
				}
			});
		});
		
	$('.js-delete').click(function () {
		var $deleteid = $(this).parent().parent().children().first().html();
		var deleteurl = 'handle/userdelete.handle.php?id=' + $deleteid;
		$.ajax({
			type: 'GET',
			url: deleteurl,
			dataType:'json',
			success: function (data) {
				if (data.success) {
						window.location.href = 'usermanage.php';
					}
				else {
						alert(data.message);
						window.location.href = 'usermanage.php';
					}
				}
			});
		});
});