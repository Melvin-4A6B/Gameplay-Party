<div class="container">
    <div class="card">
        <div class="card-body my-4">
            <?php foreach ($naam as $name): ?>
                <h3 class="card-title text-center mb-4">Reserveren voor <?= $name['cinema_name'] ?></h3>
            <?php endforeach; ?>
            <form method="post" action="#">
                <div class="col-md-10 m-auto">
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="">Voornaam </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">Achternaam</label>
                            <input type="text" name="straatnaam" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Telefoonnummer </label>
                        <input type="tel" name="huisnummer" class="form-control">
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-md-7 mt-1 ">
                            <label for="">Straatnaam</label>
                            <input type="text" name="postcode" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-8 mt-1">
                            <label for="">Huisnummer</label>
                            <input type="number" name="plaats" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-4 mt-1">
                            <label for="">Toevoeging</label>
                            <input type="text" name="stad" class="form-control">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-md-7">
                            <label for="">Stad</label>
                            <input type="text" name="stad" class="form-control">
                        </div>
                        <div class="col-md-5">
                            <label for="">Postcode </label>
                            <input type="text" name="stad" class="form-control">
                        </div>
                    </div>
                    <label for="">Selecteer gewenste datum</label>
                    <select class="form-control mb-3" <?= $disabled[0]; ?>>
                        <?= $disabled[1]; ?>
                        <?php foreach ($tijden as $tijd): ?>
                            <?php for($i = 1; $i < count($tijden); $i++): ?>
                            <option class="form-control">
                                <?= $dag[date("N", strtotime($tijd['start_time']))] . " " .  date("d-m-Y", strtotime($tijd['end_time'])) . " van " . date("H:i", strtotime($tijd['start_time'])) ?>
                                 - <?= date("H:i", strtotime($tijd['end_time'])) ." zaal " . $zaal[$i]["room_id"]; ?>
                            </option>
                            <?php endfor; ?>
                        <?php endforeach; ?>
                    </select>
                    <label for="">Aantal personen</label>
                    <input type="number" name="aantal_personen" min="0" class="form-control mb-4">
                    <button type="submit" name="addCinema" class="form-control btn btn-primary">Reserveer!</button>
                </div>
            </form>
        </div>
    </div>
</div>
