$('.registration-submit').click((event) => {
    event.preventDefault();

    let validationRules = getValidationRulesRegistrationForm();
    let errorMessages   = getErrorMessageRegistrationForm();
    let result          = runValidation(validationRules, errorMessages);

    if(!result) return false;

    registrationUser(new FormData(contact));
});
