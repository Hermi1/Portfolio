<div class="login">
<div class="con">
	<?php echo form_open('login/login_check'); ?>
	<?php echo heading('Administrator',4); ?>
	<?php echo form_label('Email'); ?>
	<?php echo form_input(array('name'=>'useremail','id'=>'useremail','type'=>'email','class'=>'u-full-width')) ?>
	<?php echo form_label('Password'); ?>
	<?php echo form_password(array('name'=>'userpassword','id'=>'userpassword','class'=>'u-full-width')) ?>
	<?php echo br(2); ?>
	<?php echo form_submit(array('name'=>'btnLogin','id'=>'btnSubmit','class'=>'button-primary u-full-width','value'=>'Login')); ?></div>
</div>