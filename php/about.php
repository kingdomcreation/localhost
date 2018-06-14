<h1><?php echo $title; ?></h1>

<?php
$data['about'] = "This is cool!";

index($data,'contact');
?>
<script>
  var data = <?php echo json($data); ?>;
</script>
