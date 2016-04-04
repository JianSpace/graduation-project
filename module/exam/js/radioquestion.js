$(function () {
	// 答案选项
	var items = document.querySelectorAll('.questions label');
	var radio = document.querySelectorAll('.questions label input');
	// 答题卡题目
	var answersheetItems = document.querySelectorAll('.answersheet-items li');
	// 定时器
	var counter = document.querySelector('.counter');
	// 下一题和提交按钮
	var btnSubmit = document.querySelector('.submit');
	var btnNextItem = document.querySelector('.nextitem');
	// 样式控制相关
	var answerSheet = document.querySelector('.answersheet-items');
	var answerSheetTitle = document.querySelector('.answersheet .title');
	var hint = document.querySelector('.hint');
	var progressPercent = document.querySelector('.progress-percent');
	// 折叠控制变量
	var fold = false;
	// 当前题目的Index
	var num = 0;
	// 用户提交的答案数据
	var saveSelectedData = [];
	// 题目是否作答标记
	var isAnswered = [];


	// 倒计时
	(function counter(exam_time) {
		var timer=null; 
		var t = exam_time*60;
		exam_counter=fnTwo(Math.floor(t%86400/3600))+':'+fnTwo(Math.floor(t%86400%3600/60))+':'+fnTwo(Math.floor(t%60));
		$('.counter').html(exam_counter);
		timer=setInterval(function(){
			t--;
			str=fnTwo(Math.floor(t%86400/3600))+':'+fnTwo(Math.floor(t%86400%3600/60))+':'+fnTwo(Math.floor(t%60));
			$('.counter').html(str);
			if (t <= 0) {
				clearInterval(timer);
				alert('考试时间到！');
			}
		},1000);
	}(120));

	// 展开收起答题卡函数
	answerSheetTitle.addEventListener('click',function () {
		if (fold === false) {
			answerSheet.style.display = 'none';
			this.innerHTML = '展开答题卡<span class="caret"></span>';
			// this.style.backgroundImage = 'url(../img/ico-down.png)';
			this.style.color = 'black';
			fold = true;
		}
		else {
			answerSheet.style.display = 'block';
			this.innerHTML = '收起答题卡<span class="dropup"><span class="caret"></span></span>';
			// this.style.backgroundImage = 'url(../img/ico-up.png)';
			this.style.color = 'gray';
			fold = false;
		}
	});
	
	// 划过答题卡title时改变颜色
	answerSheetTitle.addEventListener('mouseover', function () {
		if (fold === true) {
			this.style.color = '#337AB7';	
		}
	});
	
	answerSheetTitle.addEventListener('mouseout', function () {
		if (fold === true) {
			this.style.color = 'black';
		}
	});

	// 答案的样式改变
	function restoreStyle() {
		for (var i = 0; i < len; i++) {
			items[i].style.borderColor = '#CACACA';
			items[i].style.backgroundColor = 'white';
			items[i].style.color = 'black';
		}
	}

	for (var i = 0,len = items.length; i < len; i++) {
		items[i].addEventListener('click',function () {
			restoreStyle();
			this.style.borderColor = '#2B80FF';
			this.style.backgroundColor = '#F0F0F0';
			this.style.color = '#2B80FF';
		});
	}
	

	// 更改样式
	function styleChange() {
		btnSubmit.style.visibility = 'visible';
		btnNextItem.innerHTML = '下一题';
		btnNextItem.style.paddingLeft = '20px';
		btnNextItem.style.paddingRight = '20px';
		for (var i = 0,len = answersheetItems.length; i < len; i++) {
			answersheetItems[i].className = '';
		}
		num++;
		if (num >= 19) {
			num = 19;
		}
		if (num === 19) {
			btnSubmit.style.visibility = 'hidden';
			btnNextItem.innerHTML = '交卷 ';
			btnNextItem.style.paddingLeft = '27px';
			btnNextItem.style.paddingRight = '27px';
			$('.progress-percent').css('borderRadius','5px')
		}

		progressPercent.style.width = ((num + 1) * 5) + '%';
		hint.innerHTML = num + 1 + '/20' + '<span class="triangle"></span>';
		answersheetItems[num].className = 'on';
	}

	// 数据请求
	function requestData() {
		$.ajax({
			type: "GET",
			dataType: "JSON",
			url: "exam_question.json",
			success: function (data) {
				showData(data);
			},
			error: function () {
				console.log('连接失败');
			}
		});
	};

	// 从json中读取数据显示到对应位置
	function showData(data) {
		$('.questions .title').html(num + 1 + '. ' +　data.titles[num].title);
		$('.questions label span:first').html(' ' +　data.A[num].A);
		$($('.questions label span')[1]).html(' ' +　data.B[num].B);
		$($('.questions label span')[2]).html(' ' +　data.C[num].C);
		$($('.questions label span')[3]).html(' ' +　data.D[num].D);
	}

	// 答题卡控制
	for (var j = 0; j < answersheetItems.length; j++) {
			answersheetItems[j].index = j;
		}

	for (var k = 0; k < answersheetItems.length; k++) {
			answersheetItems[k].addEventListener('click', function () {

				// 答题后将已回答的题目标记出来
				if (isAnswered[num] === true) {
					answersheetItems[num].style.color = '#337AB7';
				}

				num = this.index - 1;

				styleChange();
				requestData();
				restoreStyle();

				// 点击题目时返回已回答的题目样式
				var item_transform = {"A":"0","B":"1","C":'2',"D":'3','':''};
				var item_num = item_transform[saveSelectedData[num]];

					// 清空所有样式
				if (item_num === '') {
					restoreStyle();
					for (var i = 0; i < len; i++) {
						radio[i].checked = false;
					}
				}
					// 恢复已回答的题目样式
				else {
					items[item_num].style.borderColor = '#2B80FF';
					items[item_num].style.backgroundColor = '#F0F0F0';
					items[item_num].style.color = '#2B80FF';

					radio[item_num].checked = true;
				}
			});

			// 鼠标划过答题卡题目时改变文字颜色
			var item_color = '';
			answersheetItems[k].addEventListener('mouseover', function () {
				item_color = this.style.color;
				this.style.color = 'white';
			});
			answersheetItems[k].addEventListener('mouseout', function () {
				this.style.color = item_color;
			});
		}
	
	// 下一题按钮函数
	btnNextItem.addEventListener('click', function () {
		styleChange();
		requestData();

		restoreStyle();
		for (var i = 0; i < len; i++) {
			radio[i].checked = false;
		}
		// 答题后将已回答的题目标记出来
		if (isAnswered[num - 1] === true) {
			answersheetItems[num - 1].style.color = '#337AB7';
		}
	},false);

	// 保存答案数据
	(function saveSelected() {
		for (var i = 0; i < len; i++) {
			radio[i].addEventListener('click', function () {
				saveSelectedData[num] = this.value;
				isAnswered[num] = true;
				console.log(saveSelectedData);
				console.log(isAnswered);
			});
		}
		for (var j = 0; j < 20; j++) {
			saveSelectedData[j] = '';
			isAnswered[j] = false;
		}
	}());

	btnNextItem.addEventListener('click', function () {
		if (num === 19) {
			$.ajax({
				type: 'POST',
				url: 'handle/exam.grade.handle.php',
				data: {
					student_answer: saveSelectedData
				},
				success: function (data) {
					window.location.href = '../exam/grade.php';
						// console.log(JSON.stringify(data));						
					},
				error: function () {
					alert('连接好像失败了！');
				}
				});
		}
	});


	requestData();
	
});