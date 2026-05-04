console.log('main.js loaded');

function bs_alert(error){
  return `
  <div class="alert alert-danger error" role="alert">
    `+ error + `
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>`;
}
(function(w,k){
    while( a = w[k].q.pop() ){
        if( a[1] ){
          var data = a[1];
          console.table(a[1]);
        };
        if( a[0] === 'init'){
          console.log('init was called');
        };
    }
})(window,'client');
