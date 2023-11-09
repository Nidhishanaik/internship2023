<div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
<ul class="nav flex-column pl-1 left-menus">			
<?php if($user->isAdmin()) { ?>		
	<li class="nav-item"><a class="nav-link" href="dashboard.php"><strong>DASHBOARD</strong></a></li>
	<li class="nav-item"><a class="nav-link" href="appointment.php"><strong>ADMINS</strong></a></li>	
	<li class="nav-item"><a class="nav-link" href="user.php"><strong>USERS</strong></a></li>
	<li class="nav-item"><a class="nav-link" href="doctor.php"><strong>TICKETS</strong></a></li>
	
	<li class="nav-item"><a class="nav-link" href="specialization.php"><strong>DEPARTMENT</strong></a></li>	
	<li class="nav-item"><a class="nav-link" href="logout.php"><strong>LOGOUT</strong></a></li>
<?php } ?>
</ul>
</div>




