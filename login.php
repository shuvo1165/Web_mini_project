<?php include "header.html";?>
<div id=frm>
<form action="permission.php" method="POST">
	<label>Username</label>
	<input type="text" name="username" placeholder="Username" ><br><br>
	<label>Password</label>
	<input type="text" name="password" placeholder="Password"><br><br>
	<input type="submit" name="submit" value="submit">
</form>
</div>
<?php include 'footer.html';?>