<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Kalkulator ubezpieczenia</title>
		<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content= "width=device-width, initial-scale=1.0"/>
      	<script src="js/script.js"></script>
      	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<center>
			<h1>Kalkulator składki ubezpieczeniowej</h1><hr>
			<div id="kalkulator">
				<p>Jeśli nastąpiła szkoda proszę zaznaczyć opcję Szkoda</p>
				<div class="checkbox">
    						<label><input type="checkbox" value="" id="szkoda">Szkoda</label>
  					</div>
  					<p>Jeśli płatność ma być rozłożona na raty proszę zaznaczyć opcję Raty</p>
			   <div class="checkbox">
			   		<label><input type="checkbox" value="" id="raty">Raty</label>
			  	</div>
				<p>Wprowadź sumę ubezpieczenia</p>
				<form>
					<div class="form-group">
						<label for="sumaUbezp">Suma ubezpieczenia:</label> 
						<input type="number" min="100" max="10000" value="" id="sumaUbezp">&nbsp;PLN&nbsp;
						<button type="button" class="btn btn-primary" id = "button" onclick="oblicz()">OBLICZ</button>
					</div>
				</form>
				<br>
				<p>Dla wprowadzonej kwoty składka ubezpieczenia wyniesie:</p>
				<h4 id="result">
					&nbsp;
				</h4>
			</div>
		</center>
	</body>
</html>