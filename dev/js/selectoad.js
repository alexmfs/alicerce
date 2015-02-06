function loadLive (select, load, results) {
  $(select).live('change',function(){
       var id = $(this).val();
       //alert('entrou '+id);
       $(results).load(load+id,function(data){
           $(results).html(data);
       });
       return false;
  });
}

function loadChange (select, load, results) {
  $(select).change(function(){
       var id = $(this).val();
       //alert('entrou '+id);
       $(results).load(load+id,function(data){
           $(results).html(data);
       });
       return false;
  });
}

loadChange('.search-order', 'imoveis/ordenacao','#resultado-buscas');
