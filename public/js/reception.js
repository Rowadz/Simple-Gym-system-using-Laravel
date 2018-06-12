$(document).ready(function() {
    var add_customer = $('#add_customer');
    add_customer.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: add_customer.attr('action'),
            type: 'POST',
            data: add_customer.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Done! Adding the customer",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: 'success'
                });
                $(':input', '#add_customer').removeAttr('checked').removeAttr('selected').
                not(':button, :submit, :reset, :hidden,:radio,:checkbox').val('');
            } else {
                swal({
                    title: 'Something is not right with your data',
                    text: response.errors,
                    timer: 2000,
                    type: 'error'
                });
            }
        }).fail(function() {
            swal({
                title: "Fail",
                text: "Cannot connent now",
                timer: 2000,
                buuton: true,
                type: 'error'
            });
        });
    });
});