console.log('ajax.js loaded');

$('form[action]').on('submit',function(e){
  e.preventDefault();
  
  var reload = {dataType: "script",cache: true};
  var url = $(this).attr('action');
  console.log("prevented submit from " + url);
  
  $.ajax(url+"&ajax", {
    dataType: "html",
    method: 'POST',
    data: $(this).serialize()+'&action=new',
    success: function(data){
      console.log(data);
      $('div.container').html(data);
      // Re-attach ajax and restart client
      $.ajax('/js/ajax.js',reload);
      $.ajax('/js/main.js',reload);
    }
  });
  
});

$('a[href]').on('click',function(e){
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
