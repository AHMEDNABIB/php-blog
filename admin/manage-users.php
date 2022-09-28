<?php
 include 'partials/header.php';
?>

		<section class="dashboard">
			<div class="container dashboard__container">
				<aside>
					<ul>
						<li>
							<a href="add-post.php">
								<i class="uil uil-pen"></i>
								<h5>Add Post</h5>
							</a>
						</li>
						<li>
							<a href="index.php">
								<i class="uil uil-postcard"></i>
								<h5>Manage Post</h5>
							</a>
						</li>
						<li>
							<a href="add-user.php">
								<i class="uil uil-plus"></i>
								<h5>Add User</h5>
							</a>
						</li>
						<li>
							<a href="manage-users.php" class="active">
								<i class="uil uil-alt"></i>
								<h5>Manage User</h5>
							</a>
						</li>

						<li>
							<a href="add-categoty.php">
								<i class="uil uil-edit"></i>
								<h5>Add Category</h5>
							</a>
						</li>
						<li>
							<a href="manage-categories.php">
								<i class="uil uil-pen"></i>
								<h5>Manage Categories</h5>
							</a>
						</li>
					</ul>
				</aside>

				<main>
					<h2>Manage Category</h2>
					<table>
						<thead>
							<tr>
								<th>Title</th>
                                <th>Category</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, voluptatem.</td>
                                <td>Wild Life</td>
								<td>
									<a href="edit-post.php" class="btn sm"
										>Edit</a
									>
								</td>
								<td>
									<a
										href="delete-category.php"
										class="btn sm danger"
										>Delete</a
									>
								</td>
								
							</tr>
						
						</tbody>
					</table>
				</main>
			</div>
		</section>

		<!-- Footer -->
		<footer>
			<div class="container footer__container">
				<div class="footer__copyright">
					<small>Copyright &copy; by Ahmed Nabib</small>
				</div>
			</div>
		</footer>
	</body>
</html>
