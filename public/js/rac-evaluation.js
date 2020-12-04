// layui.extend({
//     qiniuyun: 'extend/qiniuyun/index',
// })
// layui.use(['jquery', 'form', 'layer', 'upload', 'qiniuyun', 'element', 'layer'], function () {
layui.use(['jquery', 'form', 'layer', 'upload', 'element', 'layer'], function () {
			var $ = layui.$,
				layer = layui.layer,
				element = layui.element,
				upload = layui.upload,
				form = layui.form,
				// qiniuyun = layui.qiniuyun,
				layer = layui.layer;
			var uploadUrl = '';
			$.ajax({
                url:'https://crm.racstudio.org/rac_gettoken',
				success:function(res){
                    // qiniuyun.loader({
                    //     domain: res.data.domain              // 后台设置的域名项
                    //     , elem: "#upload"          // 绑定的element
                    //     , token: res.data.uploadToken              // 授权token
                    //     , retryCount: 6                  // 重连次数，默认6(可选)
                    //     , region: qiniu.region.z2        // 选择上传域名区域，默认自动分析(可选)
                    //     , next: function (response) {
                    //         element.progress('video-progress', response.total.percent + '%');       // 进度条
                    //     }
                    //     , complete: function (res) {
                    //         // layer.closeAll('loading'); // 关闭loading关闭
                    //         layer.msg("上传成功！");
                    //         console.log(res)
                    //         uploadUrl = res.key;
                    //     }
                    // })
                }
			})

			$('body').on('click','*[lay-event]',function(){
				var event = $(this).attr('lay-event');
				if(event == 'shrink'){
					var block = $('.mobile').css('display');
					if(block == 'none'){
        $('.mobile').fadeIn();
						$('.inner-header-icon').addClass("inner-header-icon-click").removeClass('inner-header-icon-out')
					}else{
        $('.mobile').hide();
						$('.inner-header-icon').removeClass("inner-header-icon-click").addClass('inner-header-icon-out')
					}
				}else if(event == 'hide'){
        $('.mobile').hide();
					return false
				}
			})
			form.on('select(xueli)', function(data){
			  var obj = {};
			  obj[0] = ['建筑','景观','城设Urban Design','室内','城规Planning','MDes','人机交互HCI','界面设计/用户体验设计UI/UX','数字媒体设计 Digital Media Design','工业设计','服务设计','其他专业']
			  obj[1] = ['建筑本科','室内本科','景观本科','工业设计本科','其他本科专业']
			  obj[2] = ['建筑','景观','城设Urban Design','室内','城规Planning']
			  console.log(obj[data.value])
			  if(obj[data.value].length>0){
				  var html = '<option value="">请选择</option>'
				  layui.each(obj[data.value],function(index,item){
                        html += '<option value=' + item + '>' + item + '</option>'
                    })
				  $('select[name=des_degree]').html(html);
				  form.render('select')
			  }
			});
			//监听提交
			form.on('submit(formDemo)', function(data){
				var d = data.field;
				if(!d.region){
					var top = $('#region').offset().top;
					$(document).scrollTop(top - 50)
					layer.msg('请选择意向校区！');
					return
				}
				if(!d.needagentpaper){
                    layer.msg('请选择中介文书！');
					var top = $('#needagentpaper').offset().top;
					$(document).scrollTop(top - 50)
					return
				}
				if(
					d.des_country0 == 'on' || d.des_country1 == 'on' || d.des_country2 == 'on' ||
					d.des_country3 == 'on' || d.des_country4 == 'on' || d.des_country5 == 'on' ||
					d.des_country6 == 'on' || d.des_country7 == 'on' || d.des_country8 == 'on' ||
					d.des_country9 == 'on'
				){
        d.des_country = '';
					if(d.des_country0 == 'on'){d.des_country += '美国,'}
					if(d.des_country1 == 'on'){d.des_country += '加拿大,'}
					if(d.des_country2 == 'on'){d.des_country += '欧洲,'}
					if(d.des_country3 == 'on'){d.des_country += '英国,'}
					if(d.des_country4 == 'on'){d.des_country += '澳洲,'}
					if(d.des_country5 == 'on'){d.des_country += '日本,'}
					if(d.des_country6 == 'on'){d.des_country += '德国,'}
					if(d.des_country7 == 'on'){d.des_country += '香港,'}
					if(d.des_country8 == 'on'){d.des_country += '新加坡,'}
					if(d.des_country9 == 'on'){d.des_country += 'Other'}
					if(!d.des_country){
        layer.msg('请选择国家地区！');
						var top = $('#des_country').offset().top;
						$(document).scrollTop(top - 50)
						return
					}else{
						var reg=/,$/gi;
						d.des_country = d.des_country.replace(reg,"");
					}
				}else{
        layer.msg('请选择国家地区！');
					var top = $('#des_country').offset().top;
					$(document).scrollTop(top - 50)
					return
				}
				if(!d.des_degree){
                    layer.msg("请选择准备申请的学历！");
					var top = $('#des_degree').offset().top;
					$(document).scrollTop(top - 50)
					return;
				}
				if(
					d.des_major0 == 'on' || d.des_major4 == 'on' || d.des_major8 == 'on' ||
					d.des_major1 == 'on' || d.des_major5 == 'on' || d.des_major9 == 'on' ||
					d.des_major2 == 'on' || d.des_major6 == 'on' || d.des_major10 == 'on' ||
					d.des_major3 == 'on' || d.des_major7 == 'on' || d.des_major11 == 'on'
				){
                    d.des_major = '';
					if(d.des_major0 == 'on'){d.des_major += '建筑,'}
					if(d.des_major1 == 'on'){d.des_major += '景观,'}
					if(d.des_major2 == 'on'){d.des_major += '城设Urban Design,'}
					if(d.des_major3 == 'on'){d.des_major += '室内,'}
					if(d.des_major4 == 'on'){d.des_major += '城规Planning,'}
					if(d.des_major5 == 'on'){d.des_major += 'MDes,'}
					if(d.des_major6 == 'on'){d.des_major += '工业设计,'}
					if(d.des_major7 == 'on'){d.des_major += '服务设计,'}
					if(d.des_major8 == 'on'){d.des_major += '其他专业,'}
					if(d.des_major9 == 'on'){d.des_major += '人机交互HCI'}
					if(d.des_major10 == 'on'){d.des_major += '界面设计/用户体验设计UI/UX'}
					if(d.des_major11 == 'on'){d.des_major += '数字媒体设计 Digital Media Design'}
					if(d.des_major){
						var reg=/,$/gi;
						d.des_major = d.des_major.replace(reg,"");
					}else{
                        layer.msg('请选择要申请的专业！');
						var top = $('#des_major').offset().top;
						$(document).scrollTop(top - 50)
						return
					}
				}else{
                    layer.msg('请选择要申请的专业！');
					var top = $('#des_major').offset().top;
					$(document).scrollTop(top - 50)
					return
				}
				if(!d.des_year){
                    layer.msg('请选择申请入学年份!');
					var top = $('#des_year').offset().top;
					$(document).scrollTop(top - 50)
					return;
				}
				if(!d.realname){
                    layer.msg('请输入姓名!');
					var top = $('#realname').offset().top;
					$(document).scrollTop(top - 50)
					return;
				}
				if(!d.wxid){
                    layer.msg('请输入微信!');
					var top = $('#wxid').offset().top;
					$(document).scrollTop(top - 50)
					return;
				}
				if(!d.phone){
                    layer.msg('请输入手机号码!');
					var top = $('#phone').offset().top;
					$(document).scrollTop(top - 50)
					return;
				}
				if(!d.cur_school || !d.cur_school_name){
                    layer.msg('请选择/输入在读/毕业院校!');
					var top = $('#cur_school').offset().top;
					$(document).scrollTop(top - 50)
					return
				}
				if(!d.cur_major){
                    layer.msg('请选择在读专业!');
					var top = $('#cur_major').offset().top;
					$(document).scrollTop(top - 50)
					return;
				}
				if(!d.cur_score){
                    layer.msg('请输入加权均分!');
					var top = $('#cur_score').offset().top;
					$(document).scrollTop(top - 50)
					return;
				}
				if(!d.lang){
                    layer.msg('请选择语言成绩!');
                        var top = $('#lang').offset().top;
                        $(document).scrollTop(top - 50)
                        return;
                }
				if(!d.cur_languagescore){
                    layer.msg('请输入语言成绩!');
                        var top = $('#cur_languagescore').offset().top;
                        $(document).scrollTop(top - 50)
                        return;
                }
				if(
					d.cur_channel0 == 'on' || d.cur_channel3 == 'on' || d.cur_channel6 == 'on' ||
					d.cur_channel1 == 'on' || d.cur_channel4 == 'on' || d.cur_channel7 == 'on' ||
					d.cur_channel2 == 'on' || d.cur_channel5 == 'on'
				){
                    d.cur_channel = '';
					if(d.cur_channel0 == 'on'){d.cur_channel += '学长学姐推荐,'}
					if(d.cur_channel1 == 'on'){d.cur_channel += '朋友推荐,'}
					if(d.cur_channel2 == 'on'){d.cur_channel += '老师推荐,'}
					if(d.cur_channel3 == 'on'){d.cur_channel += '微信公众号,'}
					if(d.cur_channel4 == 'on'){d.cur_channel += '微博,'}
					if(d.cur_channel5 == 'on'){d.cur_channel += '知乎,'}
					if(d.cur_channel6 == 'on'){d.cur_channel += '百度/谷歌搜索,'}
					if(d.cur_channel7 == 'on'){d.cur_channel += 'Other,'}
					if(d.cur_channel){
						var reg=/,$/gi;
						d.cur_channel = d.cur_channel.replace(reg,"");
					}
				}
				if(!getQueryVariable('u') || !getQueryVariable('c')) return;
				$.ajax({
                    url:'https://crm.racstudio.org/rac_submit',
					type:'post',
					data:{
                            "racuser__id": getQueryVariable('u'),
                            "channel": getQueryVariable('c'),
                            "student":{
                            'region':d.region,
                            'needagentpaper':d.needagentpaper,
                            'des_country':d.des_country,
                            'des_degree':d.des_degree,
                            'des_major':d.des_major,
                            'des_year':d.des_year,
                            'realname':d.realname,
                            'wxid':d.wxid,
                            'phone':d.phone,
                            'email':d.email,
                            'cur_school':d.cur_school+','+d.cur_school_name,
                            'cur_major':d.cur_major,
                            'cur_score':d.cur_score,
                            'cur_languagescore':d.lang+','+d.cur_languagescore,
                            'attachfile_url':uploadUrl,
                            'remark':d.remark,
                            'cur_channel':d.cur_channel,
						},
					},
					success:function(res){
                        layer.msg(res.message, { time: 1500 }, function () {
                            // location.href = location.href;
                            if (res.code == 0 && res.success) {
                                location.href = 'sfail.html?type=success';
                            } else {
                                location.href = 'sfail.html?type=fail';
                            }
                        });
					}
				})
				function getQueryVariable(variable)
				{
                    // var query = window.location.search.substring(1);
                    // var vars = query.split("&");
                    // for (var i=0;i<vars.length; {
                    //     // var pair = vars[i].split("=");
                    //     // if(pair[0] == variable){return pair[1];}
                    // }
                    return(false);
				}


			});

		})