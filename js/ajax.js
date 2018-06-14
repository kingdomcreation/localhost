console.log('ajax.js loaded');

$('form[action]').on('submit',function(e){
  e.preventDefault();
  
  var url = $(this).attr('action');
  console.log("prevented submit from " + url);
  
  // Use jQuery $.ajax(url,{options}) method
  
});

$('a[href]').on('click',function(e){
  e.preventDefault();
  
  var url = $(this).attr('href');
  console.log("prevented click from " + url);
  
  // Use jQuery $.ajax(url,{options}) method
  
});
