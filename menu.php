<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<div class="w-full max-w-xs mx-auto mt-20">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

  <p class="text-center text-gray-500 text-xs">
    AVAILABLE MENU
  </p>
  <br><br>
  <div class="mb-4">
    
    <div class="flex items-center justify-between">
      <button id="cont" class="contt bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
        1: REGISTER
      </button>
    </div>
    <br>
    <div class="flex items-center justify-between">
      <button id="cont" class="contt bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
        2: MAKE PURCHASE
      </button>
    </div>
    <br>
    <div class="flex items-center justify-between">
      <button id="cont" class="contt bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button" >
        3: PURCHASE HISTORY
      </button>
    </div>

  </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Migmen Information Systems.
  </p>
</div>
<body>


<script>

let sessid = localStorage.getItem("sessid")
let phone = localStorage.getItem("phone")



</script>
</body>
</html>