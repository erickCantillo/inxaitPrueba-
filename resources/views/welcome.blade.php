<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    </head>
    <body class="antialiased">
        <div id="app">
        <div>
            <div class="bg-transparent max-w-screen mx-28 mt-5 px-28 py-6 flex justify-between">
                <div>
                    <h1 class="text-xl text-blue-500">Bienvenido Inxait</h1>
                </div>
                <div>
                    <button id="buttonmodal" class="focus:outline-none p-2 bg-blue-600 text-white bg-opacity-75 rounded-lg ring-4 ring-indigo-300" type="button">Agregar usuario</button>
                </div>
                
            </div>
            <div class="h-auto bg-gray-100 flex justify-center">
                <div class="container flex justify-center">
                  <div class="max-w-sm py-4">
                    <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                      <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                      <div class="py-6 px-8 rounded-lg bg-white">
                        <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">I'm supper dog for you.</h1>
                        <p class="text-gray-700 tracking-wide" v-text="users.length > 4 ? 'Ya Puede Realizar el Sorteo':'No hay Suficientes Participantes.'"></p>
                        <button v-if="users.length > 4 " class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Realizar Sorteo</button>
                      </div>
                      <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                        <span class="text-md" v-text="users.length"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            
        </div>
        
        <div id="modal"
            class="fixed top-0 left-0 w-screen h-screen flex  justify-center bg-blue-500 bg-opacity-50 transform scale-0 transition-transform duration-300">
            <!-- Modal content -->
            <div class="bg-white w-full h-auto p-5 m-12"> 
                <!--Close modal button-->
                <button id="closebutton" type="button" class="focus:outline-none">
                    <!-- Hero icon - close button -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
                <!-- Test content -->
                <div class="m-2 w-full h-full">
                    <form action="">
                        <div class="md:flex block my-4">
                            <div class="col-span-12 sm:col-span-6 w-full mr-4 mt-2 sm:mt-0">
                                <label for="" class="block font-bold text-sm text-gray-700">Departamento</label>
                                <select v-model="departamento_id" name="" id="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="movimiento.producto_id">
                                    <option value="">Slecciona una opcion</option>
                                    <option v-for="d in departamentos" :value="d.id">@{{d.nombre}}<option>
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6 w-full mr-4 mt-2 sm:mt-0">
                                <label for="" class="block font-bold text-sm text-gray-700">Ciudad</label>
                                <select name="" id="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="movimiento.producto_id">
                                    <option value="">Slecciona una opcion</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="md:flex block my-4">
                            <div class="col-span-12 sm:col-span-6 w-full mr-4 mt-2 sm:mt-0">
                                <label for="" class="block font-bold text-sm text-gray-700">Departamento</label>
                                <select v-model="departamento_id" name="" id="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="movimiento.producto_id">
                                    <option value="">Slecciona una opcion</option>
                                    <option v-for="d in departamentos" :value="d.id">@{{d.nombre}}<option>
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6 w-full mr-4 mt-2 sm:mt-0">
                                <label for="" class="block font-bold text-sm text-gray-700">Ciudad</label>
                                <select name="" id="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="movimiento.producto_id">
                                    <option value="">Slecciona una opcion</option>
                                    
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </div>
        <script src="{{ asset('js/app.js')}}"></script>
        <script> 
            const button = document.getElementById('buttonmodal')
            const closebutton = document.getElementById('closebutton')
            const modal = document.getElementById('modal')

            button.addEventListener('click',()=>modal.classList.add('scale-100'))
            closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))
        </script>
        
    </body>
</html>
