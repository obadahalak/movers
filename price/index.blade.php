<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <title>Document</title>

</head>
<body>
    

<div class="container mx-auto shadow-xl  border rounded-md h-screen overflow-y-scroll ">
    
    <div class=" border-gray-200 dark:border-gray-700 mb-4 ">
        <ul class="flex   -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2 text-center flex-1 w-50" role="presentation">
             
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300
                rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent
                border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                id="express-tab" data-tabs-target="#express" type="button"
                role="tab" aria-controls="express" aria-selected="false"
                >Express (max.1200kg)</button>
            
            </li>
            <li class="mr-2 flex-1 w-50 text-center" role="presentation">
            
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300
                rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2
                dark:text-gray-400 dark:hover:text-gray-300 active" id="vrachtwagen-tab" data-tabs-target="#vrachtwagen"
                type="button" role="tab" aria-controls="vrachtwagen" aria-selected="true"
                >Vrachtwagen (tot 24t laadvermogen)</button>
            
            </li>
          
        </ul>
    </div>
    <div id="myTabContent">
        <div class=" p-4 rounded-lg my-2  " id="express" role="tabpanel" aria-labelledby="express-tab">
            <p class="text-black font-lg font-bold ">

                Bereken nu de prijs voor een koeriersrit
                
            </p>
            <div class="lg:flex md:flex w-100">

                <input type="date" class="my-2 p-2 text-gray-500 border  lg:flex-1  md:flex-1 w-80 md:w-30  lg:w-30 mr-2 " name="" id="">
           <p class=" ml-2 text-black bg-zinc-100 border border-red-500  lg:flex-1 md:flex-1 rounded-md  w-50 ">Een pick-up binnen 60-120 minuten is alleen mogelijk tijdens onze kantooruren (Mo. - Fr. 07.00 - 20.00).</p>
            </div>
          
<div id="repeater">
         
    <button class="  mt-2 repeater-add-btn ">Laadadres toevoegen</button>
    <div class="items" data-group="points">
        
        <div class="grid grid-cols-12 gap-2 mt-5">
            <p class="text-black font-lg font-bold">Levering</p>
            <select class=" col-start-1 lg:col-end-3 md:col-end-4 col-end-5  text-black   rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200  focus:border-2 focus:border-gray-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" id="">
                <option class="p-2 text-black text-center" value="1">2</option>
                <option class="p-2 text-black text-center" value="2">1</option>
                <option class="p-2 text-black text-center" value="3">3</option>
                <option class="p-2 text-black text-center" value="4">4</option>
            </select>

            <input type="text" placeholder="Vul postcode / plaats in" 
             class="lg:col-start-3  md:col-start-4  col-start-5 
             col-end-10 lg:col-end-6 
             text-black rounded-[7px] border border-blue-gray-200 
             focus:border-2 focus:border-gray-500">
           
        </div>
        <div class=" repeater-remove-btn">
            <button class="mt-2 bg-red-600 rounded-md border p-1 font-bold  text-white font-lg remove-btn remove-btn">
                Remove
            </button>
        </div>
    </div>
    
</div>



            <div class="flex justify-end mt-10 ">
                <div class="">
                    <p class="text-gray-400">Totaalbedrag</p>
                    <p class="text-black text-4xl font-bold">- EUR</p>
                    <p>excl. - BTW Bruto - EUR</p>
                </div>
            </div>



            <div class="flex justify-center mt-10">

                <button class="border bg-pink-500 text-white font-bold p-3 w-full rounded-lg" > Verder naar de zending</button>
            </div>
        </div>
      
      
        <div class=" p-4 rounded-lg hidden " id="vrachtwagen" role="tabpanel" aria-labelledby="vrachtwagen-tab">
            empty
          
        </div>
     
    </div>

</div>

<script src="./repeater.js" type="text/javascript"></script>
    <script>
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>
</html>
