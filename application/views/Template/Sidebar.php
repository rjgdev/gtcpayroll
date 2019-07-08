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
	</ul>
</nav>