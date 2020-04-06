/**
 * Validation form script
 */
const lengthValidator = (data, min, max) => {
    return data.length >= min && data.length <= max;
};

const emailValidator = (data) => {
    return data.match(/^\S+@\S+\.\S+$/);
};

const equalValidator = (dataOne, dataTwo) => {
    return dataOne === dataTwo;
};

const typeValidator = (data, type) => {
    return typeof data === type;
};

const stringValidator = (data) => {
    return typeValidator(data, 'string');
};

const integerValidator = (data) => {
    return typeValidator(data, 'integer');
};

const runValidation = (rules) => {
      for(let rule in rules) {
          let data = $(rule);
          if(!data.get(0)) continue;

          let validators = rules[rule];

          for(let validator in validators) {
              console.log(validator);
          }
      }
};
