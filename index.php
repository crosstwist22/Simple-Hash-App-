<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hash Algorithm</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.input-hash{
			width: 750px;
			margin: 0 auto;
		}
		.bordered > tbody > tr > td{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="center thin">Hash App</h1>

		<div class="input-hash">
			<div class="input-field">
				<i class="material-icons prefix">textsms</i>
				<textarea id="user_input_hash" type="text" class="materialize-textarea"></textarea>
          		<label for="first_name">Enter Text</label>
			</div>
		</div>

		<table class="bordered responsive-table">
			<thead>
				<th class="center">Hash Algorithm</th>
				<th class="center">Hash Output</th>
				<th class="center">User Text</th>
			</thead>
			<tbody id="hash-answer">
				
			</tbody>
		</table>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>