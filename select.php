<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Cars</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row flex-column">
				<div id="car" class="col-2 mx-auto alert-success my-5"></div>
				<div class="col-6 mx-auto">
					<div id="marks d-inline">
						<select id="mark-select" class="browser-default custom-select">
							<option value="any" selected="selected">Выберите марку</option>
							<option value="1">Toyota</option>
							<option value="2">BMW</option>
							<option value="3">Audi</option>
							<option value="4">Honda</option>
						</select>
					</div>
					
					<div id="models" class="my-4">
						<select id="models-select" class="browser-default custom-select">
							<option value="any" selected="selected">Выберите модель</option>
						</select>	
					</div>
					
					<div id="madeIn">
						<select id="madeIn-select" class="browser-default custom-select">
							<option value="any" selected="selected">Выберите год выпуска</option>
						</select>	
					</div>
				</div>
			</div>
		</div>
		
		
			
	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="ajax.js"></script>	
	</body>
</html>
