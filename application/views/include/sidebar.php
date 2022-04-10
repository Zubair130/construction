<?php $userid = $_SESSION['userid']; 
//echo "<script>alert(' $userid');</script>";
?>

<!-- Sidebar Start -->
<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="#"> <img alt="image" src="<?php echo base_url()?>assets/img/favicon.ico"
					class="header-logo" />
				<span class="logo-name">Musk</span>
			</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Main</li>
			<li class="dropdown active">
				<a href="#" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
			</li>
			
			<?php if($userid != 1 ){
				echo '
					<style> .addviewuser{
						display:none !important;
					}</style>
				';
			}
				?>
				<li class="dropdown addviewuser">
				<a href="#" class="menu-toggle nav-link has-dropdown"><i
						data-feather="briefcase"></i><span>User</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url() . 'dashboard/addUser'; ?>">Add User</a></li>
				</ul>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url() . 'Users/viewRecord'; ?>">User List</a></li>
				</ul>
			</li>
			

			<!-- <li><a class="nav-link" href="#"><i data-feather="briefcase"></i>Inspection List</a></li> -->
			<li><a class="nav-link" href="<?php echo base_url() . 'sites/assignSite'; ?>"><i data-feather="briefcase"></i>Assign Site</a></li>
			<li class="dropdown">
				<a href="#" class="menu-toggle nav-link has-dropdown"><i
						data-feather="briefcase"></i><span>Report</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="#">Monthly Report</a></li>
				</ul>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="#">Yearly Report</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="menu-toggle nav-link has-dropdown"><i
						data-feather="briefcase"></i><span>Sites</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url() . 'dashboard/addusersite'; ?>">Add Site</a></li>
				</ul>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url() . 'sites/viewSites'; ?>">Site List</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="menu-toggle nav-link has-dropdown"><i
						data-feather="briefcase"></i><span>Inspection</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url() . 'sites/loadsurvey'; ?>">Site Inspection</a></li>
				</ul>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url() . 'sites/fetchsurvey'; ?>">Inspection List</a></li>
				</ul>
			</li>


		</ul>
	</aside>
</div>
<!-- Sidebar End -->