<div id="skillset">
	<h2>Skill-Set</h2>
	<div class="skill-list">
		<?php foreach ($skills as $skill) { ?>
			<div class="skill-item"><?php echo $skill['name'] ?></div>
		<?php } ?>
	</div>
	<div class="subskill-list">
		<?php foreach ($subskills as $subskill) { ?>
			<div class="subskill-item"><?php echo $subskill['name'] ?></div>
		<?php } ?>
	</div>
</div>

