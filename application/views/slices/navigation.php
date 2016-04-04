<nav class="two-thirds column">
	<ul>
		<li><a href="<?php echo base_url()?>home/work">Work</a></li>
		<li><a href="<?php echo base_url()?>home/resume">Resume</a></li>
		<li><a href="<?php echo base_url()?>home/contact">Contact</a></li>
		<li><a href="<?php echo base_url()?>home/blog">Blog</a></li>
		
		<!-- <?php
		if($this->session->userdata('sessiondata')){
			echo "<li><a href='".base_url()."home/logout'>Logout</a></li>";
		}else{
			echo '<li><a href="'.base_url().'home/login">Login</a></li>';
			echo '<li><a href="'.base_url().'home/register">Register</a></li>';
		}
		?> -->
	</ul>
</nav>