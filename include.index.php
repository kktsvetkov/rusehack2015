<?php $sections = [
	'start' => 'Организатори',
	'teams' => 'Участници',
	'prize' => 'Награди',
	'photo' => 'Снимки',
	'social' => 'Споделено',
]; ?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="#RuseHack2015 &mdash; Първият хакатон в Русе!">

<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
<link rel="manifest" href="./site.webmanifest">

<!-- <link rel="canonical" href="https://rusehack2015.kaloyan.info/"> -->

<title>#RuseHack2015 &mdash; Първият хакатон в Русе!</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
	crossorigin="anonymous">
</head>
<body>
	<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark" data-bs-theme="dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">#RuseHack2015</a>

			<button class="navbar-toggler" type="button"
				data-bs-toggle="collapse"
				data-bs-target="#napredNazad" aria-controls="napredNazad"
				aria-expanded="false" aria-label="Превключи навигация">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="napredNazad">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<?php foreach ($sections as $name => $title)
				{
					echo '<li class="nav-item">
					<a class="nav-link" href="#', $name, '">', $title, '</a>
					</li>';
				} ?>
				</ul>

				<span class="navbar-text">
				Първият хакатон в Русе!
				</span>
			</div>
		</div>
	</nav>

	<div class="container col-xxl-8 px-4 py-5">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			<div class="col-10 col-sm-8 col-lg-6"> <img src="./media/rusehack2015.png"
				class="d-block mx-lg-auto img-fluid" alt="#RuseHack2015"
				width="700" height="500" loading="lazy" />
			</div>
			<div class="col-lg-6">
				<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">#RuseHack2015</h1>
				<p class="lead">Първият хакатон организиран в Русе</p>
			</div>
		</div>

		<?php foreach ($sections as $name => $title)
		{
			echo '<div class="row">', '<h1 class="mt-4 mb-3" id="', $name, '">', $title, '</h1>';

			include __DIR__ . '/include.' . $name . '.php';
			echo '</div>';
		} ?>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
	crossorigin="anonymous"></script>
</body>
</html>
