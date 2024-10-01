<table class="table table-bordered table-striped">
    <div class="errMsg"></div>
    <thead class="table-dark">
        <tr>
            <th class="col">Teams</th>
            <th class="col">Spread</th>
            <th class="col">Ben</th>
            <th class="col">Dion</th>
            <th class="col">James</th>
        </tr>
    </thead>

    <tbody>
        <?php
        if ($rowCount > 0) {
            while ($row = $stmt->fetch()) {
                $id = $row['id'];
                $home_team = $row['home_team'];
                $away_team = $row['away_team'];
                $home_spread = $row['home_spread'];
                $away_spread = $row['away_spread'];
                $winning_team = $row['winning_team'];
                $ben_answer = $row['ben_answer'];
                $dion_answer = $row['dion_answer'];
                $james_answer = $row['james_answer'];

        ?>
                <tr class="">
                    <td scope="row"><img src="./img/<?= $away_team ?>.png" alt=""><?= ucwords($away_team); ?></td>
                    <td><?= $away_spread ?></td>
                    <td><input type="radio" name="ben_answer_<?= $id ?>" id="ben_<?= $away_team ?>" <?= ($ben_answer == 'A') ? "checked" : '' ?> onclick="updateStatus('<?= $id ?>','ben_answer','A');"></td>
                    <td><input type="radio" name="dion_answer_<?= $id ?>" id="dion_<?= $away_team ?>" <?= ($dion_answer == 'A') ? "checked" : '' ?> onclick="updateStatus('<?= $id ?>','dion_answer','A');"></td>
                    <td><input type="radio" name="james_answer_<?= $id ?>" id="james_<?= $$away_team ?>" <?= ($james_answer == 'A') ? "checked" : '' ?> onclick="updateStatus('<?= $id ?>','james_answer','A');"></td>
                </tr>

                <tr class="">
                    <td scope="row"><img src="./img/<?= $home_team ?>.png" alt=""><?= ucwords($home_team); ?></td>
                    <td><?= $home_spread ?></td>
                    <td><input type="radio" name="ben_answer_<?= $id ?>" id="ben_<?= $home_team ?>" <?= ($ben_answer == 'H') ? "checked" : '' ?> onclick="updateStatus('<?= $id ?>','ben_answer','H');"></td>
                    <td><input type="radio" name="dion_answer_<?= $id ?>" id="dion_<?= $home_team ?>" <?= ($dion_answer == 'H') ? "checked" : '' ?> onclick="updateStatus('<?= $id ?>','dion_answer','H');"></td>
                    <td><input type="radio" name="james_answer_<?= $id ?>" id="james_<?= $home_team ?>" <?= ($james_answer == 'H') ? "checked" : '' ?> onclick="updateStatus('<?= $id ?>','james_answer','H');"></td>
                </tr>

                <tr>
                    <td colspan="5"></td>
                </tr>
            <?php }
        } else { ?>
            <td colspan='4'>No Users Found</td>
        <?php } ?>
    </tbody>
</table>