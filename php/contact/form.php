<?php if( isset($error) ): ?>
<div class="alert alert-danger" role="alert">
  <?php echo $error; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif;?>
<form action="index.php?p=contact/form" name="<?=$id?>" <?php echo isset($error)?' class="was-validated" ':'' ?> method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="" value="<?php echo isset($name) ? $name : '' ?>" <?php echo isset($data['error'])?'required':''; ?>>
  </div>

  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" name="contact" placeholder="" value="<?php echo isset($contact) ? $contact : '' ?>" <?php echo isset($data['error'])?'required':''; ?>>
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="" value="<?php echo isset($phone) ? $phone : '' ?>" <?php echo isset($data['error'])?'required':''; ?>>
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="" value="<?php echo isset($email) ? $email : '' ?>" <?php echo isset($data['error'])?'required':''; ?>>
  </div>

  <?php if( isset($id) && is_numeric($id) ): ?>
    <input type="hidden" name="id" value="<?php echo $id ?>" />
  <?php endif; ?>
  
  <button type="submit" name="action" value="<?php echo isset($id) && is_numeric($id)  ? 'update' : 'new' ?>" class="btn btn-success">Save</button>
</form>
