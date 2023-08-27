<?php 
	$skillset_stylesheet = '';

	foreach ($skills as $index => $skill) {
		$skillset_stylesheet .= '#skillset .skill-list .skill-item.skill-item-'.$index.':hover {';
		$skillset_stylesheet .= 'background-color: '. $skill['color']['background'].';';
		$skillset_stylesheet .= 'color: ' . $skill['color']['foreground'].';}';
	}
	foreach ($subskills as $index => $skill) {
		$skillset_stylesheet .= '#skillset .subskill-list .subskill-item.subskill-item-'.$index.':hover {';
		$skillset_stylesheet .= 'background-color: '. $skill['color']['background'].';';
		$skillset_stylesheet .= 'color: ' . $skill['color']['foreground'].';}';
	}

	echo '<style>'.$skillset_stylesheet.'</style>';
?>
<div id="skillset">
	<h2>Skill-Set</h2>
	<div class="skill-list">
		<?php foreach ($skills as $index => $skill) { ?>
			<div class="skill-item skill-item-<?php echo $index ?>"><?php echo $skill['name'] ?></div>
		<?php } ?>
	</div>
	<div class="subskill-list">
		<?php foreach ($subskills as $index => $subskill) { ?><div class="subskill-item subskill-item-<?php echo $index?>"><?php echo $subskill['name'] ?></div><?php } ?>
	</div>
</div>

