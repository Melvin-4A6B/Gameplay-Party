<div class="container">
    <div class="card">
        <div class="card-body my-4">
            <h3 class="card-title text-center mb-4">Bioscoop toevoegen</h3>
            <form method="post" action="admin/addCinema/">
                <div class="col-md-8 m-auto">
                    <div class="form-group">
                      <label for="">Bioscoop naam	</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Straatnaam	</label>
                      <input type="text" name="straatnaam" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Huisnummer	</label>
                      <input type="text" name="huisnummer" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Postcode	</label>
                      <input type="text" name="postcode" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Plaats	</label>
                      <input type="text" name="plaats" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Stad	</label>
                      <input type="text" name="stad" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Auto Bereikbaarheid	</label>
                        <textarea type="text" name="auto" class="form-control" style="height: 140px; resize: none;" id=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">OV Bereikbaarheid	</label>
                        <textarea type="text" name="ov" class="form-control" style="height: 140px; resize: none;" id=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Fiets Bereikbaarheid	</label>
                        <textarea type="text" name="fiets" class="form-control" style="height: 140px; resize: none;" id=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Voorwaarden	</label>
                        <textarea type="text" name="voorwaarden" class="form-control" style="height: 140px; resize: none;" id=""></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Rolstoel toegankelijkheid	</label>
                      Ja <input type="radio" name="rolstoel" value="ja">
                      Nee <input type="radio" name="rolstoel" value="nee">
                    </div>
                    <div class="text-right">
                        <button type="submit" name="addCinema" class="form-control btn btn-primary">Bioscoop toevoegen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
