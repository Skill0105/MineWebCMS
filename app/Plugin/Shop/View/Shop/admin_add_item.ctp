<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('SHOP__ITEM_ADD') ?></h3>
        </div>
        <div class="box-body">
          <form action="<?= $this->Html->url(array('controller' => 'shop', 'action' => 'add_item_ajax')) ?>" method="post" data-ajax="true" data-redirect-url="<?= $this->Html->url(array('controller' => 'shop', 'action' => 'index', 'admin' => true)) ?>">

            <div class="ajax-msg"></div>

            <div class="form-group">
              <label><?= $Lang->get('GLOBAL__NAME') ?></label>
              <input name="name" class="form-control"type="text">
            </div>

            <div class="form-group">
              <label><?= $Lang->get('SHOP__ITEM_DESCRIPTION') ?></label>
              <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label><?= $Lang->get('SHOP__CATEGORY') ?></label>
              <select class="form-control" name="category">
                <?php foreach ($categories as $key => $value) { ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php } ?>
              </select>
            </div>
            <input type="hidden" name="category_default">

            <div class="form-group">
              <label><?= $Lang->get('SHOP__ITEM_PRICE') ?></label>
              <input name="price" class="form-control" type="text">
            </div>

            <div class="form-group">
              <label><?= $Lang->get('SHOP__ITEM_IMG_URL') ?></label>
              <input name="img_url" class="form-control" type="text">
            </div>

            <div class="form-group">
              <label><?= $Lang->get('SERVER__TITLE') ?></label>
              <select class="form-control" name="servers" multiple>
                <?php foreach ($servers as $key => $value) { ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group">
              <label><?= $Lang->get('GLOBAL__SERVER_COMMANDS') ?></label>
              <input name="commands" class="form-control" type="text">
              <small><b>{PLAYER}</b> = Pseudo <br> <b>[{+}]</b> <?= $Lang->get('SERVER__PARSE_NEW_COMMAND') ?> <br><b><?= $Lang->get('GLOBAL__EXAMPLE') ?>:</b> <i>give {PLAYER} 1 1[{+}]broadcast {PLAYER} ...</i></small>
            </div>

            <div class="form-group">
              <label><?= $Lang->get('SHOP__ITEM_TIMED_COMMAND') ?></label>
              <div class="radio">
                <input name="timedCommand" type="radio" value="true"> 
                <label>
                  <?= $Lang->get('GLOBAL__ENABLED') ?>
                </label>
              </div>
              <div class="radio">
                <input name="timedCommand" type="radio" value="false" checked>
                <label>
                  <?= $Lang->get('GLOBAL__DISABLED') ?>
                </label>
              </div>
              <small><i><?= $Lang->get('SHOP__ITEM_TIMED_COMMAND_DESC') ?></i></small>
            </div>
            <div id="timedCommands" style="display:none;">
              <div class="form-group">
                <label><?= $Lang->get('GLOBAL__SERVER_COMMANDS') ?></label>
                <input type="text" name="timedCommand_cmd" class="form-control">
                <small><b>{PLAYER}</b> = Pseudo <br> <b>[{+}]</b> <?= $Lang->get('SERVER__PARSE_NEW_COMMAND') ?> <br><b><?= $Lang->get('GLOBAL__EXAMPLE') ?>:</b> <i>give {PLAYER} 1 1[{+}]broadcast {PLAYER} ...</i></small>
              </div>
              <div class="form-group">
                <label><?= $Lang->get('SHOP__ITEM_TIMED_COMMAND_TIME') ?></label>
                  <input type="text" name="timedCommand_time" placeholder="Minutes" class="form-control">
              </div>
            </div>

            <div class="pull-right">
              <a href="<?= $this->Html->url(array('controller' => 'shop', 'action' => 'index', 'admin' => true)) ?>" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
              <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  $('input[type="radio"][name="timedCommand"]').change(function(e) {
    if($('input[type="radio"][name="timedCommand"]').serialize() == "timedCommand=true") {
      $('#timedCommands').slideDown(500);
    } else {
      $('#timedCommands').slideUp(500);
    }
  });
</script>
