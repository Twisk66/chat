function getMessages(){
	$.getJSON('index.php/ajax/data', function(data){
		var items = '';
		$.each(data, function(i){
			items = items + '<p><b>' + data[i].username + ':</b>' + data[i].text + '</p>';
		});
		$('.chat-text').html(items);
		setTimeout(getMessages, 5000);
	});
}
$(function(){
	var textarea = $('textarea[name="message"]');
	getMessages();
	$('button').click(function(e){
		e.preventDefault();
		$.post('index.php/ajax/addmessage',{message: textarea.val()},function(){
			getMessages();
			textarea.val('');
		});
	});
});