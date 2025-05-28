<?php $videos = [
	['9uM9mRWFDts', 'RuseHack2015: Приготовления за защитите на проектите'],
	['90QBgrLRrY', 'RuseHack2015: Представяне на спонсорите'],

	['QMEock5_OPM', 'RuseHack2015: представяне на проект Time Table Ruse'],
	['GRL0rzDbOhg', 'RuseHack2015: представяне на проект Easy Travel'],
	['Rp9O_pMcFvw', 'RuseHack2015: представяне на проект Eventr'],
	['ExUFwlBz5uY', 'RuseHack2015: представяне на проект liteTask'],
	['pSHQa8_TxgU', 'RuseHack2015: представяне на проект SoundChat'],
	['Y_uC-Q92jQI', 'RuseHack2015: представяне на проект Ruse Trans'],
	['DNtiFHpKqmE', 'RuseHack2015: представяне на проект Rousse Problem Solving'],
	['M4V0FwPkXIk', 'RuseHack2015: представяне на проект Vehecon'],
	['0zGABj_3bNA', 'RuseHack2015: представяне на проект RuSee'],
	['BKWGYGzG5qc', 'RuseHack2015: представяне на проект Auto Info'],
	['rtM8T_5sCnQ', 'RuseHack2015: представяне на проект Project Archive'],
	['8QiXWhdweQk', 'RuseHack2015: представяне на проект Autohelp'],
	['cHS2siMV9CE', 'RuseHack2015: представяне на проект RuseSignal'],
	['1acVZdghliA', 'RuseHack2015: представяне на проект RuseCast'],

	['IV6gv04zBtQ', 'RuseHack2015: Награждаване на победителите'],
]; ?>

Списък с всички записи може да намерите тук: <a target="_blank"
href="https://www.youtube.com/playlist?list=PLnQf4XfNacVEqJOZdpoAm1sST1wZdULR-">youtube.com/playlist?list=PLnQf4XfNacVEqJOZdpoAm1sST1wZdULR-</a>

<div class="container text-center">
	<div class="row">
	<?php $per_row = 3; foreach ($videos as $i => $video)
	{
		if (0 != $i && 0 == $i % $per_row)
		{
			echo '	</div>', "\n", '	<div class="row">22';
		}

		[$key, $title] = $video;
		?><div class="col-4">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $key; ?>"
			title="<?= $title; ?>" frameborder="0"
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
			referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><?php
	}

	$fill = (1 + $i) % 3;
	for ($i = 0; $i < $fill; $i++)
	{
		echo '<div class="col-4"></div>';
	}
	?>
	</div>
</div>
