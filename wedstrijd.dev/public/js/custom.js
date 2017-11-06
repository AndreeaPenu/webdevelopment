/**
 * Created by Andre on 03-Nov-17.
 */


$(document).ready(function(){
    $(document).delegate(".like","click",function(e) {
        e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/participation/like',
            type: 'POST',
            dataType: 'json',
            data: {'id': this.id},
            success: function(data){
                console.log('good: '+ data);
            }
        });



        $.ajax("/participation/like?id=1", {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: 'json'

        })
            .done("iets doen als het lukt");
    });

/*    function checkLike($participationId){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/participation/'+ $participationId +'/isLikedByMe',
            type: 'GET',
            success: function(){
                console.log('delete like');
            }
        });
    }*/
});