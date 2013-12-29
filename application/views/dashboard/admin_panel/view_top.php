<style>
.admin-table th, .admin-table td {font-size: 12px;}
.admin-menu a {
	margin: 2px; width: 120px; 
	background: white; color: #92A1CF; 
	text-align: left; font-size: 13px;
}
.admin-menu a:hover {color: #007AA5}
</style>

<?php $this->load->view('dashboard/off_canvas'); ?>
<div class="row hide-for-small-only" style="max-width: 100%;" id="large-content">
	<div class="small-2 columns">
		<?php $this->load->view('dashboard/sidebar') ?>
	</div>
	<div class="small-10 columns">
		<div id="main_content">
			<div class="row">
				<div class="small-12 columns" id="dashboard-content" style="min-height: 600px">
					<?php $this->load->view('dashboard/admin_panel/default') ?>
					<div class="admin-menu">
						<span class="label">Administrator Menu</span>
						<div style="border-top: 1px solid #99BADD; border-left: 1px solid #99BADD">
							<a class="label" href="dashboard/admin_panel/classes">Classes</a>
							<a class="label" href="dashboard/admin_panel/contents">Contents</a>
							<a class="label" href="dashboard/admin_panel/countries">Countries</a>
							<a class="label" href="dashboard/admin_panel/courses">Courses</a>
							<a class="label" href="dashboard/admin_panel/entities">Entities</a>
							<a class="label" href="dashboard/admin_panel/facilitators">Facilitators</a>
							<a class="label" href="dashboard/admin_panel/files">Files</a>
							<a class="label" href="dashboard/admin_panel/logs">Logs</a>
							<a class="label" href="dashboard/admin_panel/rates">Rates</a>
							<a class="label" href="dashboard/admin_panel/sessions">Sessions</a>
							<a class="label" href="dashboard/admin_panel/session_types">Session Types</a>
							<a class="label" href="dashboard/admin_panel/status">Status</a>
							<a class="label" href="dashboard/admin_panel/suggestions">Suggestions</a>
							<a class="label" href="dashboard/admin_panel/suggestion_types">Suggestion Types</a>
							<a class="label" href="dashboard/admin_panel/tutorials">Tutorials</a>
							<a class="label" href="dashboard/admin_panel/users">Users</a>
							<a class="label" href="dashboard/admin_panel/user_types">User Types</a>
						</div>
					</div>