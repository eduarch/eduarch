<?php $this->load->view('dashboard/off_canvas'); ?>
<div class="row hide-for-small-only" style="max-width: 100%;" id="large-content">
	<div class="medium-2 columns">
		<?php $this->load->view('dashboard/sidebar') ?>
	</div>
	<div class="medium-10 columns">
		<div id="main_content">
			<?php $this->load->view('dashboard/admin_panel/content'); ?>
		</div>
	</div>
</div>
