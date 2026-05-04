<!-- Modal -->
<div class="modal" id="<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $id ?>Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="<?php echo $id ?>Label"><?php echo $title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php index($data,$index) ?>
      </div>
    </div>
  </div>
</div>
