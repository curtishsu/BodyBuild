<h3><?=$name?>'s Workouts</h3>
<table id="workout_display">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Intensity</th>
    </tr>
   <?php foreach ($positions as $position): ?>
    <tr class="tables">
        <td><?= $position["workout_name"] ?></td>
        <td><?= $position["description"] ?></td>
        <td><?= $position["intensity"] ?></td>
    </tr>
    <?php endforeach ?>
</table>
<div>
    <p> See the content of one your workouts <a href="workoutsearch.php">here</a></p>
</div>
