<?php
	include_once 'includes/db.php';
?>

<div>
	<div class="form">
		<div>
			<h2>Sign Up Here</h2>
		</div>
		<form action="includes/signup.php" method="POST" id="form">
			<div class="inputarea">
				<input type="text" name="first" placeholder="Firstname">
				<input type="text" name="last" placeholder="Lastname">
				<br>
				<input type="text" name="usrnm" placeholder="Username">
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
	<div id="content" class="row list">
		<div>
			<h2>Attendees</h2>
		</div>
		<ul>
			<?php
			for($i = 0; $i < $rows; $i++) { 
				echo '<a class="col-12 med-col-6" href="index.php?id='.$users[$i]->id.'"><li>'.$users[$i]->firstname.' '.$users[$i]->lastname.'</li></a>';
			}
			?>
		</ul>
	</div>
	<div class="form">
		<div>
			<h2>Login Here</h2>
		</div>
		<form action="includes/login.php" method="POST" id="form">
			<div class="inputarea">
				<input type="text" name="usrnm" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<br>
				<button type="submit" name="submit" >Login</button>
			</div>
		</form>
	</div>
</div>
