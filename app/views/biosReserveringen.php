<div class="container">
    <h2>Reserveringen</h2>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Klantnaam</th>
                <th scope="col">Telefoonnummer</th>
                <th scope="col">Dag</th>
                <th scope="col">Begintijd</th>
                <th scope="col">Eindtijd</th>
                <th scope="col">Aantal personen</th>
<!--                <th scope="col">Subtotaal</th>-->
<!--                <th scope="col">Totaal</th>-->
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach ($reserveringen as $reservering): ?>
                    <td><?= $reservering["first_name"] . ' ' . $reservering["last_name"]; ?></td>
                    <td><?= $reservering["phone_number"]; ?></td>
                    <td><?= $reservering["reservation_date"]; ?></td>
                    <td><?= $reservering["begin_time"]; ?></td>
                    <td><?= $reservering["end_time"]; ?></td>
                    <td><?= $reservering["amount_persons"]; ?></td>
<!--                    <td>&euro;--><?//= $reservering["subtotal"]; ?><!--</td>-->
<!--                    <td>&euro;--><?//= $reservering["total"]; ?><!--</td>-->
                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>
