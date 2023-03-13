<x-app-layout>
    <x-slot name="header">
       


       

        
    </x-slot>

    








    <section class=" text-gray-600 body-font">
        <div class=" container px-5 mx-auto">
          <div class="flex flex-col text-center items-center w-full mb-12">
           

            <div class="mt-40 w-full md:w-2/3   mb-8 bg-white shadow rounded border border-transparent  ">
                <div class="h-18 w-full checker-bg flex  justify-between p-4 text-blue-500">
                    <a class="w-1/2" href="{{ route('user.show', ['name' => $user->name]) }}">
                     
                      <x-thumbnail :filename="$user->filename" type="avatars" />
                     
        </a>        
            <div class="w-full flex justify-between mr-32">
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
            





            <div id="app1">
              <tab-menu
              :props-tab-menu = {{ Illuminate\Support\Js::from($res) }}>
              </tab-menu>
            </div>
            








         









        </div>
      </section>
            
      



</x-app-layout>