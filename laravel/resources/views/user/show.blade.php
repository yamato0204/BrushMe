<x-app-layout>
    <x-slot name="header">
       


       

        
    </x-slot>

    








    <section class=" text-gray-600 body-font">
        <div class=" container px-5 mx-auto">
          <div class="flex flex-col text-center items-center w-full mb-12">
           

            <div class="mt-40 w-full md:w-2/3   mb-8 bg-white shadow rounded border border-transparent  ">
                <div class="h-18 w-full checker-bg flex  justify-between p-4 text-blue-500">
                    <a href="{{ route('user.show', ['name' => $user->name]) }}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
            </svg>
        </a>
            <div class="w-full flex justify-between">
                <div>{{ $user->name }}</div>
                
              </div>
              
              @if( Auth::id() !== $user->id )
              <div id="app" class="w-2/3"> 
              <follow-button
              :initial-is-followed-by = {{Illuminate\Support\Js::from($user->isFollowedBy(Auth::user()))}}  
              :authorized =  {{Illuminate\Support\Js::from(Auth::check())}}
              endpoint = "{{ route('user.follow',['name'=>$user->name]) }}"
              >
              </follow-button>
              </div>
            @endif
              
                </div>
                <div>
                 

                </div>
                
                       
               
                  <div class="h-16 flex items-center justify-between">
                    <div class="flex items-start justify-start ">

                        <div class="font-bold">
                        {{ $user->count_followings }}  フォロー
                        </div>

                        <div class="ml-4 font-bold ">
                        {{ $user->count_followers}} フォロワー</div>
                        
                          
                    

                   
                      
                    
                  </div>
                
                </div>
              </div>





          </div>
          <div class="mt-22 lg:w-1/2 md:w-2/3 mx-auto">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            





            <div id="app">
              <tab-menu
              :props-tab-menu = {{ Illuminate\Support\Js::from($res) }}>
              </tab-menu>
            </div>
            








          <div class="w-full mb-8 bg-white shadow rounded border border-transparent ">
            <div class="h-18 w-full checker-bg flex items-start justify-start p-4 text-blue-500">
              <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
        </svg>
      </a>
        <div class=" w-full flex justify-between">
            <div>yama</div>
            <div></div>
        
          </div>
          
            </div>
            <div class="h-36 ml-8 flex items-start justify-start">
            <p>aaaaa</p>
          </div>
                   
            <div class="p-4 border-t border-gray-200">
              <div class="flex items-center justify-between">
                <div class="flex items-start justify-start ">

                

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-8 w-6 h-6 ">
                        <path  stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                      </svg>
                      

                

                </div>
                  
                <button class="text-gray-500 hover:text-gray-900">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
                </button>
              </div>
            
            </div>
          </div>














        </div>
      </section>
            
      



</x-app-layout>