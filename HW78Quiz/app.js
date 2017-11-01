var app= app||{} ;         
'use strict';
app.counter.increment(10);
console.log(app.counter.getCount());

var Counter1= app.createCounter;
Counter1.increment(5);
console.log(Counter1.getCount());

var Counter2=app.createCounter;
Counter2.increment(15);
console.log(Counter2.getCount());

(app);