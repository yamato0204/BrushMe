<x-app-layout>
    <x-slot name="header">
       


       

        
    </x-slot>

    








    <section class=" text-gray-600 body-font">
        <div class="container w-full md:w-2/3 px-5 py-40 mx-auto ">
          
           

           
    <div class="w-full mb-8 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
      <div class="h-36 w-full  checker-bg flex  justify-between p-4 text-blue-500">
                  
                     
                      <x-thumbnail :filename="$user->filename" type="avatars" />
                     
     
            <div class="ml-8 w-full flex justify-between ">
                <div>{{ $user->name }}</div>
                
             
      
      
              
              @if( Auth::id() !== $user->id )
              <div id="app" class="ml-8 w-36 lg:w-64"> 
              <follow-button
              :initial-is-followed-by = {{Illuminate\Support\Js::from($user->isFollowedBy(Auth::user()))}}  
              :authorized =  {{Illuminate\Support\Js::from(Auth::check())}}
              endpoint = "{{ route('user.follow',['name'=>$user->name]) }}"
              >
              </follow-button>
              </div>
            @endif
      </div>
    </div>
              
               
                <div class="h-20 ml-8 flex items-start justify-start">
                                <p>{{ $user->self_introduction }}</p>
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

        
          <div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            





            <div id="app1">
              <tab-menu
              :props-tab-menu = {{ Illuminate\Support\Js::from($res) }}>
              </tab-menu>
            </div>
            








         


          </div>

         


         

        </div>
      </section>
            
      



</x-app-layout>