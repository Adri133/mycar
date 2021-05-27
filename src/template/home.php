<?php 
    require './src/data/datamanager.php';
    $cars = select_all_car();
    $size = count($cars);
?>
<h2>Home</h2>
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