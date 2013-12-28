<div id="chat" style="position: fixed; bottom: 0; right: 0" class="hide">
	<input type="hidden" value="<?php echo $this->session->userdata('id'); ?>" id="id-chat">
	<input type="hidden" value="<?php echo $this->session->userdata('email'); ?>" id="email-chat">
	<textarea id="board-chat" style="padding: 0; margin: 0; height: 200px;"></textarea>
	<div class="row collapse">
		<div class="small-9 columns">
			<input type="text" placeholder="Enter Message Here" id="txt-chat">
		</div>
		<div class="small-3 columns">
			<a id="btn-chat" class="button postfix">Send</a>
		</div>
	</div>
</div>