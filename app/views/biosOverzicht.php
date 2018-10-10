<div class="container">
    <h2>Bioscoop beschikbaarheid</h2>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Dag</th>
                <th scope="col">Begintijd</th>
                <th scope="col">Eindtijd</th>
                <th scope="col">Optie</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach ($tijden as $tijd): ?>
                    <td></td>
                    <td><?= $tijd['start_time']; ?></td>
                    <td><?= $tijd['end_time']; ?></td>
                    <td><a title="Tijden bewerken"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a></td>
                <?php endforeach; ?>
            </tr>
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
                    <td><?= $info["car_accessibility"]; ?></td>
                    <td><?= $info["ov_accessibility"]; ?></td>
                    <td<?=  $info["bike_accessibility"]; ?>></td>
                    <td><?= $info["wheelchair_accessibility"]; ?></td>
                    <td><?= $info["cinema_conditions"]; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>