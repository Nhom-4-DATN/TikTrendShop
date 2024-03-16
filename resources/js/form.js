import $ from "jquery";
import toastr from 'toastr';



$(document).ready(function() {
    $('.form-submit').submit(function(e){
        e.preventDefault();
        const data = $(this).serialize();
        if(data){
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data : data,
                beforeSend : function(){
                    $(this).find("button[type=submit]").attr('disabled',true)
                },
                success: function(res){
                    toastr.success(res.message);
                    document.querySelector('.form-submit').reset();
                },
                complete: function () {
                    $(this).find("button[type=submit]").attr('disabled',false)
                }
            })
        }
    })

    $('.upload-image').change(function() {
        const inputFileImage = $(this)[0];
        if(inputFileImage.files.length > 0){
            const filePath = URL.createObjectURL(inputFileImage.files[0]);
            $(".show-image").html(`<img class="img-fluid  w-100 h-100" src="${filePath}">`)
        }
    })

    $(document).on('change', '.show-select-provinces', function() {
        const id = $(this).find('option:selected').data('id')
        if (id) {
            $('.address-input').prop('disabled', true);
            $.ajax({
                url: provinces_url + '?id_provinces=' + id,
                method: 'GET',
                success: function(responseHTML) {
                    $('.provinces').html(responseHTML);
                    $('.address-input').prop('disabled', false);
                },
                error: function(responseHTML) {
                    $('.address-input').prop('disabled', false);
                }
            })
        }
    })
    $(document).on('change', '.show-select-district', function() {
        const id_provinces = $('.show-select-provinces').find('option:selected').data('id')
        const id_district = $(this).find('option:selected').data('id')
        if (id_district) {
           $('.address-input').prop('disabled', true);
            $.ajax({
                url: provinces_url + '?id_provinces=' + id_provinces + '&id_district=' + id_district,
                method: 'GET',
                success: function(responseHTML) {
                    $('.provinces').html(responseHTML);
                   $('.address-input').prop('disabled', false);
                },
                error: function(responseHTML) {
                   $('.address-input').prop('disabled', false);
                }
            })
        }
    })
});

