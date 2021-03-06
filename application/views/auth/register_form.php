<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'class'	=> 'form-control input-lg',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'class'	=> 'form-control input-lg',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'class'	=> 'form-control input-lg',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'class'	=> 'form-control input-lg',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'class'	=> 'form-control input-lg',
	'maxlength'	=> 8,
);
?>

<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
		<div class="container aside-xxl"> 
		 <section class="panel panel-default m-t-lg bg-white">
		<header class="panel-heading text-center"> 
		<strong><?=$this->config->item('company_name')?> Sign up Form</strong> </header>
		<?php 
		$attributes = array('class' => 'panel-body wrapper-lg');
		echo form_open($this->uri->uri_string(),$attributes); ?>
			<?php if ($use_username) { ?>
			<div class="form-group">
				<label class="control-label">Username</label>
				<?php echo form_input($username); ?>
				<span style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span>
			</div>
			<?php } ?>
			<div class="form-group">
				<label class="control-label">Email </label>
				<?php echo form_input($email); ?>
				<span style="color: red;">
				<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
			</div>
			<div class="form-group">
				<label class="control-label">Password </label>
				<?php echo form_password($password); ?>
				<span style="color: red;"><?php echo form_error($password['name']); ?></span>
			</div>
			<div class="form-group">
				<label class="control-label">Confirm Password </label>
				<?php echo form_password($confirm_password); ?>
				<span style="color: red;"><?php echo form_error($confirm_password['name']); ?></span>
			</div>
			<table>

	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
		<?php echo $recaptcha_html; ?>
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_input($captcha); ?></td>
		<span style="color: red;"><?php echo form_error($captcha['name']); ?></span>
	</tr>
	<?php }
	} ?>
</table>
			<div class="line line-dashed"></div> 
			 <button type="submit" class="btn btn-primary">Sign up</button>
			<div class="line line-dashed">
			</div>
			<p class="text-muted text-center"><small>Already have an account?</small></p> 
			<a href="<?=base_url()?>auth/login" class="btn btn-danger btn-block">Sign in</a>
		
<?php echo form_close(); ?>
</section>
	</div> </section>
