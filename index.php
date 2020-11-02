<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    
<div class="w-full max-w-xs mx-auto mt-20" id="first">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    
  
    
    <div class="flex items-center justify-between">
      <button id="cont" class="contt bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
       Welcome to Migmen Systems<br><hr>
       ->>
      </button>
      
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Migmen Information Systems.
  </p>
</div>



<!--OPTION DIV-->

<div class="w-full max-w-xs mx-auto mt-20" id="second" style="display:none">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    
  
    
    <div class="flex items-center justify-between">
      <button id="continue" class="contt bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
        <h3 id="txt1">...</h3>
      </button>
      
    </div>
<br>
    <div class="flex items-center justify-between">
      <button id="end" class="contt bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
      <h3 id="txt2">...</h3>
      </button>
      
    </div>

  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Migmen Information Systems.
  </p>
</div>




<!--MENU DIV-->

<div class="w-full max-w-xs mx-auto mt-20" id="menu" style="display:none">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    
    <div class="flex items-center justify-between">
      <button id="regis" class="contt bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
        <h3 id="menu1">m1</h3>
      </button>
      
    </div>
   <br>
    <div class="flex items-center justify-between">
      <button id="purchases" class="contt bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
      <h3 id="menu2">m2</h3>
      </button>
      
    </div>

    <br>
    <div class="flex items-center justify-between">
      <button id="history" class="contt bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
      <h3 id="menu3">m3</h3>
      </button>
      
    </div>

  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Migmen Information Systems.
  </p>
</div>


<!--items-->

<div class="flex w-full max-w-xs mx-auto mt-20" id="items" style="display:none">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
  
  <h3>AVAILABLE ITEMS</h3><hr><br>

  <div class="md:flex  mb-6">
    <div class=""></div>
    <label class=" block text-gray-500 font-bold">
      <input id="orange" class="mr-2 leading-tight" type="checkbox">
      <span class="text-sm" id="item1">
        
      </span>
    </label>
  </div>

   <br>
   <div class="md:flex  mb-6">
    <div class=""></div>
    <label class=" block text-gray-500 font-bold">
      <input id="pineapple" class="mr-2 leading-tight" type="checkbox">
      <span class="text-sm" id="item2">
        
      </span>
    </label>
  </div>

    <br>
    <div class="md:flex  mb-6">
    <div class=""></div>
    <label class=" block text-gray-500 font-bold">
      <input id="apple" class="mr-2 leading-tight" type="checkbox">
      <span class="text-sm" id="item3">
      
      </span>
    </label>
  </div>

  <br>
    <div class="flex items-center justify-between">
      <button id="submit" class="contt bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
      PURCHASE
      </button>
      
    </div>

  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Migmen Information Systems.
  </p>
</div>



<!--history-->
<div class="w-full max-w-xs mx-auto mt-20" id="historys" style="display:none">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

  <h3>PURCHASED ITEMS</h3><hr>
    
    <div class="flex items-center justify-between">
      <h3 id="his1" class="text-black contt bg-white hover:bg-blue-700  font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
       
      </h3>
      
    </div>
   <br>

    <br>
    <div class="flex items-center justify-between">
      <button id="close" class="contt bg-red-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
      <h3 id="menu3">EXIT</h3>
      </button>
      
    </div>

  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Migmen Information Systems.
  </p>
</div>





<!--EXIT DIV-->


<div class="w-full max-w-xs mx-auto mt-20" id="exit" style="display:none">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    
  
      <h3 id="DDF" class="text-red-500" >THANKS FOR USING MIGMEN USSD SERVICES</h3>
      
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Migmen Information Systems.
  </p>
</div>


<!---->


<script src="js/index.js"></script>

<script>

   var itemsArray = new Array();
   var total = 0;


   // onload function to check system state
   window.onload = function(e){ 
    let systemState = localStorage.getItem("systemState")
    if(systemState == 1){

    document.querySelector("#second").style.display = "block";
    document.querySelector("#first").style.display = "none";
    Apicall_1();// api call to a json file

    }else if(systemState == 2){

    document.querySelector("#menu").style.display = "block";
    document.querySelector("#second").style.display = "none";
    Apicall_2();// api call to a json file

    }else if(systemState == 3){
    document.querySelector("#menu").style.display = "none";
    document.querySelector("#first").style.display = "none";
    document.querySelector("#historys").style.display = "block";
        
    }else if(systemState == 4){
    document.querySelector("#menu").style.display = "none";
    document.querySelector("#historys").style.display = "block";
    }

    }



  document.querySelector("#second").style.display = "none";
    // send asynchronous call using native MS XHRobject
  document.getElementById("cont").addEventListener('click', function(){
    Apicall_1();// api call to a json file
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

  document.querySelector("#close").addEventListener('click', ()=>{
    localStorage.setItem("fullname","null");
    localStorage.setItem("password","null");
    localStorage.setItem("systemState",0);
    window.location.href = "";
  })


   // view history button click
   document.querySelector("#history").addEventListener('click', ()=>{
    let fullname = localStorage.getItem("fullname")
    let username = prompt("Enter your fullname")
   

    let allitems = localStorage.getItem("selectedItems")
    
    if(fullname == username){
    document.querySelector("#historys").style.display = "block";
    document.querySelector("#menu").style.display = "none";
    localStorage.setItem("systemState",3);
    
    document.querySelector("#his1").innerHTML = allitems
    document.querySelector("#his2").innerHTML = allitems
    document.querySelector("#his3").innerHTML = allitems

    }else{
        alert("Name does not exist")
    }

  })


  // orange checkbox clicked
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

  //pineapple checkbox clicked
  document.querySelector("#pineapple").addEventListener('click', ()=>{
    if(document.getElementById("pineapple").checked == true){
        itemsArray[1] = "pineapple"
        total = total + 4.50
    }else{
        
        itemsArray[1] = ""
        total = total - 4.50
    }
  })

  // apple checkbox clicked
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
  document.querySelector("#purchases").addEventListener('click', ()=>{
    
    var item = localStorage.getItem("fullname");
  
    if(item == "null"){
        alert("Please you need to login with your name")
    }else{
          document.querySelector("#menu").style.display = "none";
          document.querySelector("#items").style.display = "block";
          Apicall_3()
          localStorage.setItem("systemState",4);
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

</script>
</body>
</html>