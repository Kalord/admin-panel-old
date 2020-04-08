/**
 * Изменение текущего проекта
 **/
const changeProject = (id_selected, successCallback, errorCallback) => {
    $.ajax({
        type: PATCH,
        url: `${PROJECT_API}/selected`,
        data: {
            id_selected: id_selected
        },
        success: successCallback
    });
};
