<?php $this->load->view("include/head");?>
<?php $userid = $_SESSION['roleid']; ?>
<!-- main content  -->
<div id="app">
	<div class="main-wrapper main-wrapper-1">
		<div class="navbar-bg"></div>
		<?php $this->load->view('include/header') ?>
		<?php $this->load->view('include/sidebar') ?>
		<div class="main-content">
		<?php if($userid != 4 ){
				echo '
					<style> .iframee{
						display:none !important;
					}</style>
				';
			}
			?>
<iframe class="iframee" src="http://localhost/construction/dashboard/website" frameborder="0" width="100%" height="600px"></iframe>
			<?php $this->load->view('include/themesetting') ?>
		</div>

	</div>
</div>
<!-- main content  -->
<?php $this->load->view("include/footer");?>