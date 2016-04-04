$(function () {
	var register = document.querySelector('#register');
	var reset = document.querySelector('#reset');
	var formItems = $('.form-group input');

    // 空值提交控制变量
	var isNull = true;

	// 错误信息提交控制变量
	var isUsernameError = true;
	var isEmailError = true;
	var isPasswordError = true;
	var isPasswordAgainError = true;

	var isNameError = false;
	var isStudent_numberError = false;

    // 表单提示样式
	function formVerify_right(element,message) {
		element.parent().parent().find('.tips').html(message);
		element.parent().parent().find('.tips').removeClass('tips-error');
		element.parent().parent().find('.tips').addClass('tips-right');
	};

	function formVerify_error(element,message) {
		element.parent().parent().find('.tips').html(message);
		element.parent().parent().find('.tips').removeClass('tips-right');
		element.parent().parent().find('.tips').addClass('tips-error');
	};

	// 表单正则验证
	function formVerifyReg(Reg,controlVariable,formObj) {
		if (Reg.test(formObj.val())) {
			formVerify_right(formObj,'✔ 输入正确！');
			controlVariable = false;
		}
		else {
			controlVariable = true;
		}
	}

	// 用户名验证
	$('#username').on('blur', function () {
		var _this = $(this);
		if (_this.val() === '') {
			formVerify_error(_this,'✘ 用户名不能为空！');
		}
		else {
			isNull = false;
			var usernameReg = /^[a-zA-Z0-9_]{3,16}$/;
			if (usernameReg.test(_this.val())) {
				// 数据库验证是否重复
				$.ajax({
					type: 'POST',
					data: {
						verify_username: $(this).val()
					},
					url: 'handle/form_verify.php',
					dataType: 'json',
					success: function (data) {
						if (data.success) {
							// alert('hello');
							formVerify_right(_this,data.message);
							isUsernameError = false;
						}
						else {
							formVerify_error(_this,data.message);
							isUsernameError = true;
						}
					},
					error: function () {
						_this.parent().parent().find('.tips').html('无法连接到服务器');
					}
				});
			}
			else {
				formVerify_error(_this,'✘ 用户名格式不合法！');
			}		
		}
	});

	// 密码验证
	$('#password').on('blur', function () {
		var _this = $(this);
		var passwordReg = /^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/;

		if ($(this).val() === '') {
			formVerify_error(_this,'✘ 密码不能为空！');
		}
		else {
			isNull = false;
			var passwordReg = /^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/;
			if (passwordReg.test(_this.val())) {
				formVerify_right(_this,'✔ 输入正确！');
				isPasswordError = false;
			}
			else {
				formVerify_error(_this,'✘ 密码格式不合法！');
				isPasswordError = true;
			}
		}
	});

	// 密码对比验证
	$('#password_again').on('blur', function () {
		var _this = $(this);
		if ($(this).val() === '') {
			formVerify_error($(this),'✘ 密码不能为空！');
		}
		else {
			isNull = false;
			var passwordVal = $('#password').val();
			var passwordVal_Again = _this.val();
			if (passwordVal !== passwordVal_Again) {
				formVerify_error(_this,'✘ 密码不一致！');
				isPasswordAgainError = true;
			}
			else {
				formVerify_right(_this,'✔ 两次输入密码一致！');
				isPasswordAgainError = false;
			}
		}
	});

	// 邮件验证
	$('#email').on('blur', function () {
		var _this = $(this);
		if (_this.val() === '') {
			formVerify_error(_this,'✘ 邮件不能为空！');
		}
		else {
			isNull = false;
			var re = /^\w+@[a-z0-9]+\.+[a-z]+$/i;  //Email Verify
			if (re.test($('#email').val())) {
				$.ajax({
					type: 'POST',
					data: {
						email: _this.val()
					},
					url: 'handle/email_verify.php',
					dataType: 'json',
					success: function (data) {
						if (data.success) {
							formVerify_right(_this,data.message);
							isEmailError = false;
						}
						else {
							formVerify_error(_this,data.message);
							isEmailError = true;
						}
					},
					error: function () {
						_this.parent().parent().find('.tips').html('无法连接到服务器');
					}
				});
			}
			else {
				formVerify_error(_this,'✘ 邮件格式不合法！');
			}
		}
		
	});

	// 姓名验证
	$('#name').on('blur', function () {
		var _this = $(this);
		var nameReg = /^([\u4e00-\u9fa5]){2,7}$/;
		if (_this.val() !== '') {
			if (nameReg.test(_this.val())) {
				formVerify_right(_this,'✔ 输入正确！');
				isNameError = false;
			}
			else {
				formVerify_error(_this,'✘ 姓名格式不合法！');
				isNameError = true;
			}
		}
		else {
			isNameError = false;
			_this.parent().parent().find('.tips').html('');
		}
	});

	// 学号验证
	$('#student_number').on('blur', function () {
		var _this = $(this);
		var nameReg = /^.{10}$/;
		if (_this.val() !== '') {
			if (nameReg.test(_this.val())) {
				formVerify_right(_this,'✔ 输入正确！');
				isStudent_numberError = false;
			}
			else {
				formVerify_error(_this,'✘ 学号格式不合法！');
				isStudent_numberError = true;
			}
		}
		else {
			isStudent_numberError = false;
			_this.parent().parent().find('.tips').html('');
		}
	});

	// 用外部变量控制表单提交
	var submitLock = true;

	$(register).on('click', function () {
		var dataForm = {
			username: $('#username').val(),
			password: $('#password').val(),
			password_again: $('#password_again').val(),
			name: $('#name').val(),
			email: $('#email').val(),
			student_number: $('#student_number').val(),
			major: $('#major').val()
		};
		var dataJson = JSON.stringify(dataForm);

		// 提交错误提醒
		if (($('.register-read')[0].checked === true) && isNull === true) {
			alert('您有必填项目尚未填写！');
		}
		else {
			if ($('.register-read')[0].checked === true) {
				if (isUsernameError === true) {
					alert('您的用户名填写错误！');
				}
				else if (isPasswordError === true) {
					alert('您的密码填写错误！');
				}
				else if (isPasswordAgainError === true) {
					alert('两次输入密码不一致！');
				}
				else if (isEmailError === true) {
					alert('您的电子邮件填写错误！');
				}
				else if (isNameError === true) {
					alert('您的姓名填写错误！');
				}
				else if (isStudent_numberError === true) {
					alert('您的学号填写错误！')
				}
			}	
		}

		// 表单提交
		if (($('.register-read')[0].checked === true) && submitLock === true && isNull === false && isUsernameError === false && isEmailError === false && isPasswordError === false && isPasswordAgainError === false && isNameError === false && isStudent_numberError === false) {
			// console.log(typeof dataJson);
			$.ajax({
				type: 'POST',
				data: {
					data: dataJson
				},
				url: 'handle/register.handle.php',
				dataType: 'json',
				success: function (data) {
					if (data.success) {
						alert(data.message + ', 点击确定将跳转至登录页面!');
						window.location.href = '../../index.php'
					}
					console.log(data.message);
				},
				error: function (data) {
					console.log(data.message);
				}
			});
		}

		// 更改表单后可以重新提交
		formItems.on('blur', function () {
			submitLock = true;
		});

		$('#major, .register-read').on('click', function () {
			submitLock = true;
		});
		
		submitLock = false;
	});

	// 重置按钮
	$('#reset').on('click', function () {
		formItems.each(function () {
			$(this).val('');
			$(this).parent().parent().find('.tips').html('');
		});
	});

});