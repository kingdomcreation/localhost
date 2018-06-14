  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <!-- JavaScript -->
  <script>
  window.client=function(){
      client.q.push(arguments)
  };
  client.q=[];
  client.d=+new Date;
  </script>
  <div class="container">
    <?php index($data,$index); ?>
  </div>
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/js/ajax.js"></script>
  <script>
  client('send',<?php echo json($data) ?>);
  client('init');
  </script>
  <script src="/js/main.js"></script>
