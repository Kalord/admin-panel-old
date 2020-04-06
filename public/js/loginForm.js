$('.login-submit').click((event) => {
    event.preventDefault();

    let validationRules = getValidationRulesLoginForm();
    let errorMessages   = getErrorMessageLoginForm();
    let result          = runValidation(validationRules, errorMessages);

    if(!result) return false;

    authUser(new FormData(contact));
});
