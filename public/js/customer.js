$(document).ready(function() {
    var Locker_form = $('#Locker_form');
    Locker_form.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: Locker_form.attr('action'),
            method: 'POST',
            data: Locker_form.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Success",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: "success"
                });
                $('#lockerModel').modal('toggle');
                $('#disableWhenChoose').addClass('disabled');
                $('#disableWhenChoose').addClass('btn btn-danger');
            } else {
                swal({
                    title: "Error",
                    text: response.errors,
                    timer: 2000,
                    button: true,
                    type: "error"
                });
            }
        }).fail(function() {
            swal({
                title: "Fail",
                text: "Can not connect now",
                timer: 2000,
                button: true,
                type: "error"
            });
        });
    });
});