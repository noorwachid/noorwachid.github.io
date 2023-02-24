<div id="experiences">
	<h2>Experiences</h2>
	<div class="experience-list">
		<?php foreach ($experiences as $experience) { ?>
			<div class="experience-item">
				<div class="logo" style="background-image: url('/assets/images/experiences/<?php echo $experience['logo'] ?>');"></div>
				<div class="detail">
					<h3 class="company"><?php echo $experience['company'] ?></h3>
					<div class="position"><?php echo $experience['position'] ?></div>
					<div class="year"><?php echo $experience['year'] ?></div>
					<a class="website" href="<?php echo $experience['url'] ?>"><?php echo $experience['url'] ?></a>
				</div>
			</div>
		<?php } ?>
	</div>
</div>


