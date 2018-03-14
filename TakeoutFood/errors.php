<?php  if (count($errors) > 0) : ?>
  <div class="alert alert-danger">
  	<?php foreach ($errors as $error) : ?>
  	  <p  <strong> <?php echo $error ?> </strong> </p>
  	<?php endforeach ?>
  </div>
<?php  endif ?> 