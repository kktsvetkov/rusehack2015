<?php $projects = [
	'Time Table Ruse' => ['QMEock5_OPM', ''],
	'Easy Travel' => ['GRL0rzDbOhg', 'https://github.com/RuseHack2015/EasyTravel'],
	'Eventr' => ['Rp9O_pMcFvw', 'https://github.com/RuseHack2015/Eventer'],
	'liteTask' => ['ExUFwlBz5uY', 'https://github.com/RuseHack2015/liteTask'],
	'SoundChat' => ['pSHQa8_TxgU', 'https://github.com/RuseHack2015/SoundChat'],
	'Ruse Trans' => ['Y_uC-Q92jQI', 'https://github.com/RuseHack2015/RuseTrans'],
	'Rousse Problem Solving' => ['DNtiFHpKqmE', 'https://github.com/RuseHack2015/RousseProblemSolving'],
	'Vehecon' => ['M4V0FwPkXIk', 'https://github.com/RuseHack2015/VehEcon'],
	'RuSee' => ['0zGABj_3bNA', 'https://github.com/RuseHack2015/ruSee-App'],
	'Auto Info' => ['BKWGYGzG5qc', 'https://github.com/RuseHack2015/AutoInfo'],
	'Project Archive' => ['rtM8T_5sCnQ', ''],
	'Autohelp' => ['8QiXWhdweQk', 'https://github.com/RuseHack2015/AutoHelp'],
	'RuseSignal' => ['cHS2siMV9CE', 'https://github.com/RuseHack2015/RuseSignal.com'],
	'RuseCast' => ['1acVZdghliA', 'https://github.com/RuseHack2015/RuseCast'],
];?>

<p>Имаше записани повече от 60 участника, организирали се в различни отбори.
На финала проекти представиха 14 отбора.</p>

<p>Всичките предадени проекти може да разгледате на <a target="_blank" href="https://github.com/RuseHack2015">github.com/RuseHack2015</a>
</p>

<?php foreach ($projects as $project => $details)
{
	[$youtube, $github] = $details;

	echo '<div class="row"><div class="col-6">';
	echo '<h2>Проект <b>', $project, '</b></h2>';
	if ($github)
	{
		echo '<a target="_blank" href="', $github, '">', 
			str_replace('https://', '', $github), '</a>';
	}
	echo '</div>';

	echo '<div class="col-6">', $this->youtube_embed($youtube, 'RuseHack2015: представяне на проект ' . $project), '</div>',
	'</div>';
}
