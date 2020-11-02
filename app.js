var itemsArray = new Array();
var total = 0;


// onload function to check system state
window.onload = function(e){ 
 let systemState = localStorage.getItem("systemState")
 if(systemState == 1){

 document.querySelector("#second").style.display = "block";
 document.querySelector("#first").style.display = "none";
 Apicall_1();

 }else if(systemState == 2){

 document.querySelector("#menu").style.display = "block";
 document.querySelector("#second").style.display = "none";
 Apicall_2();

 }else if(systemState == 3){

     
 }else if(systemState == 4){


     
 }

 }



document.querySelector("#second").style.display = "none";
 // send asynchronous call using native MS XHRobject
document.getElementById("cont").addEventListener('click', function(){
 Apicall_1();
 localStorage.setItem("systemState",1);
})

// end button click
document.querySelector("#end").addEventListener('click', ()=>{
 document.querySelector("#exit").style.display = "block";
 document.querySelector("#second").style.display = "none";
 localStorage.setItem("systemState",0);
})

// continue button click
document.querySelector("#continue").addEventListener('click', ()=>{
 Apicall_2();
 localStorage.setItem("systemState",2);
})





document.querySelector("#orange").addEventListener('click', ()=>{
 let mycheck = document.getElementById("orange")
 if(mycheck.checked == true){
     itemsArray[0] = "orange"
     total = total + 2.00
    
 }else if(mycheck.checked == false){
     
     itemsArray[0] = ""
     total = total - 2.00

 }

})

document.querySelector("#pineapple").addEventListener('click', ()=>{
 if(document.getElementById("pineapple").checked == true){
     itemsArray[1] = "pineapple"
     total = total + 4.50
 }else{
     
     itemsArray[1] = ""
     total = total - 4.50
 }
})

document.querySelector("#apple").addEventListener('click', ()=>{
 if(document.getElementById("apple").checked == true){
     itemsArray[2] = "apple"
     total = total + 1.01
 }else{
     itemsArray[2] = ""
     total = total + 1.01
 }
})


// submit clicked
document.querySelector("#submit").addEventListener('click', ()=>{
 localStorage.setItem("selectedItems",itemsArray);
 alert("Thanks for your purchase")
 let sell = localStorage.getItem("selectedItems")
 document.querySelector("#items").style.display = "none";
 document.querySelector("#menu").style.display = "block";

})

 // purchase button click
document.querySelector("#purchase").addEventListener('click', ()=>{
   let getname = localStorage.getItem("fullname")
   let getpass = localStorage.getItem("password")
 
     if( getname == "null" || getpass == "null" ) {
         alert("Please register first")
     }else{
         Apicall_3();
     }
})

// register button click
document.querySelector("#regis").addEventListener('click', ()=>{
 let fullname = prompt("Enter your fullname");
 let password = prompt("Enter your password");

 // save data to localStorage
 localStorage.setItem("fullname",fullname);
 localStorage.setItem("password",password);
})


// request methods
// api call 1
function Apicall_1(){
var xhr = new XMLHttpRequest();
xhr.onload = function(){
   if(this.status === 200){
       let data = JSON.parse(this.responseText)
       document.querySelector("#first").style.display = "none";
       document.querySelector("#second").style.display = "block";
       document.querySelector("#txt1").innerHTML = data.allowed.toUpperCase();
       document.querySelector("#txt2").innerHTML = data.denied.toUpperCase();
   }
}
xhr.open("GET","js/model.json",true);
xhr.send();
}

// api call 2
function Apicall_2(){
var xhr = new XMLHttpRequest();
xhr.onload = function(){
   if(this.status === 200){
       let data = JSON.parse(this.responseText)
       document.querySelector("#first").style.display = "none";
       document.querySelector("#second").style.display = "none";
       document.querySelector("#menu").style.display = "block";
       document.querySelector("#menu1").innerHTML = data.register.toUpperCase();
       document.querySelector("#menu2").innerHTML = data.purchase.toUpperCase();
       document.querySelector("#menu3").innerHTML = data.history.toUpperCase();
   }
}
xhr.open("GET","js/menu.json",true);
xhr.send();
}


// api call 2
function Apicall_3(){
var xhr = new XMLHttpRequest();
xhr.onload = function(){
   if(this.status === 200){
       let data = JSON.parse(this.responseText)
       document.querySelector("#first").style.display = "none";
       document.querySelector("#second").style.display = "none";
       document.querySelector("#menu").style.display = "none";
       document.querySelector("#items").style.display = "block";
       document.querySelector("#item1").innerHTML = data.orange.toUpperCase();
       document.querySelector("#item2").innerHTML = data.pineapple.toUpperCase();
       document.querySelector("#item3").innerHTML = data.apple.toUpperCase();
   }
}
xhr.open("GET","js/items.json",true);
xhr.send();
}