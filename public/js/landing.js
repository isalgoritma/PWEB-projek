$(function(){
    console.log('Landing JS loaded');
    // highlight table row on hover
    $('table.table tbody tr').hover(function(){ $(this).toggleClass('table-primary'); });
});
