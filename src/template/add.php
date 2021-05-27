<h2>Add new car</h2>
<?php if(isset($_GET['status'])): ?>
<div class="<?php echo $_GET['status'] ?>"><?php echo $_GET['status'] ?></div>
<?php endif; ?>
<form action="addform" method="post">
    <label for="name">Name :</label>
    <input type="text" name="name" required>
    <label for="model">Model :</label>
    <input type="text" name="model" required>
    <label for="price">Price :</label>
    <input type="number" name="price" required>
    <label for="color">Color :</label>
    <input type="text" name="color" required>
    <button type="submit">Save</button>
</form>