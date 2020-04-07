const registrationUser = (data) => {
    $.ajax({
        type: 'POST',
        url: '/user/create',
        data: data,
        processData: false,
        contentType: false,
        success: (html) => {
            $('.alert').hide();
            $('.success-message').show();
        },
        error: (html) => {
            $('.alert').hide();
            $('.error-message').html(getFirstProperty(html.responseJSON.errors)[0]);
            $('.error-message').show();
        }
    });
}
