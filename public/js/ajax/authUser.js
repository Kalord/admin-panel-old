/**
 * Авторизация пользователя
 *
 * @param dataForAuth
 */
const authUser = (data) => {
    $.ajax({
        type: 'POST',
        url: '/session/start',
        data: data,
        processData: false,
        contentType: false,
        success: (html) => {
            window.location.href = '/';
        },
        error: (html) => {
            $('.alert').hide();
            $('.error-message').html(getFirstProperty(html.responseJSON.errors)[0]);
            $('.error-message').show();
        }
    })
};
