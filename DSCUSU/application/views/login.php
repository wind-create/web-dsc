 
<?php
// Cek apakah terdapat session nama message
if($this->session->flashdata('message')){ // Jika ada
	echo '<div class="alert alert-danger">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
}
?>

<form  class="form-signin" role="form" method="post" action="<?php echo base_url('index.php/auth/login'); ?>">
    <div class="form-signin-heading">
      <img class="form-group text-center" width="100%" height="80%" src="<?php echo base_url("image/dsc.png") ?>">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password" required>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
