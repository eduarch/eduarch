<ul class="side-nav" id="dashboard-left-menu">
	<?php if($this->session->userdata('user_type_id') == ADMIN_USER): ?>
	<li class="heading"><label><strong>Admin</strong></label></li>
	<li><a href="dashboard/admin_panel">Data Control Panel</a></li>
	<li class="divider"></li>
	<?php endif; ?>

	<?php if($this->session->userdata('is_facilitator') == ADMIN_USER): ?>
	<li class="heading"><label><strong>Facilitator</strong></label></li>
	<li><a href="dashboard/faci_panel">Filter Control Panel</a></li>
	<li class="divider"></li>
	<?php endif; ?>

	<li class="heading"><label><strong>Personal</strong></label></li>
	<li><a href="account_settings">Account</a></li>
	<li><a>Files</a></li>
	<li><a>Acquaintances</a></li>
	<li class="divider"></li>

	<li class="heading"><label><strong>Classes</strong></label></li>
	<li><a href="dashboard/learning">Learning</a></li>
	<li><a href="dashboard/teaching">Teaching</a></li>
	<li><a href="dashboard/sessions">Sessions</a></li>
	<li><a href="dashboard/notifications">Notifications</a></li>
</ul>