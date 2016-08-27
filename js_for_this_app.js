$(document).ready(function(){

	$("#get_words").click(function(){
		$.ajax({

		  type: 'POST',

		  url: 'get_words_form.php',

		  data: "word=" + encodeURIComponent($("#word").val()),

		  success: function(data){

	  		$("#text").val(data);
	  		var ta = $('#text'),
	   			text1 = ta.val(),
			    lines = text1.split(/\n/),
			    count1 = lines.length;
	  		document.getElementById('count').innerHTML = 'Количество форм слов: ' + count1;
	    
		  }

		});


	});
});