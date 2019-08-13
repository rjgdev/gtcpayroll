<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<!---Dashboard Sidebar---->
	 	<li class="nav-item">
            <?php echo anchor('Dashboard', '<i class="mdi mdi-view-dashboard menu-icon"></i>
              <span class="menu-title">Dashboard</span>', 'class="nav-link"'); ?>
        </li>

		<!---Employee Records Sidebar---->
	 	<li class="nav-item">
            <?php echo anchor('Employee', '<i class="mdi mdi-clipboard-text-outline menu-icon"></i>
              <span class="menu-title">Employee Records</span>', 'class="nav-link"'); ?>
        </li>

		<!---File Maintenance Sidebar---->
		<li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#filemaintenance" aria-expanded="false" aria-controls="filemaintenance">
			<i class="mdi mdi mdi-folder-open menu-icon"></i>
			<span class="menu-title">File Maintenance</span>
			<i class="menu-arrow"></i>
		</a>
		</li>

		<div class="collapse" id="filemaintenance">
			<ul class="nav flex-column sub-menu">			
			<li class="nav-item"><?php echo anchor('Department', ' Department ', 'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('Position', ' Position ', 'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('LeavType', ' Leave Type ', 'class="nav-link"'); ?></a></li>
			<li class="nav-item"><?php echo anchor('Holiday', ' Holidays ', 'class="nav-link"'); ?></a></li>
			<li class="nav-item"><?php echo anchor('SSS_Contribution', ' SSS Table ', 'class="nav-link"'); ?></a></li>
			<li class="nav-item"><?php echo anchor('TaxContribution', ' Tax Table ', 'class="nav-link"'); ?></a></li>
			</ul>
		</div>

		<!---Transactions Sidebar---->
		<li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#transactions" aria-expanded="false" aria-controls="transactions">
			<i class="mdi mdi-file-find menu-icon"></i>
			<span class="menu-title">Transactions</span>
			<i class="menu-arrow"></i>
		</a>
		</li>
		<div class="collapse" id="transactions">
			<ul class="nav flex-column sub-menu">
			<li class="nav-item"><?php echo anchor('Leave', 					'Employee Leave', 	'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('Advanceloan/Charges', 		'Employee Charges', 'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('Advanceloan/Index', 		'Cash Loan', 		'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('Advanceloan/CashAdvance', 	'Cash Advance', 	'class="nav-link"'); ?></li>
			</ul>
		</div>

		<!---employee time in & out---->
		<li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#attendance" aria-expanded="false" aria-controls="attendance">
			<i class="mdi mdi-calendar-clock menu-icon"></i>
			<span class="menu-title">Attendance</span>
			<i class="menu-arrow"></i>
		</a>
		</li>

		<div class="collapse" id="attendance">
			<ul class="nav flex-column sub-menu">
			<li class="nav-item"><?php echo anchor('timeinout', 'Import Daily Time Record', 'class="nav-link"'); ?></li>
			<li class="nav-item"><?php echo anchor('timeinout', 'View Daily Time Record', 'class="nav-link"'); ?></li>
			</ul>
		</div>
	</ul>
		
	</ul>
</nav>

