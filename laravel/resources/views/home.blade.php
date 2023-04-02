<x-app-layout>
  <x-slot name="header">
      
          
          

      
  </x-slot>

  

  <div class="py-1">
       
      <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-1/4 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

              




              
              <a href="{{ route('user.show', ['name' => $user->name]) }}">
                  <div class="w-full mt-16 mb-16 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                    <div class="h-48 w-full checker-bg flex items-start justify-start p-4 text-blue-500">
                    
                      <x-thumbnail :filename="$user->filename" type="avatars" />

                <div class=" w-full flex justify-between">
                    <div>{{ $user->name}}</div>
                    <div></div>
                
                  </div>
                    </div>       
                    <div class="p-4 border-t border-gray-200">
                      <div class="flex items-center justify-between">
                        <div class="flex items-start justify-start ">

                        </div>
                          
                        
                      </div>
                    
                    </div>
                  </div>

                </a>

                




              
            </div>
            <!-- px-5 py-24 mx-auto -->

            <div class="flex flex-col flex-wrap -mb-10 w-full lg:w-7/12 lg:pl-12 lg:ml-24 lg:text-left text-center">
              <div class="flex flex-col mb-10 lg:items-start items-center">



                  <section class="w-full text-gray-600 body-font">
                      <div class="w-full">


                      

                        

                        @isset($teams)
                        @foreach($teams as $team)

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