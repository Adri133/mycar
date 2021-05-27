<?php 
    require './src/data/datamanager.php';
    require './src/form/sortform.php';
    
    $size = count($cars);
?>
<h2>Home</h2>
<form action="" method="get">
    <span>Short by :</span>
    <input type="radio" name="sort" value="Expensive">
    <label for="desc">Expensive</label>
    <input type="radio" name="sort" value="Cheaper">
    <label for="asc">Cheaper</label>
    <input type="submit">
</form>
<?php if(isset($_GET['status'])): ?>
<div class="<?php echo $_GET['status'] ?>"><?php echo $_GET['status'] ?></div>
<?php endif; ?>
<div>
<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Model</th>
        <th>Prix</th>
        <th>Color</th>
    </thead>
    <tbody>
        <?php for($i=0;$i < $size; $i++): ?>
        <tr>
            <?php foreach($cars[$i] as $key => $value): ?>
            <td><?php echo $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endfor; ?>
    </tbody>

</table>
</div>
<a href="add">Add</a>