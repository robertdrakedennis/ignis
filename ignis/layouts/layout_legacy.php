<div class="row">
		<?php include('inc/news.php');
		?>
		<div class="col-xs-<?= $news_width; ?>">

			<?php if (!prometheus::loggedin()) { ?>
				<div class="header">
					<?= lang('signin', 'Sign in'); ?>
				</div>
				<?= lang('welcome_signin', 'You need to sign in first in order to buy any packages'); ?><br><br>
				<?php echo '<a href="' . SteamSignIn::genUrl() . '"><img src="//steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_large_noborder.png"></img></a>'; ?>
				<br><br>
			<?php } ?>

			<div class="header">
				<?= lang('welcome_main', 'welcome'); ?>
			</div>

			<?php if (getSetting('enable_goal', 'value2') == 1) { ?>
				<div class="donationGoal">
					<?php
					$goal = goal::get();
					?>
					<h2><?= lang('monthly_goal', 'Monthly goal'); ?></h2>

					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar"
						     aria-valuenow="<?php echo $goal['perc']; ?>" aria-valuemin="0" aria-valuemax="100"
						     style="width: <?php echo $goal['perc']; ?>%;">

                                    <span>
                                    <?php echo $goal['perc']; ?>% (<?php echo $goal['total'] . ' ' . $goal['cur']; ?>
	                                    / <?php echo $goal['goal'] . ' ' . $goal['cur']; ?>)
                                    </span>
						</div>
					</div>
				</div>
			<?php } ?>

			<?php if (getSetting('show_top', 'value2') == 1) { ?>
				<div class="top_donators">
					<h2><?= lang('top_donators', 'Top 3 donators'); ?></h2>
					<table class="table table-striped">
						<thead>
						<tr>
							<td><?= lang('name', 'Name') ?></td>
							<td><?= lang('amount', 'Amount') ?></td>
						</tr>
						</thead>

						<tbody>
						<?= dashboard::getTopDonators(); ?>
						</tbody>
					</table>
				</div>
			<?php } ?>

			<?php if (getSetting('show_recent', 'value2') == 1) { ?>
				<div class="recent_donators">
					<h2><?= lang('recent_donators', 'Recent donators'); ?></h2>
					<table class="table table-striped">
						<thead>
						<tr>
							<td><?= lang('name', 'Name') ?></td>
							<td><?= lang('package', 'Package') ?></td>
							<td><?= lang('amount', 'Amount') ?></td>
							<td><?= lang('timestamp', 'Timestamp') ?></td>
						</tr>
						</thead>

						<tbody>
						<?= dashboard::getRecent(); ?>
						</tbody>
					</table>
				</div>
			<?php } ?>

			<?php echo page::get('frontpage'); ?>
		</div>
	</div>
