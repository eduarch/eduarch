<style>
.admin-table th, .admin-table td {font-size: 12px;}
.admin-menu a {
	margin: 2px; width: 120px; 
	background: white; color: #92A1CF; 
	text-align: left; font-size: 13px;
}
.admin-menu a:hover {color: #007AA5}
</style>

<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  <a class="close-reveal-modal">&#215;</a>
</div>

<?php $this->load->view('dashboard/off_canvas'); ?>
<div class="row hide-for-small-only" style="max-width: 100%;" id="large-content">
	<div class="small-2 columns">
		<?php $this->load->view('dashboard/sidebar') ?>
	</div>
	<div class="small-10 columns">
		<div id="main_content">
			<div class="row">
				<div id="dashboard-content" style="min-height: 600px">
					<?php $this->load->view('dashboard/admin_panel/default') ?>
					<div class="admin-menu">
						<span class="label">Administrator Menu</span>
						<div style="border-top: 1px solid #99BADD; border-left: 1px solid #99BADD">
							<a class="label" href="admin/classes">Classes</a>
							<a class="label" href="admin/contents">Contents</a>
							<a class="label" href="admin/countries">Countries</a>
							<a class="label" href="admin/courses">Courses</a>
							<a class="label" href="admin/entities">Entities</a>
							<a class="label" href="admin/facilitators">Facilitators</a>
							<a class="label" href="admin/files">Files</a>
							<a class="label" href="admin/logs">Logs</a>
							<a class="label" href="admin/rates">Rates</a>
							<a class="label" href="admin/sessions">Sessions</a>
							<a class="label" href="admin/session_types">Session Types</a>
							<a class="label" href="admin/status">Status</a>
							<a class="label" href="admin/suggestions">Suggestions</a>
							<a class="label" href="admin/suggestion_types">Suggestion Types</a>
							<a class="label" href="admin/tutorials">Tutorials</a>
							<a class="label" href="admin/users">Users</a>
							<a class="label" href="admin/user_types">User Types</a>
						</div>
					</div>