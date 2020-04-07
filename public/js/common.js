Array.prototype.insert = function ( index, item ) {
    this.splice( index, 0, item );
};

const getFirstProperty = (object) => {
    for (let i in object) {
  		return object[i];
  	}
}
