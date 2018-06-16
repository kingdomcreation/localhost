console.log('ajax.js loaded');

$('form[action]').on('submit',function(e){
  e.preventDefault();
  
  var form = $(this);
  var url = $(this).attr('action');
  console.log("prevented submit from " + url);
  
  $.ajax(url+"&json", {
    dataType: "json",
    method: 'POST',
    data: {
      email: $('input[name="email"]').val(),
      action: "new"
    },
    success: function(data){
      console.log(data);
      if(data.error){
        $('div.error').fadeOut().remove();
        form.before('<div class="error">'+data.error+'</div>');
        form.on('change',function(){
          $('div.error').fadeOut().remove();
        })
      }else if(data.status && data.status=='success'){
        console.log(data.status);
        form.html('<a href="../">Back</a>');
      }
      // Re-attach ajax and restart client
      //$.ajax('/js/ajax.js',reload);
      //$.ajax('/js/main.js',reload);
    }
  });
  
});

$('a[href]').not('[data-toggle]').on('click',function(e){
  e.preventDefault();
  
  var reload = {dataType: "script",cache: true};
  var url = $(this).attr('href');
  console.log("prevented click from " + url);
  
  $.ajax(url+"?ajax",{
    dataType: "html",
    success: function(data){
      console.log(data);
      $('div.container').html(data);
      // Re-attach ajax and restart client
      $.ajax('/js/ajax.js',reload);
      $.ajax('/js/main.js',reload);
    }
  });
  
});
