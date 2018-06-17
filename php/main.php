  <!-- Latest compiled and minified CSS
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  -->
  <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
     <a class="navbar-brand" href="/">Database</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <?php if( $index != 'login' ): ?>
     <div class="collapse navbar-collapse" id="navbar">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="" id="actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</a>
           <div class="dropdown-menu" aria-labelledby="actions">
             <a class="dropdown-item" href="#" data-target="#newContact" data-toggle="modal">New Contact</a>
             <a class="dropdown-item" href="#" data-target="#newContact" data-toggle="modal">New Message</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/logout">Logout</a>
         </li>
       </ul>
     </div>
   <?php endif; ?>
   </div>
  </nav>
  <!-- JavaScript -->
  <script>
  window.client=function(){
      client.q.push(arguments)
  };
  client.q=[];
  client.d=+new Date;
  </script>
  <div id="main" class="container mt-5">
    <?php index($data,$index); ?>
  </div>
  <?php 
  if( $index != 'login'){
    // Show modal for new contacts for main nav everwhere
    echo modal($data,[
      'id'=>'newContact',
      'title'=>'New Contact',
      'index'=>'contact/form',
    ],'modal');
  } ?>
  <script src="/vendor/jquery/jquery.min.js"></script>
  <!--<script src="/js/ajax.js"></script>-->
  <script>
  client('send',{});
  client('init');
  </script>
  
  <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="/js/main.js"></script>
