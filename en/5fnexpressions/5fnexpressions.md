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

var sayBye = function(){
    consolde.log('bye');
};

sayBye();
```


```javascript
here were are passing one fn inside another and calling it.

function callFunction(fun){
    fun();
}


var sayBye = function(){
    consolde.log('bye');
};

callFunction(sayBye);
```
