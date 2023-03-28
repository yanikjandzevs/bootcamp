<div class="card el_<?= $form_id; ?>">
  <div class="heading">
    <h5><?= $heading; ?></h5>
  </div>
  <form id="<?= $form_id; ?>" data-storage="users" action="<?= $url; ?>" method="post" class="content">
  <div class="row">
        <div class="col-5">
            <label>
            Street
            <input type="text" name="street" required />
            </label>
        </div>
        <div class="col-5">
            <label>
            Sq. m.
            <input type="number" name="sqm" required />
            </label>
        </div>
        </div>
        <div class="row">
        <div class="col-5">
            <label>
            Price
            <input type="number" name="price" required />
            </label>
        </div>
  </div>

    <p class="note"></p>

    <button type="submit" class="btn stretch">Save information</button>
  </form>
</div>