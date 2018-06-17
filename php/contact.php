<h1><?php echo $title; ?></h1>
<script>
if(typeof window.client == 'function'){
client('data',<?php echo json_encode(); ?>);
}
</script>
<?php
index($data,'contact/form');
