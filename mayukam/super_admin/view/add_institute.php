<?php include_once 'header.php'; ?>
    <section class="content">
        <h3>Add Institution</h3>
        <div class="container">
	        <form action="../controller/add_instution_controller.php" method="post">	
	        		<label for="institution_name">Institution Name</label>
	        		<input type="text" name="institution_name" id="institution_name" placeholder="Institution Name" autofocus required class="form-control">
					<br>
					<label for="institution_code">Institution Code</label>
	        		<input type="number" max="999" id="institution_code" name="institution_code" placeholder="Institution Code" required class="form-control">
	        		<br>
	        		<label for="institution_address">Institution Address</label>
	        		<textarea id="institution_address" name="institution_address" placeholder="Institution Address" required class="form-control" rows=5></textarea>
	        		<br>
	        		<label for="institution_incharge_mail_id">Institution Incharge Mail Id</label>
	        		<input type="email" id="institution_incharge_mail_id" name="institution_incharge_mail_id" placeholder="Institution Incharge Mail" required class="form-control">
	        		<br>
	        		<label for="institution_incharge_pass">Institution Incharge Password</label>
	        		<input type="password" id="institution_incharge_pass" name="institution_incharge_pass" placeholder="Institution Incharge Password" required class="form-control">
	        		<br>
	        		<input type="submit" class="btn btn-primary form-control
	        		" value="Add Institution">

	        </form>
        </div>
    </section>
<?php include_once 'footer.php'; ?>