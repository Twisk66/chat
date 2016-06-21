function getMessages(){
	var list = $('.chat-text');
	var text = '';
	$.getJSON('index.php/ajax/data', function(data){
		if(date_out == '1')
		{
			$.each(data, function(i){
				text = '<p><b>' + data[i].username + ':</b>[ ' + data[i].time + ' ] <span style="color: #'+ data[i].color +'">' + data[i].text + '</span></p>' + text;
			});
		}
		else
		{
			$.each(data, function(i){
				text = '<p><b>' + data[i].username + ':</b> <span style="color: #'+ data[i].color +'">' + data[i].text + '</span></p>' + text;
			});
		}
		list.html(text);
		list.scrollTop(list[0].scrollHeight);
		setTimeout(getMessages, 5000);
	});
}
$(function(){
	var textarea = $('textarea[name="Messages[text]"]');
	getMessages();
	$('input[type="submit"]').click(function(e){
		e.preventDefault();
		$.post('index.php/ajax/addmessage',{message: textarea.val()})
			.done(function(data){
				getMessages();
				textarea.val('');
				$('p.error').html('');
				if(data!=''){
					$('p.error').html(data);
				}
			});
	});
});