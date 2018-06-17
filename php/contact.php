<?php echo isset($error) ? $error : '' ?>
<form action="/index.php?p=contact/form" method="post">
  <input name="email" value="<?php echo isset($email) ? $email : '' ?>">
  <button type="submit" for="<?=$id?>" name="action" value="new">Save</button>
</form>
