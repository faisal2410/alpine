<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

   <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    @vite('resources/js/app.js')
</head>

<body class="antialiased">

    <div x-data="{ name: 'Jone Doe', message: 'Hello world' }" class="">
        <div class="bg-green-400 m-4 p-4 rounded">

            <span x-text="name"></span>

        </div>

        <div class="bg-slate-200 m-4 p-4 rounded">
            <span x-text="name"></span>
            <br>
            <span x-text="message"></span>
        </div>
    </div>

    <section>
        <div x-data="{
            selectedImageUrl:'https://picsum.photos/200/300',
            show:true,
            inputValue:'Hello'
        }">
            <img class="w-96 h-96" :class="{hidden:!show}" :src="selectedImageUrl" alt="test image">
            <input type="text" :value="inputValue" :style="{color:'red'}">

        </div>

    </section>

    <section>
        <div x-data="{message:'Hello World!'}">
            <input type="text" x-model="message">
            <p x-text="message" class="m-2 p-2 bg-slate-200"></p>

        </div>

        <div class="max-w-md mx-auto space-y-2" x-data="{myColor:'gray'}">
            <div class="w-24 h-24 rounded" :class="'bg-'+myColor+'-500'">

            </div>

            <select x-model="myColor">
                <option value="gray">Gray</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <option value="red">Red</option>
            </select>

        </div>

    </section>

    <section>
        <div x-data="{show:true}">
            <button @click="show=!show">Toggle Show</button>
            <div x-show="show">
                This element will be shown or hidden based on the show value
            </div>

        </div>
        <div x-data="{showIfExample:true}">
            <button @click="showIfExample=!showIfExample">Toggle If</button>
            <template x-if="showIfExample">

                <div >
                    This element will be shown or hidden based on the show value
                </div>
            </template>

        </div>
    </section >

    <section x-data>
        <button x-data x-on:click="alert('Hello World!')">Say Hi</button>
    </section>

    <section x-data="{isOpen:true}">


<button @click="isOpen=!isOpen" id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
<!-- Dropdown menu -->
<div x-show="isOpen"   @click.outside= "isOpen=false"id="dropdown" class="z-10  bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
      </li>
    </ul>
</div>


    </section>


    <section x-data>
        <button @click="$refs.text.remove()">Remove Text</button>
        <span x-ref="text">Hello 👋</span>

    </section>

    <section x-data="{maxLength:100}">

<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
<textarea x-ref="message" @keyup= "maxLength= 100-$refs.message.value.length"  id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

<span x-text ="maxLength + ' Characters remaining '"></span>

    </section>



</body>

</html>
