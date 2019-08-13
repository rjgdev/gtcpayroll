<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<!---Manage Sidebar---->
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
			<li class="nav-item"><?php echo anchor('Leave', ' Employee Leave ', 'class="nav-link"'); ?></a></li>
			</ul>
		</div>

		<!---Manage Loan Sidebar---->
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
			<i class="mdi mdi-invert-colors menu-icon"></i>
			<span class="menu-title">Manage Loan</span>
			<i class="menu-arrow"></i>
			</a>
		</li>
		<div class="collapse" id="ui-basic">
		 <ul class="nav flex-column sub-menu">
				<li class="nav-item"><?php echo anchor('Advanceloan', 'Employee Loan', 'class="nav-link"') ?></li>
				<li class="nav-item"><?php echo anchor('Advanceloan/charges', 'Employee Charges', 'class="nav-link"') ?></a></li>
				<li class="nav-item"><?php echo anchor('Advanceloan/cashadvance', 'Employee Cash Advance', 'class="nav-link"') ?></a></li>
		</ul>
			</div>
			<!---employee time in & out---->
			<li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#timeinandout" aria-expanded="false" aria-controls="timeinandout">
			<i class="mdi mdi mdi-settings menu-icon"></i>
			<span class="menu-title">Employee daily time Records</span>
			<i class="menu-arrow"></i>
		</a>
		</li>

		<div class="collapse" id="timeinandout">
			<ul class="nav flex-column sub-menu">
			<li class="nav-item"><?php echo anchor('timeinout', ' Employee Records', 'class="nav-link"'); ?></li>
			</ul>
		</div>
			
			<!---Master File Sidebar---->
		<li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#masterfile" aria-expanded="false" aria-controls="masterfile">
			<i class="mdi mdi mdi-settings menu-icon"></i>
			<span class="menu-title">Master File</span>
			<i class="menu-arrow"></i>
		</a>
		</li>

		<div class="collapse" id="masterfile">
			<ul class="nav flex-column sub-menu">
			<li class="nav-item"><?php echo anchor('department', ' Department ', 'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('position', ' Position ', 'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('leave', ' Leave ', 'class="nav-link"'); ?></a></li>
			<li class="nav-item"><?php echo anchor('holiday', ' Holidays ', 'class="nav-link"'); ?></a></li>
			<li class="nav-item"><?php echo anchor('SSS_Contribution', ' SSS Contribution Table ', 'class="nav-link"'); ?></a></li>
			<li class="nav-item"><?php echo anchor('TaxContribution', ' Tax Table ', 'class="nav-link"'); ?></a></li>
			</ul>
		</div>
	</ul>
		
	</ul>
</nav>

