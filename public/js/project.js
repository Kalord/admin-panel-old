$('.project-item').click((event) => {
    let projectItem = $(event.target);

    while (!projectItem.attr('data-id')) {
        projectItem = projectItem.parent();
    }

    let id_selected = projectItem.attr('data-id');

    const successCallback = (html) => {
        $('.selected-project').removeClass('selected-project');
        projectItem.toggleClass('selected-project');
    };

    const errorCallback = (html) => {
        console.log(html);
    }

    changeProject(id_selected, successCallback, errorCallback);
});