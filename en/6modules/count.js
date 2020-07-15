var counter = function(arr){
    return 'There are ' + arr.length + ' elements in this array';
};

var adder = function(a,b){
    return `The sum of the two numbers is ${a+b}`;
};

var pi = 3.142;

//the basic/default to do it 
module.exports.counter = counter;
module.exports.adder = adder;
module.exports.pi = pi;

// to simplify that you can direclty replace var counter => module.exports.counter = ****

//exporting as objects and then exporting instead of the above comment and changing the way you do it.
module.exports = {
    counter: counter,
    adder:adder,
    pi:pi
};


