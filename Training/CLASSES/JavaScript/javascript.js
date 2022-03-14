function world(){
    document.getElementById('click').innerText="Hello world";
    document.getElementById('click').style.fontSize='20px';

}
function ankit(){
    document.getElementById('click').innerText="Hello Ankit";
    document.getElementById('click').style.fontSize='20px';

}
function showdate(){
    var a=new Date();
    document.getElementById('click').innerText=Date();
    document.getElementById('click').style.fontSize='20px';

}
function on(){
    document.getElementById('picture').src="onbulb.jpg";
}
function off(){
    document.getElementById('picture').src="offbulb.jpeg";

}

document.write('DocumentWite() Function');


x=10;
console.log(typeof(x),x);

n="ankit aginhotry";
//name="ankit aginhotry"
console.log(typeof(n),n);

// var a=10;
// a=20;
// var a=50;

// const $b=20;

// let c=20;
// c=50;


// var unde;
// console.log(unde);
// alert(undeff);

// var undeff=10;

// console.log("2**3: ",2**3);


// var a='20';
// let b=20;
// console.log("==", a==b, typeof(a,b));
// console.log("====",a===b,typeof(a,b));

// console.log(4+"'2321'ankit"+50+50);

// function add(a,b){
//     return a+b;
// }

// var x=add(20,30);

// var arr=[12,'ankit',34];
// console.log(arr);
// console.log(x);

var obj={
    fname:"ankit",
    lname:"aginhotry",
    fullname:function(){return this.fname + " " + this.lname;},
    age:20
};

for (var i in obj){
    console.log(obj[i]);
}


var namee="my name is ankit";
var neww=namee.replace("ankit","sachin");
console.log(neww);


const arr=[12,34,54,56,6,767,7,87];
for(var i in arr){
    console.log(arr[i]);
}

var numb;
console.log(Math.random(0)*100);