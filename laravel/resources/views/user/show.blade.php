<x-app-layout>
    <x-slot name="header">
       


       

        
    </x-slot>

    








    <section class=" text-gray-600 body-font">
        <div class=" container px-5 mx-auto">
          <div class="flex flex-col text-center items-center w-full mb-12">
           

            <div class="mt-40 w-full md:w-2/3  item-center mb-8 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                <div class="h-18 w-full checker-bg flex items-start justify-start p-4 text-blue-500">
                    <a href="{{ route('user.show', ['name' => $user->name]) }}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
            </svg>
        </a>
            <div class=" w-full flex justify-between">
                <div>{{ $user->name }}</div>
                <div></div>
            
              </div>
              
                </div>
                
                       
               
                  <div class="h-16 flex items-center justify-between">
                    <div class="flex items-start justify-start ">

                        <div>フォロー</div>

                        <div>フォロワー</div>
                        
                          

                    

                   
                      
                    
                  </div>
                
                </div>
              </div>
          </div>
          <div class="mt-44 lg:w-1/2 md:w-2/3 mx-auto">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            




        </div>
      </section>
            
      



</x-app-layout>