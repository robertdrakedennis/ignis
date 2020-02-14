

<div class="features container">
	<div class="masthead">
		<div class="logo">
			<img src="<?= $logo ?>" alt="">
			<p class="logo-subtype"><?= $logo_subtype ?></p>
		</div>
	</div>
	<div class="highlight">
		<h1><?= $main_title ?></h1>
		<p><?= $title_subtype ?></p>
		<hr>
	</div>
	<?php foreach($feature_cards as $key => $value){ ?>
		<div class="feature">
			<div class="border">
				<div class="image">
					<img src="<?= $value['image']; ?>" class="">
				</div>
				<div class="desc">
					<h2><?= $value['title']; ?></h2>
					<div class="sub">
						<ul>
							<?php if(is_array($value['feature'])){ ?>
								<?php for ($i = 0; $i < count($value['feature']); $i++) { ?>
									<li>
										<?= $value['feature'][$i] ?>
									</li>
								<?php } ?>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>