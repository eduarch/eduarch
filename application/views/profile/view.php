<div class="row">
	<div class="medium-3 columns" style="background: #eee;">
		<?php $this->load->view('profile/image'); ?><hr>
		<?php $this->load->view('profile/stats'); ?>
	</div>
	<div class="medium-9 columns">
		<div class="row">
			<div class="medium-6 columns">
				<?php $this->load->view('profile/courses'); ?>
			</div>
			<div class="medium-6 columns">
				<?php $this->load->view('profile/classes'); ?>
			</div>
		</div>
	</div>
</div>