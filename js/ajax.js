console.log('ajax.js loaded');

$('form button[type="submit"]').click(function() {
    $('button[type="submit"]', $(this).parents("form")).removeAttr("clicked");
    $(this).attr("clicked", "true");
});
$('form[action]').on('submit',function(e){
  e.preventDefault();
  
  var a = $('button[type="submit"][clicked="true"]').val();
  var form = $(this);
  $.ajax(form.attr('action')+"&json", {
    dataType: "json",
    method: 'POST',
    data: $(this).serialize()+'&action='+a,
    success: function(data){
      console.log(data);
      if(data.error){
        $('div.error').fadeOut().remove();
        var alert = bs_alert(data.error);
        for (var name in data){
          if (data.hasOwnProperty(name)) {
            $('[name="'+name+'"]',form).attr("required","required");
          }
        }
        form.addClass('was-validated');
        form.before(alert);
        form.on('change',function(){
          $('div.error').fadeOut().remove();
        })
      }else if(data.status && data.status=='success'){
        console.log(data.status);
        //form.html('<a href="../">Back</a>');
        form.removeClass('was-validated');
        $('.modal').modal('hide');
        form[0].reset();
        
        
      }
      // Re-attach ajax and restart client
      
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
      $('#main').html(data);
      // Re-attach ajax and restart client
      $.ajax('/js/ajax.js',reload);
      $.ajax('/js/main.js',reload);
    }
  });
  
});
