
    console.log('fire');

var menuList = document.querySelectorAll('#menu-list button');

console.log(menuList);

var i;

for (i=0; i < menuList.length; i++){

    console.log(menuList[i]);
}

console.log(menuList[0]);

var main = document.querySelector('.main');

var about = document.querySelector('.about');
var professional = document.querySelector('.professional');
var funStuff = document.querySelector('.fun-stuff');
var blog = document.querySelector('.blog');
var contact = document.querySelector('.contact');

function toAbout(){
    var main = document.querySelector('.main');

    var about = document.querySelector('.about');

    about.className += " slide-in";
    main.className += " slide-right";
};
function toProf(){
    var main = document.querySelector('.main');
    var professional = document.querySelector('.professional');
    var about = document.querySelector('.about');
    about.className += " slide-right";
    main.className += " slide-right";
    professional.className += " slide-in";


};
function toFun(){


};
function toBlog(){


};
function toContact(){


};

function backToHome(){
    document.querySelectorAll('back-button');
}