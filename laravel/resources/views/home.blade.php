<x-app-layout>
  <x-slot name="header">
      
          
          <p class="text-center text-new-3xl font-bold md:text-new-4xl">
          </p>

      
  </x-slot>

  

  <div class="py-1">
       
      <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-1/4 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

              


                <div class="mt-16 w-full md:h-40 xl:h-40  mb-8 bg-white shadow rounded border border-transparent">
         
           
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"></h5>
                <p class="p-8 mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
            </div>
        </a>
      </div>



              <!--
              <a href="{{ route('user.show', ['name' => $user->name]) }}">
                  <div class="w-full mt-16 mb-16 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                    <div class="h-48 w-full checker-bg flex items-start justify-start p-4 text-blue-500">
                    
                      <x-thumbnail :filename="$user->filename" type="avatars" />

                <div class=" w-full flex justify-between">
                    <div>{{ $user->name}}</div>
                    <div></div>
                
                  </div>
                  
                    </div>       
                    
                    <div class="h-36 ml-8 flex items-start justify-start">
                                <p>{{ $user->self_introduction }}</p>
                              </div>
                    <div class="p-4 border-t border-gray-200">
                      <div class="flex items-center justify-between">
                        <div class="flex items-start justify-start ">

                        </div>
                          
                        
                      </div>
                    
                    </div>
                  </div>

                </a>-->

                




              
            </div>
            <!-- px-5 py-24 mx-auto -->

            <div class="flex flex-col flex-wrap -mb-10 w-full lg:w-7/12 lg:pl-12 lg:ml-24 lg:text-left text-center">
              <div class="flex flex-col mb-10 lg:items-start items-center">



                  <section class="w-full text-gray-600 body-font">
                      <div class="w-full mt-4">


                        

                        @isset($teams)
                        @foreach($teams as $team)


                           <div class="w-full md:h-30 xl:h-30  mb-8 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
          <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg  ">
            <img class="object-cover w-full rounded-t-lg h-36 md:h-18 md:w-30 md:rounded-none md:rounded-l-lg" src={{ asset('storage/teams/' . $team->filename) }} alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$team->name}}</h5>
                <p class="p-8 mb-3 font-normal text-gray-700 dark:text-gray-400">{{$team->information}}</p>
            </div>
        </a>
      </div>



<!--
                        <a href="{{ route('article.index', ['team' => $team->id] )}}">
                        <div class="w-100 mb-16  bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                          <div class="h-48 w-full checker-bg flex items-center justify-start p-4 text-blue-500">
                            <div class="w-32 h-32 bg-gray-100 rounded-full bg-cover bg-center" style="background-image: url('{{ asset('storage/teams/' . $team->filename) }}');">
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
                      -->

                        @endforeach
                        @endisset





                        









                        






                        











                      </div>
                    </section>




                





                </div>
              </div>
            </div>
          </div>
        </section>
          
         
  </div>

</x-app-layout>