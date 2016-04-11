$(function () {
	var num = 0;
	$('.questions_num li').each(function (index) {
		$(this).addClass('right');
		$(this).attr('index',index);
	});
	$('.questions_num li').each(function (index) {
		$(this).on('click', function () {
			num = parseInt($(this).attr('index'),10);
			$('.title-number').html(num + 1);
			requestData('exam_question.json',showQuestion);
			requestData('exam_grade.json',showAnswer);
		});
	});
	function showQuestion(data) {
		// console.log(JSON.stringify(data));
		$('.title-content')[0].innerHTML = data.titles[num].title;
		$('.questions_item li')[0].innerHTML = data.A[num].A;
		$('.questions_item li')[1].innerHTML = data.B[num].B;
		$('.questions_item li')[2].innerHTML = data.C[num].C;
		$('.questions_item li')[3].innerHTML = data.D[num].D;
	}
	function showAnswer(data) {
		$('.right_answer').html('正确答案：' + data.right_answer[num]);
		$('.student_answer').html('你的答案：' + data.student_answer[num])
		if (data.student_answer[num] === '') {
			$('.student_answer').html('你的答案：空');
		}
		$('.analysis_content').html(data.analysis[num]);
		if (data.analysis[num] === '') {
			$('.analysis_content').html('本题没有解析');
		}
		// 正确或错误提示
		if (data.right_answer[num] === data.student_answer[num]) {
			$('.right_or_wrong').html('（正确）');
			$('.right_or_wrong').removeClass('answer_error').addClass('answer_right');
		}
		else {
			$('.right_or_wrong').html('（错误）');
			$('.right_or_wrong').removeClass('answer_right').addClass('answer_error');
		}
		// console.log(data.error_question.length);
		var error_number;
		for (var i = 0; i < data.error_question.length; i ++) {
			data.error_question[i] = error_number;
			// $(data.error_question[i]).addClass('error_question_num');
		}
		$('.questions_num li').each(function (index) {
			if (data.error_question[i] === index) {
			}
		});
	}

	function requestData(url,showDataFn) {
		$.ajax({
			type: 'get',
			url: url,
			dataType: 'json',
			success: function (data) {
			// console.log(JSON.stringify(data));
			showDataFn(data);
			},
			error: function () {
				alert('连接好像失败了！');
			}
		});
	}
	requestData('exam_question.json',showQuestion);
	requestData('exam_grade.json',showAnswer);
	
});