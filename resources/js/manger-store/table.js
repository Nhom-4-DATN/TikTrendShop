import $ from 'jquery';
import toastr from 'toastr';
$(document).ready(function() {
    $(document).on('click', '.filter-table', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            method: 'GET',
            success : function(html){
                $('.blog-table').html(html);
            }
        })
    })
})
$('.check-table-all').change(function(){
   $('.check-table-item').prop('checked',$(this).is(':checked'));
})
$('.check-table-item').change(function() {
    $('.check-table-all').prop('checked',false);
});

$('.delete-now').click(function(e){
    e.preventDefault();
    let data =[];
     $('.check-table-item:checked').filter(function(){
        data.push($(this).attr('value'));
     });
     const actionUrl = $(this).attr('action') + '?id=' + data.join(',');
     $(this).attr('action', actionUrl);
     $(this).submit();
})