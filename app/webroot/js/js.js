
/* by milka */
$(document).ready(function() {
$('#search_light').click(function() { 
$('#search_light').hide();    
$('.search_hards').show();
$('.search_hards_down').show();          
});

$('#search_hard').click(function() { 
$('#search_light').show();    
$('.search_hards').hide();
$('.search_hards_down').hide();          
});
});


/* end by milka */