
<?php if(!defined('LOAD_ONCE')): define('LOAD_ONCE',TRUE); ?>
<style>
.table-hover tr .buttons a{
  display: none;
}
.table-hover tr:hover .buttons a{
  display: inline;
}
</style>
<?php endif ;
$data['table'] = array(
  ['id'=>1,
    'name'=>'Western Scotts Inc.',
    'contact'=>'James Lyn',
    'phone'=>'(514) 220-1123',
    'email'=>'email@domain.com'],
  ['id'=>2,
    'contact'=>'Ferlan Scott',
    'name'=>'Gerard Incorporated',
    'phone'=>'(514) 220-1123',
    'email'=>'admin@demo.com']
);
$edit=true;
?>
<script>
if(typeof window.client == 'function'){
client('data',<?php echo json_encode($data['table']); ?>);
}
</script>
<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Email</th>
      <?php echo $edit?'<th style="width:200px"></th>':''; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data['table'] as $row):?>
    <tr>
      <td scope="row"><?php echo $row['id'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <?php if($edit): ?>
      <td class="buttons">
        <a href="/index.php/contact?edit=<?php echo $row['id'] ?>" 
          class="btn btn-sm"
          data-toggle="modal" 
          data-target="#editContact<?php echo $row['id'] ?>"
          >Edit</a>
          
        <a href="/index.php/contact?delete=<?php echo $row['id'] ?>"
          class="btn  btn-sm text-danger">Delete</a>
          
          <?php 
          echo modal($data,[
            'id'=>'editContact'.$row['id'],
            'title'=>'Edit',
            'label'=>'',
            'index'=>'contact/form',
            'data'=>$row,
          ],'modal');
          ?>

      </td>
      <?php endif; ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
