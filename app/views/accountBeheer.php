<div class="container">

  <h2>Bioscoop accounts</h2>

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Bioscoop</th>
          <th scope="col">E-mail</th>
          <th scope="col">Wachtwoord</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($cinemaUsers as $cinemaUser): ?>
          <tr>
            <th scope="row"><?= $cinemaUser["user_id"]; ?></th>
            <td><?= substr($cinemaUser["user_name"], 0 ,40); ?></td>
            <td><?= substr($cinemaUser["email"], 0 ,40); ?></td>
            <td class="cinemaPassword"><?= substr($cinemaUser["password"], 0 ,40); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  
</div>
