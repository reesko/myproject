jQuery( document ).ready(function() {
   
    jQuery('.subcat').click(function(e) {
        e.preventDefault();
        let room = jQuery(this).data('room');
        
        jQuery('.subcat').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.card').hide();
        jQuery('.card[data-room="' + room + '"]').show();
    });
    
});


