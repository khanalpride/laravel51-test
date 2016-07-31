jQuery(document).ready(function(){
    jQuery('a[data-toggle="modal"]').each(function(){
        var item = jQuery(this);

        item.on('click', function(e){
            e.preventDefault();
            var url = jQuery(this).data('url');

            jQuery('.zipcode-form').attr('action', url);
        });
    });
});