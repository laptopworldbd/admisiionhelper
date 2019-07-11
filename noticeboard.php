<form action="noticephp.php" method="post">
   		 <center><b>INPUT NOTICE</b></center>
			
	        <div class="form-group">
	        	<input type="text" name="uname" value="" class="form-control" placeholder="University Name:">
	        </div><br>

	        <div class="form-group">
	        	<input type="text" name="subject" value="" class="form-control" placeholder="Subject:">
	        </div><br>
	        <div class="form-group" >
	        <input type="longtext" name="comment1" form="usrform" placeholder="Enter text here...">
	    </div><br>
	        
	        <div class="form-group" >
	        	Date :<br>
	         	<input type="Date" name="date" value="" class="" placeholder="Admission Date:" >
	        </div>
	        
	        <div class="form-group">
	        	<input type="varchar" name="link" value="" class="form-control" placeholder="Link:">
	        </div>
	        
              <br>

			<input type="submit" name="submit2" class="btn btn-danger" value="Add">
   			<a href = "logout.php"class="btn btn-danger">Logout</a>
           </form>
