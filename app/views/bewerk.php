<div class="container">
  <form method="post" action="<?= ROOT; ?>admin/update/<?= $edits["page_id"] ?>">
    <div class="form-group">
      <label for="naam">Pagina naam</label>
      <input type="text" name="naam" class="form-control" value="<?= $edits["page_name"]; ?>">
    </div>
    <div class="form-group">
      <label for="content">Pagina content</label>
      <textarea class="form-control" name="content" rows="8" cols="80" style="resize: none;"><?= $edits["page_content"]; ?></textarea>
    </div>
    <button type="submit" name="bewerken" class="btn btn-primary">Bewerken</button>
  </form>
</div>
