$(function(){
    fx = {
        'initModel': function(){
            if($('.model-window').length==0)
            {
               return $('<div>').addClass('model-window').appendTo('body');
            }
            else
            {
                return $('.model-window')
            }
        }
    }
   $('a.link').bind('click',function(e){
       e.preventDefault();
       data = $(this).html();
       console.log(data);
       modal = fx.initModel();
   })
    $.ajax({
        type:'GET',
        url:'/ajax',
        data: 'id='+data,
        success: function(data){
          modal.append(data);
        },
        error: function(msg){
            modal.append(msg);
        }
        //beforesend: function();
    })
});