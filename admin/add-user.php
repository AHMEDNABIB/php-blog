<?php
 include 'partials/header.php';
?>

		<section class="form__section">
			<div class="container form__section-container">
				<h2>Add User</h2>
				<div class="alert__message error">
					<p>This is error message</p>
				</div>

				<form action="" enctype="multipart/form-data">
					<input type="text" placeholder="First Name" />
					<input type="text" placeholder="Last Name" />
					<input type="text" placeholder="Username" />
					<input type="text" placeholder="Email" />
					<input type="text" placeholder="Create Password" />
					<input type="text" placeholder="confirm Password" />
                    <select>
						<option value="0">Author</option>
						<option value="1">Admin</option>
					</select>

					<div class="form__control">
						<label for="avatar"></label>
						<input type="file" id="avatar" />
					</div>

					<button type="submit" class="btn">Add User</button>

					
				</form>

				
			</div>
		</section>

		<div class="container footer__container">
			<div class="footer__copyright">
				<small>Copyright &copy; by Ahmed Nabib</small>
			</div>
		</div>
	</body>
</html>
