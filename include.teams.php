<?php $projects = [
	'Time Table Ruse' => ['QMEock5_OPM', ''],
	'Easy Travel' => ['GRL0rzDbOhg', ''],
	'Eventr' => ['Rp9O_pMcFvw', ''],
	'liteTask' => ['ExUFwlBz5uY', ''],
	'SoundChat' => ['pSHQa8_TxgU', ''],
	'Ruse Trans' => ['Y_uC-Q92jQI', ''],
	'Rousse Problem Solving' => ['DNtiFHpKqmE', 'https://github.com/RuseHack2015/RousseProblemSolving'],
	'Vehecon' => ['M4V0FwPkXIk', ''],
	'RuSee' => ['0zGABj_3bNA', ''],
	'Auto Info' => ['BKWGYGzG5qc', ''],
	'Project Archive' => ['rtM8T_5sCnQ', ''],
	'Autohelp' => ['8QiXWhdweQk', ''],
	'RuseSignal' => ['cHS2siMV9CE', ''],
	'RuseCast' => ['1acVZdghliA', ''],
];?>

<p>Имаше записани повече от 60 участника, разпределени в 14 отбора.</p>

<p>Всичките предадени проекти може да разгледате на <a target="_blank" href="https://github.com/RuseHack2015">github.com/RuseHack2015</a>
</p>

<?php foreach ($projects as $project => $details)
{
	[$youtube, $github] = $details;

	echo '<div class="row"><div class="col-6">';
	echo '<h2>Проект <b>', $project, '</b></h2>';
	echo '</div>';

	echo '<div class="col-6">', $this->youtube_embed($youtube, 'RuseHack2015: представяне на проект ' . $project), '</div>',
	'</div>';
}
