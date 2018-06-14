<?php echo isset($error) ? $error : '' ?>
<form action="/index.php?p=contact" method="post">
  <input name="email" value="<?php echo isset($email) ? $email : '' ?>">
  <button type="submit" name="action" value="new">Save</button>
</form>
