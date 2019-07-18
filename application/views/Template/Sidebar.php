<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#manage" aria-expanded="false" aria-controls="manage">
			<i class="mdi mdi mdi-settings menu-icon"></i>
			<span class="menu-title">Manage</span>
			<i class="menu-arrow"></i>
		</a>
		</li>
		<div class="collapse" id="manage">
			<ul class="nav flex-column sub-menu">
			<li class="nav-item"><?php echo anchor('employee', ' Employee Records ', 'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('department', ' Department ', 'class="nav-link"'); ?></a></li>
			<li class="nav-item"><?php echo anchor('position', ' Position ', 'class="nav-link"'); ?></a></li>
			</ul>
		</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
			<i class="mdi mdi-invert-colors menu-icon"></i>
			<span class="menu-title">Manage Loan</span>
			<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="ui-basic" style="">
			 <ul class="nav flex-column sub-menu">
					<li class="nav-item"><?php echo anchor('Advanceloan', 'Loan', 'class="nav-link"') ?>
					<li class="nav-item"><?php echo anchor('Advanceloan/charges', 'Charges', 'class="nav-link"') ?></a></li>
					<li class="nav-item"><?php echo anchor('Advanceloan/cashadvance', 'Cash Advance', 'class="nav-link"') ?></a></li>
			</ul>
			</div>
		
	</ul>
</nav>

