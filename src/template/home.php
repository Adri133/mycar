<h2>Home</h2>
<?php if(isset($_GET['status'])): ?>
<div class="<?php echo $_GET['status'] ?>"><?php echo $_GET['status'] ?></div>
<?php endif; ?>
<a href="add">Add</a>