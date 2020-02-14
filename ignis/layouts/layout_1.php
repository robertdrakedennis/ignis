<!-- Start Server Info  -->
    <?php if($show_server_info == true): ?>
<div class="splash-info <?php echo $row_1_animation ?>">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="splash-section-header splash-box animated <?php echo $server_info_animation ?>">
				<img  src="<?php echo $server_logo ?>">
				<h2>Welcome to <?php echo $server_name ?></h2>
				<p><?php echo $about_server ?></p>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<!-- Start First Row  -->
	<?php if($show_main_row == true): ?>
		<div class="row animated <?php echo $row_2_animation ?>">
			<?php foreach($row_1_cards as $key => $value){ ?>
				<div class="col-md-4">
					<div class="card card-splash card-balance">
						<div class="icon">
							<i class="fa fa-<?= $value['Icon']; ?>" style="font-size:64px; color: <?= $value['Icon-color']; ?>;"></i>
						</div>
						<div class="card-content">
							<h4 class="card-title"> <?= $value['Title']; ?> </h4>
							<p class="card-description"> <?= $value['Info']; ?> </p>
						</div>
					</div>
					<div class="card-link-footer">
						<a href="<?= $value['Link']; ?>"> <?= $value['Link-Title']; ?> </a>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php endif; ?>
	<!-- Start Second Row  -->

	<div class="splash-info">
		<?php if($show_second_row== true): ?>
			<div class="row animated <?php echo $row_2_animation ?>">
				<div class="col-md-8 col-md-offset-2 ">
					<div class="splash-section-header splash-box">
						<h2><?php echo $row_2_title ?></h2>
					</div>
				</div>
			</div>
			<div class="row animated <?php echo $row_2_animation ?>">
				<?php foreach($row_2_cards as $key => $value){ ?>
					<div class="col-md-4">
						<div class="card card-splash">
							<div class="icon">
								<i class="fa fa-<?= $value['Icon']; ?>" style="font-size:64px; color: <?= $value['Icon-color']; ?>;"></i>
							</div>
							<div class="card-content">
								<h4 class="card-title"> <?= $value['Title']; ?> </h4>
								<p class="card-description"> <?= $value['Info']; ?> </p>
							</div>
						</div>
						<div class="card-link-footer">
							<a href="<?= $value['Link']; ?>"> <?= $value['Link-Title']; ?> </a>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php endif; ?>
