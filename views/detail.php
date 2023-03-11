<div id="content" class="form">
<?php

echo 
			'
			<div class="detail">
				<div class="areabckrg">
					<div class="col-12 med-col-2"><img id="Image" alt="Employee Photo" src="images/'.$users[0]->photo.'"></div>
					<div id="Details" class="col-12 med-col-10"> <span class="centerDetails"><span class="label">Name:</span> '.$users[0]->lastname.' '.$users[0]->firstname.'<br>
					
					<span class="label">Attendee ID:</span> '.$users[0]->id.'<br>
					<span class="label">Role:</span> '.$users[0]->rolename.'<br></span>
				</div>
				<div class="buttons">
					<a href="http://localhost:8888/Kouwen_Abram_HW2/index.php?task=delete&id='.$users[0]->id.'">delete user</a><br>
					<a href="http://localhost:8888/Kouwen_Abram_HW2/index.php?task=update&id='.$users[0]->id.'">update user</a>
				</div>
			</div>
			<div class="form right">
			<div>
				<h2>Update User</h2>
			</div>
			<form action="index.php?task=update&id='.$users[0]->id.'" method="POST" id="form">
				<div class="inputarea">
					<input type="text" name="first" placeholder="Firstname">
					<input type="text" name="last" placeholder="Lastname">
					<br>
					<input type="text" name="usrn" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<br>
					<label id="label" for="select">Role:</label>
					<select name="role" id="roles">
						<option value="3">-</option>
						<option value="1">Guest</option>
						<option value="2">Admin</option>
					</select>
					<br>
					<button type="submit" name="submit" >Sign Up</button>
				</div>
			</form>
			</div>
			'
		;
?>
