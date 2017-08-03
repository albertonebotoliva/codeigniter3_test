<?php
    if($message){
?>
        <div class="alert alert-success">
          <strong><?php echo $message ?></strong>
        </div>
<?php
    }
?>
<form action="" method="post" autocomplete="off" name="suscription" accept-charset="UTF-8">
    <h2>Please provide the next information</h2>
	<?php
		foreach ($fields as $value) {
	 ?>
	 <label for="input<?php echo ucfirst($value)?>"><?php echo strtoupper($value)?></label>
	 <input
	 	type="<?php echo ($value == 'email')? 'email' : 'text' ?>"
		name="<?php echo $value?>"
		class="form-control"
		placeholder="<?php echo ucfirst($value) ?>"
		required
		autofocus
	>
	 <?php
		}
	 ?>
	 <br />
    <button class="btn btn-lg btn-primary btn-block" type="submit">Subscribe</button>
</form>
