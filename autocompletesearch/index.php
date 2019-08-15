<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutorial Autocomplete</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/informatika.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">
			Dunia Informatika</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="clr1 active"><a href="index.html">Home</a></li>
				<li class="clr2"><a href="">Bootstrap</a></li>
				<li class="clr3"><a href="">PHP</a></li>
			</ul>
		</div>
	</div>
</div>
</br></br></br></br>

<div class ="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Autocomplete Nama Kota</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-8" style="padding-top:25px">
							<input type="text" class="typeahead form-control" required="required" name="inputnama" placeholder="Nama Negara">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$('input.typeahead').typeahead({
	source:  function (query, process) {
	return $.get('ajaxauto.php', { query: query }, function (data) {
			console.log(data);
			data = $.parseJSON(data);
			return process(data);
		});
	}
});
</script>
</body>
</html>
