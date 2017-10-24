var Login = function() {

    var handleLogin = function() {

        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                },
                remember: {
                    required: false
                }
            },

            messages: {
                username: {
                    required: "Username is required."
                },
                password: {
                    required: "Password is required."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                form.submit(); // form validation success, call ajax form submit
            }
        });

        $('.login-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    $('.login-form').submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });
    }

    var handleForgetPassword = function() {
        $('.forget-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },

            messages: {
                email: {
                    required: "Email is required."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit   

            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.forget-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.forget-form').validate().form()) {
                    $('.forget-form').submit();
                }
                return false;
            }
        });

        jQuery('#forget-password').click(function() {
            jQuery('.login-form').hide();
            jQuery('.forget-form').show();
        });

        jQuery('#back-btn').click(function() {
            jQuery('.login-form').show();
            jQuery('.forget-form').hide();
        });

    }

    var handleRegister = function() {

        function format(state) {
            if (!state.id) { return state.text; }
            var $state = $(
             '<span><img src="../assets/global/img/flags/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
            );
            
            return $state;
        }

        if (jQuery().select2 && $('#country_list').size() > 0) {
            $("#country_list").select2({
	            placeholder: '<i class="fa fa-map-marker"></i>&nbsp;Select a Country',
	            templateResult: format,
                templateSelection: format,
                width: 'auto', 
	            escapeMarkup: function(m) {
	                return m;
	            }
	        });


	        $('#country_list').change(function() {
	            $('.register-form').validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
	        });
    	}

        $('.register-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {

                fullname: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                address: {
                    required: true
                },
                city: {
                    required: true
                },
                country: {
                    required: true
                },

                username: {
                    required: true
                },
                password: {
                    required: true
                },
                rpassword: {
                    equalTo: "#register_password"
                },

                tnc: {
                    required: true
                }
            },

            messages: { // custom messages for radio buttons and checkboxes
                tnc: {
                    required: "Please accept TNC first."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit   

            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
                    error.insertAfter($('#register_tnc_error'));
                } else if (element.closest('.input-icon').size() === 1) {
                    error.insertAfter(element.closest('.input-icon'));
                } else {
                    error.insertAfter(element);
                }
            },

            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.register-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.register-form').validate().form()) {
                    $('.register-form').submit();
                }
                return false;
            }
        });

        jQuery('#register-btn').click(function() {
            jQuery('.login-form').hide();
            jQuery('.register-form').show();
        });

        jQuery('#register-back-btn').click(function() {
            jQuery('.login-form').show();
            jQuery('.register-form').hide();
        });
    }

    return {
        //main function to initiate the module
        init: function() {

            handleLogin();
            handleForgetPassword();
            handleRegister();

        }

    };

}();

jQuery(document).ready(function() {
    Login.init();
	if($.cookie('djs_cookie')!=null && Date.parse(new Date())<$.cookie('djs_cookie')){
		$("#sendSms").attr("disabled", "disabled");
		$("#sendSms").css("background-color", "#b4b2b3");
		sys_second = ($.cookie('djs_cookie')-Date.parse(new Date()))/1000;
		var timer = setInterval(function() {
				if (sys_second > 1) {
					sys_second -= 1;
					var second = Math.floor(sys_second % 60);
					var time_text = '';
					if (second > 0) {
						if (second < 10) {
							second = '0' + second;
						}
						time_text += second + '秒';
					}
					$("#sendSms").val(time_text);
				} else {
					clearInterval(timer);
					$("#sendSms").attr("disabled", false);
					$("#sendSms").val('获取验证码');
					$("#sendSms").css("background-color", "#f67a62");
				}
			},
			1000);
	}
	jQuery('#sendSms').click(function() {
		$.ajax({
			type: 'GET',
			dataType:"json",
			url: "pajax.php?act=sms&phone=" + $("#phone").val(),
			//即上面的接口1
			success: function(res) {
				if (res.msg== 'ok') {
					$("#sendSms").attr("disabled", "disabled");
					$("#sendSms").css("background-color", "#b4b2b3");
					//下面就是实现倒计时的效果代码
					var d = new Date();
					d.setSeconds(d.getSeconds() + 61);
					var m = d.getMonth() + 1;
					var time = d.getFullYear() + '-' + m + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
					var id = "#sendSms";
					var end_time = new Date(Date.parse(time.replace(/-/g, "/"))).getTime();
					$.cookie("djs_cookie", end_time, { path: "/"});
					//月份是实际月份-1
					sys_second = (end_time - new Date().getTime()) / 1000;
					var timer = setInterval(function() {
						if (sys_second > 1) {
							sys_second -= 1;
							var day = Math.floor((sys_second / 3600) / 24);
							var hour = Math.floor((sys_second / 3600) % 24);
							var minute = Math.floor((sys_second / 60) % 60);
							var second = Math.floor(sys_second % 60);
							var time_text = '';
							if (day > 0) {
								time_text += day + '天';
							}
							if (hour > 0) {
								if (hour < 10) {
									hour = '0' + hour;
								}
								time_text += hour + '小时';
							}
							if (minute > 0) {
								if (minute < 10) {
									minute = '0' + minute;
								}
								time_text += minute + '分';
							}
							if (second > 0) {
								if (second < 10) {
									second = '0' + second;
								}
								time_text += second + '秒';
							}
							$(id).val(time_text);
						} else {
							clearInterval(timer);
							$("#sendSms").attr("disabled", false);
							$("#sendSms").val('获取短信验证码');
							$("#sendSms").css("background-color", "#f67a62");
						}
					},
					1000);
				} else {
					alert(res.msg);
				}
			},
			error: function(res,status) {
				alert(status);
			}
		});

	});
	
	jQuery('#submit-btn').click(function() {
		var queryString = $('#postform').serialize();
		$.ajax({
			url:'pajax.php',
			type:'POST',
			dataType:"json",
			data:queryString,
			success: function(res) {
				if (res.msg== 'ok') {
					jQuery('#yzmdiv').hide();
					jQuery('#smsdiv').show();					
					jQuery('#phone').attr("disabled","disabled"); ;					
				} else {
					alert(res.msg);
				}
			},
			error: function(res,status) {
				alert(status);
			}
		});
	});
});