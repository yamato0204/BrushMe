<x-app-layout>
    <x-slot name="header">
    


       

        
    </x-slot>

    
   


    <section class="text-gray-600 body-font">
        <div class="container w-full md:w-2/3 px-5 py-40 mx-auto ">
        <!--  <div class=" w-2/3 mb-10 lg:mb-0 rounded-lg overflow-hidden"> -->


         


          <div class="w-full md:h-30 xl:h-30  mb-8 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
          <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg  ">
            <img class="object-cover w-full rounded-t-lg h-36 md:h-18 md:w-30 md:rounded-none md:rounded-l-lg" src={{ asset('storage/teams/' . $team->filename) }} alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$team->name}}</h5>
                <p class="p-8 mb-3 font-normal text-gray-700 dark:text-gray-400">{{$team->information}}</p>
            </div>
        </a>
      </div>

   


      

          @foreach($users as $user)
      <div class="w-full mb-8 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
        <div class="h-36 w-full checker-bg flex items-start justify-start p-4 text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
    </svg>
    <div class=" w-full flex justify-between">
        <div>{{$user->name}}</div>
        <div>2/10 13:45</div>

      
    
      </div>
     
      
        </div>       
        <div class="h-12 ml-8 mb-8 flex items-start justify-start">
            <p></p>
          </div>  
      </div>
      @endforeach

      





    </div>
</div>
    </section>





</x-app-layout>