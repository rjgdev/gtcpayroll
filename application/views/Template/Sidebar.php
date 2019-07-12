<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
		    <a class="nav-link" data-toggle="collapse" href="#manage" aria-expanded="false" aria-controls="manage">
		      <i class="mdi mdi mdi-settings menu-icon"></i>
			  <span class="menu-title">Manage</span>
		      <i class="menu-arrow"></i>
		    </a>
		    <div class="collapse" id="manage">
		      <ul class="nav flex-column sub-menu">
		        <li class="nav-item"><?php echo anchor('employee', ' Employee Records ', 'class="nav-link"'); ?></li>
		        <li class="nav-item"><?php echo anchor('department', ' Department ', 'class="nav-link"'); ?></a></li>
		        <li class="nav-item"><?php echo anchor('position', ' Position ', 'class="nav-link"'); ?></a></li>
		      </ul>
		    </div>
		  </li>
		   <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
              <i class="mdi mdi-invert-colors menu-icon"></i>
              <span class="menu-title">Advance Loan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse show" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../ui-features/accordions.html">Loan Table</a></li>
                <li class="nav-item"><?php echo anchor('Advanceloan', ' Loan Form Table ', 'class="nav-link"') ?></a></li>
              </ul>
            </div>
          </li>
	</ul>
</nav>

