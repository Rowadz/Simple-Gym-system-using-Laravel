$(document).ready(function() {
    var Schedule_form = $('#Schedule_form');
    Schedule_form.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: Schedule_form.attr('action'),
            type: "POST",
            data: Schedule_form.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: 'Schedule Added',
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: 'success'
                });
                $(':input', '#Schedule_form').removeAttr('checked').removeAttr('selected').
                not(':button, :submit, :reset, :hidden,:radio,:checkbox').val('');
            } else {
                swal({
                    title: 'Something is not right with you data',
                    text: response.errors,
                    timer: 2000,
                    button: true,
                    type: 'error'
                });
            }
        }).fail(function() {
            swal({
                title: "Fail",
                text: "Something in not right",
                timer: 2000,
                button: true,
                type: 'error'
            });
        });
    });

    var add_exercise = $('#add_exercise');
    add_exercise.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: add_exercise.attr('action'),
            method: 'POST',
            data: add_exercise.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Success",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: 'success'
                });
                $(':input', '#add_exercise').removeAttr('checked').removeAttr('selected').
                not(':button, :submit, :reset, :hidden,:radio,:checkbox').val('');
            } else {
                swal({
                    title: 'Something is not right with you data',
                    text: response.errors,
                    timer: 2000,
                    button: true,
                    type: 'error'
                });
            }
        }).fail(function() {
            swal({
                title: "Fail",
                text: "Something in not right",
                timer: 2000,
                button: true,
                type: 'error'
            });
        });
    });

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
                    title: "Locker Added",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: 'success'
                });
                $(':input', '#Locker_form').removeAttr('checked').removeAttr('selected').
                not(':button, :submit, :reset, :hidden,:radio,:checkbox').val('');
            } else {
                swal({
                    title: "Error",
                    text: response.errors,
                    timer: 2000,
                    button: false,
                    type: 'error'
                });
            }
        }).fail(function() {
            swal({
                title: "Fail",
                text: "Something in not right",
                timer: 2000,
                button: true,
                type: 'error'
            });
        });
    });
});