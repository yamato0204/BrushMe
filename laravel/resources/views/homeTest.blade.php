<x-app-layout>
    <x-slot name="header">
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
              <div class="lg:w-1/4 md:w-full w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">





                <div class="p-4 lg:w-full sm:w-full w-full">
                    <h2 class="font-medium title-font tracking-widest text-gray-900 mb-4 text-sm text-center sm:text-left">チーム参加 ランキング</h2>
                    <nav class="flex flex-col sm:items-start sm:text-left text-center items-center -mb-1 space-y-2.5">
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>First Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>Second Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>Third Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>Fourth Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>Fifth Link
                      </a>
                    </nav>
                  </div>




                
              </div>
              <!-- px-5 py-24 mx-auto -->

              <div class="flex flex-col flex-wrap lg:py-6 -mb-10 w-full lg:w-2/3 lg:pl-12 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">



                    <section class="w-full text-gray-600 body-font">
                        <div class="w-full">


                        @foreach ($values as $key => $var)

                        @if($loop->iteration % 2 ==0)
                            
                        
                          <div class="flex items-center lg:w-5/6 sm:w-full mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                              </svg>
                            </div>
                            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                              <div class="flex justify-start">
                              <h2 class="text-gray-900 text-lg title-font font-medium mb-2">{{ $var->title }}</h2>
                              
                              </div>


                              <p class="leading-relaxed text-base">{{$var->body}}</p>
    
                              <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More

                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>

                              </a>
                            </div>
                          </div>
                          
                        @else


                        
                          <div class="flex items-center lg:w-5/6 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                              <h2 class="text-gray-900 text-lg title-font font-medium mb-2">{{$var->title}}</h2>
                              <p class="leading-relaxed text-base">{{ $var->body }}</p>
                              <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                              </a>
                            </div>
                            <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                              </svg>
                            </div>
                          </div>
                          @endif
                    
                          @endforeach
                          


                          <div class="w-120 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                            <div class="h-48 w-full checker-bg flex items-center justify-center p-4 text-blue-500">
                              <div class="w-32 h-32 bg-gray-100 rounded-full bg-cover bg-center" style="background-image: url('https://images.pexels.com/photos/774731/pexels-photo-774731.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                              </div>
                            </div>
                        
                            <div class="p-4 border-t border-gray-200">
                              <div class="flex items-center justify-between">
                                <h1 class="text-gray-600 font-medium">Helen Smith</h1>
                                <button class="text-gray-500 hover:text-gray-900">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                                </button>
                              </div>
                              <p class="text-gray-400 text-sm my-1">Active</p>
                            </div>
                          </div>











                        </div>
                      </section>




                  





                  </div>
                </div>
              </div>
            </div>
          </section>
            
           
    </div>

</x-app-layout>