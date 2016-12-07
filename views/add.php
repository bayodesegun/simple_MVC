<?php render('_header',array('title'=>$title))?>

<div class="container">
	<h4>Add a Contact to database.</h4>
	<p><span class="text-danger">* required field.</span></p>
	<form method="POST" id="add" name="add" action ="/add"> 
		<b>Name:</b> <input type="text" name="name" size="55" value="<?php echo $name;?>" required> <span class="text-danger">* </span>
		<p class="text-danger"> <?php echo $nameError;?> </p>
		<br> 
		<b>Email:</b> <input type="text" name="email" size="55" value="<?php echo $email;?>" required> <span class="text-danger">*</span>
		<p class="text-danger"> <?php echo $emailError;?> </p>
		<br>
		<p class="text-success lead"> <?php echo $addSuccess;?> </p>
		<br>		
		 <input class="btn btn-success pull-right" type="submit" name="submit" value= "Submit"> 
	</form>

</div>

<?php render('_footer')?>