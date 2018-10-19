<div class="container">
    <div class="card">
        <div class="card-body my-4">
            <h3 class="card-title text-center mb-4">Bioscoop beschikbaarheid toevoegen</h3>
            <form method="post" action="admin/addCinema/">
                <div class="col-md-8 m-auto">
                    <div class="form-group">
                      <label for="">Zaalnummer</label>
                        <select class="form-control" name="zaal" id="">
                            <option value="">zaal 1</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="">Datum</label>
                      <input type="date" name="datum" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">starttijd	</label>
                      <input type="text" name="starttijd" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">eindtijd</label>
                      <input type="text" name="eindtijd" class="form-control">
                    </div>
                    <div class="text-right">
                        <button type="submit" name="addTime" class="form-control btn btn-primary">Beschikbaarheid toevoegen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
