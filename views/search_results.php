<h3>Exercises for <?=$muscle?></h3>
<table id="search_results">
    <tr>
        <th>Name</th>
        <th>Muscle</th>
        <th>Weights?</th>
        <th>Description</th>
        <th>Link</th>
    </tr>
   <?php foreach ($positions as $position): ?>
    <tr class="tables">
        <td><?= $position["name"] ?></td>
        <td><?= $position["muscle"] ?></td>
        <td><?= $position["weights"] ?></th>
        <td><?= $position["description"] ?></td>
        <td><?= $position["link"] ?></td>
    </tr>
    <?php endforeach ?>
</table>

<div>
    <p>Like one of the exercises you see? Add it to your workout <a href="add.php">here</a></p>
</div>
