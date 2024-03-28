import $ from "jquery";
import { Modal } from 'bootstrap';
import toastr from 'toastr';
const modalLocation = new Modal('#modal-location');
const modalMessage = new Modal(idModalMessage);



$('#modal-location .btn-submit-form').click(function(e) {
    const form = $( "#"+ $(this).attr('data-for'));
    const data = form.serialize();
    $.ajax({
        data : data,
        url : form.attr('action'),
        method : form.attr('method'),
        success : function(data) {
            toastr.success(data.message);
            $.ajax({
                url : renderLocation,
                method : 'GET',
                success : function(resHtml){
                    $('.list-location').html(resHtml);
                }
            });
            modalLocation.hide()
        }
    })
});

$('.btn-url').click(function(e) {
    e.preventDefault();
    $.ajax({
        url :  $(this).attr('data-url'),
        method : 'DELETE',
        data: { _token: csrfToken},
        success : function(data) {
            toastr.success(data.message);
            $.ajax({
                url : renderLocation,
                method : 'GET',
                success : function(resHtml){
                    $('.list-location').html(resHtml);
                }
            });
            modalMessage.hide()
        }
    })
});


modalLocation._element.addEventListener('show.bs.modal', function (e) {
    const url = e.relatedTarget?.dataset.url;
    $.ajax({
        url :  url,
        method : 'get',
        success : function(resHtml) {
            $('.form-location').html(resHtml);
        }
    })
});

modalMessage._element.addEventListener('show.bs.modal', function (e){
    const url = e.relatedTarget?.dataset.url;
    if(url){
        document.querySelector('.btn-url').setAttribute('data-url' , url) ;
    }
});

modalMessage._element.addEventListener('show.bs.modal', function (e){
    const url = e.relatedTarget?.dataset.url;
    if(url){
        document.querySelector('.btn-url').setAttribute('data-url' , url) ;
    }
});
