<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">
<!-- <link rel="icon" href="favicon.ico"> -->
<!-- <link rel="canonical" href="https://rusehack2015.kaloyan.info/"> -->

<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

<link href="rusehack2015.css" rel="stylesheet"/>
</head>
<body>
	<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark" data-bs-theme="dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">#RuseHack2015</a>

			<button class="navbar-toggler" type="button"
				data-bs-toggle="collapse"
				data-bs-target="#navbarNav" aria-controls="navbarNav"
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#start">Организатори</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#teams">Участници</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#social">Споделено</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#photo">Снимки</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#video">Видео</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#media">Медии</a>
					</li>
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

		<div class="row">
		<h1 id="event">Организатори</h1>

		<p>... и спонсори</p>
		</div>

		<div class="row">
		<h1 id="teams">Участници</h1>

		<p>...</p>
		</div>

		<div class="row">
		<h1 id="social">Споделено</h1>

		<p>...</p>
		</div>

		<div class="row">
		<h1 id="photos">Снимки</h1>

		<p>...</p>
		</div>

		<div class="row">
		<h1 id="video">Видео</h1>

		<p>...</p>

		<?php include __DIR__ . '/include.video.php'; ?>
		</div>

		<div class="row">
		<h1 id="media">Медии</h1>

		<p>...</p>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
	<script src="rusehack2015.js"></script>
</body>
</html>
