$(document).ready(function () {
	$('#btn_submit').click(function () {
		if ($('#js-input_title').val() === '' || $('#js-input_answer').val() === '') {
			alert("标题和答案不能为空!");
			}
		else {
			$.ajax({
				type: 'POST',
				url: 'handle/testinput.handle.php',
				dataType: 'json',
				data: {
					title: $('#js-input_title').val(),
					A: $('#js-input_a').val(),
					B: $('#js-input_b').val(),
					C: $('#js-input_c').val(),
					D: $('#js-input_d').val(),
					answer: $('#js-input_answer').val(),
					analysis: $('#js-input_analysis').val()
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
			$('#js-input_title').val('');
			$('#js-input_a').val('');
			$('#js-input_b').val('');
			$('#js-input_c').val('');
			$('#js-input_d').val('');
			$('#js-input_answer').val('');
			$('#js-input_analysis').val('');
			$('#info').html('');
		})
		
		
		
		
		
})