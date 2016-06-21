$(function(){
	if(window.location.pathname == '/index.php/imp/show')//костыль
	{
		window.location.replace('/index.php/imp/show/');
	}
	if(window.location.pathname == '/imp/show')
	{
		window.location.replace('/imp/show/');
	}

	$('img').click(
		function(){
			if($(this).hasClass('active')){
				$(this).removeClass('active')
			}
			else {
				$(this).siblings().removeClass('active');
				$(this).addClass('active');				
			}

			var id = '';
			for (var i = 1; i <= 15; i++) {
				if ($('.lvl:nth-of-type('+i+') img').hasClass('active')) {
					for (var j = 1; j <= 3; j++) {
						if($('.lvl:nth-of-type('+i+') img:nth-of-type('+j+')').hasClass('active')) {
							id = id + j;
							j = 4;
						}
					};	
				}
				else {
					id = id + 0;
				}
			};
			window.location.replace(id);
		}).hover(function(){
			$(this).mousemove(moveTip);
			var text = $(this).attr('alt');
			toolTip(text);
		}, function(){
			toolTip('');
		});
});