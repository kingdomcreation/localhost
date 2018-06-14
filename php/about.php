<h1><?php echo $title; ?></h1>

<?php
$data['about'] = "This is cool!";

index($data,'contact');
?>
<script>
if(typeof window.client == 'function'){
client('data',<?php echo json_encode($data); ?>);
}
</script>
