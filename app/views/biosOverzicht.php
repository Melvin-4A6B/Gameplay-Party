<div class="container">
    <h2>Bioscoop beschikbaarheid</h2>
    <a href="<?= ROOT; ?>admin/addcinema/"><button class="btn-primary"><i class="fa fa-plus"></i></button></a>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Datum</th>
                <th scope="col">Dag</th>
                <th scope="col">Tijd</th>
                <th scope="col">Optie</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($tijden as $tijd): ?>
            <tr>
                <td><?= date("d-m-Y", strtotime($tijd['end_time'])) ?></td>
                <td><?= $dag[date("N", strtotime($tijd['start_time']))] ?></td>
                <td><?= date("H:i", strtotime($tijd['start_time'])) ?> - <?= date("H:i", strtotime($tijd['end_time'])) ?></td>
                <td><a title="Tijden bewerken"><button class="btn btn-primary"><i class="far fa-edit"></i></button></a></td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <h2>Bioscoop informatie</h2>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Straatnaam</th>
                <th scope="col">Huisnummer</th>
                <th scope="col">Postcode</th>
                <th scope="col">Plaats</th>
                <th scope="col">Provincie</th>
                <th scope="col">Beschikbaarheid auto</th>
                <th scope="col">Beschikbaarheid ov</th>
                <th scope="col">Beschikbaarheid fiets</th>
                <th scope="col">Rolstoeltoegangkelijkheid</th>
                <th scope="col">Voorwaarden</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($data as $info): ?>
                <tr>
                    <td><?= $info["street"]; ?></td>
                    <td><?= $info["house_number"]; ?></td>
                    <td><?= $info["postal_code"]; ?></td>
                    <td><?= $info["city"]; ?></td>
                    <td><?= $info["state"]; ?></td>
                    <td><?= substr($info["car_accessibility"], 0 , 100);?>..</td>
                    <td><?= substr($info["ov_accessibility"], 0, 100); ?></td>
                    <td<?=  substr($info["bike_accessibility"], 0 , 100); ?>></td>
                    <td><?= substr($info["wheelchair_accessibility"], 0 , 100); ?></td>
                    <td><?= substr($info["cinema_conditions"], 0 , 100); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>