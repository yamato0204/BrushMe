<x-app-layout>
    <x-slot name="header">
        <div class="mb-8">
            
            <div class="flex justify-center md:justify-start" >
        <button onclick="location.href='{{ route('team.create')}}'" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            チーム作成
          </button>
          
        </div>
        
        </div>

        <form class="flex items-center">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="チームを探す" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </x-slot>

    

    <div class="py-1">
         
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
              <div class="lg:w-1/4 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                


                <div class="bg-white p-4 lg:w-full sm:w-full w-full">
                    <h2 class="font-medium title-font tracking-widest text-gray-900 mb-4 text-sm text-center sm:text-left">人気ランキング</h2>
                    <nav class="flex flex-col sm:items-start sm:text-left text-center items-center -mb-1 space-y-2.5">
                      <a>
                        <span class="bg-yellow-400 text-gray-800 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <h1>1</h1>
                        </span>First Link
                      </a>
                      <a>
                        <span class="bg-gray-300 text-gray-800 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <h2>2</h2>
                        </span>Second Link
                      </a>
                      <a>
                        <span class="bg-yellow-600 text-gray-800 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <h2>3</h2>
                        </span>Third Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-gray-800 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <h2>4</h2>
                        </span>Fourth Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-gray-800 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <h2>5</h2>
                        </span>Fifth Link
                      </a>
                    </nav>
                  </div>




                
              </div>
              <!-- px-5 py-24 mx-auto -->

              <div class="flex flex-col flex-wrap -mb-10 w-full lg:w-7/12 lg:pl-12 lg:ml-24 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">



                    <section class="w-full text-gray-600 body-font">
                        <div class="w-full">


                        

                          

                          @foreach($teams as $team)

                          <a href="{{ route('article.index', ['team' => $team->id] )}}">
                          <div class="w-100 mb-16  bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                            <div class="h-48 w-full checker-bg flex items-center justify-start p-4 text-blue-500">
                              <div class="w-32 h-32 bg-gray-100 rounded-full bg-cover bg-center" style="background-image: url('https://images.pexels.com/photos/774731/pexels-photo-774731.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                              </div>
                              <div class="p-4">
                                <p>{{$team->information}}</p>
                              </div>
                            
                            </div>
                        
                            <div class="p-4 border-t border-gray-200">
                              <div class="flex items-center justify-between">
                                <h1 class="text-gray-600 font-medium">{{$team->name}}</h1>
                                <button class="text-gray-500 hover:text-gray-900">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                                </button>
                              </div>
                              <p class="text-gray-400 text-sm my-1"></p>
                            </div>
                          </div>

                          @endforeach








                          







<!--
                          <div class="w-100 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                            <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center" style="background-image: url('https://images.pexels.com/photos/1592384/pexels-photo-1592384.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
                              <div>
                                <input type="checkbox"/>
                              </div>
                              <div class="w-8 h-9 bg-white rounded flex items-center justify-center text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                        </svg>
                              </div>
                            </div>
                        
                            <div class="p-4">
                              <div class="flex items-center justify-between">
                                <h1 class="text-gray-600 font-medium">titan.jpg</h1>
                                <button class="text-gray-500 hover:text-gray-900">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                                </button>
                              </div>
                              <p class="text-gray-400 text-sm my-1">Jack cooper</p>
                              <span class="uppercase text-xs bg-green-50 p-0.5 border-green-500 border rounded text-green-700 font-medium">Approved</span>
                            </div>
                          </div>


                        -->









                        </div>
                      </section>




                  





                  </div>
                </div>
              </div>
            </div>
          </section>
            
           
    </div>

</x-app-layout>