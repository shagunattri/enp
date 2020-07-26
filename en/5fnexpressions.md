```javascript
//normal fn statement in js


function sayHi(){
    console.log('hi');
}
sayHi();
```

```javascript
//fn expressions

setup a variable = to a fn.

var sayBye = function(){ //anon fn
    console.log('bye');
};

sayBye();
```
---

```javascript
here were are passing one fn inside another and calling it.

//function takes function as a parameter and call it
function callFunction(fun){
    fun();
}

//saybye is called in callfunction and is then called
var sayBye = function(){
    consolde.log('bye');
};

callFunction(sayBye);
```
