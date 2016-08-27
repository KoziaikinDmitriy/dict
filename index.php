<!DOCTYPE html>
<html>	
	<head>
		<style type="text/css">
			html, body {height: 100%; margin: 0px; padding-top: 0px; }
		    .page {min-height: 70%; margin-top: 0px; margin-bottom: -10px; height: auto !important; }
		    .footer {height: 0px; margin-bottom: 0px; font-family: fantasy !important;	}
	    </style>
			<link rel="stylesheet" 
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
			integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
			crossorigin="anonymous">
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
			<script type="text/javascript" src="js_for_this_app.js"></script>

		<title>Словоформы</title>
	</head>
	<body>	
		<div id="header" class="page-header text-center well"
						style="text-color: white !important;margin-top: -20px !important; 
						background-color:  #7166F5 !important;">
			<h1 style="color: white !important; font-family: fantasy !important;font-weight: bold; font-style: italic;"></h1>
		</div>
		<div class="container page">
			<div class="row">
					<div class="col-md-7">
						<div class="form-inline">
  							<input type='text' style = 'width: 70%;' id='word' class="form-control" placeholder="Введите слово и нажмите кнопку">
							<input type='btn' id = 'get_words' class='btn btn-info' value="Получить словоформы">

							<label>В форму необходимо ввести одно слово на русском языке</label>

						</div>
					</div>
							
					<div class = "col-md-5">
						<label id='count'></label>
						<textarea id="text" class="form-control highlight" rows="25"></textarea>
					</div>
			</div>
		</div>
	</body>

</html>





