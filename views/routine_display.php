<h1>Workout: <?= $workout_name?></h1>
<table id="routine_display">
    <tr>
        <th>Sets</th>
        <th></th>
        <th>Reps</th>
        <th>Exercises</th>
        <th>Muscle worked</th>
        <th>Description</th>
    </tr>
   <?php foreach ($positions as $position): ?>
    <tr class="tables">
        <td><?= $position["sets"] ?></td>
        <td>x</td>
        <td><?= $position["reps"] ?></td>
        <td><?= $position["exercise"] ?></td>
        <td><?= $position["muscle"]?></td>
        <td><?= $position["description"]?></td>
    </tr>
    <?php endforeach ?>
</table>

<p>Want to add more exercises? Search for them <a href="search.php">here</a> or add to them <a href="add.php">here</a></p>
