<x-app-layout>
    <x-slot name="header">
    


       

        
    </x-slot>

    



    <section class="text-gray-600 body-font">
        <div class="container w-full md:w-2/3 px-5 py-40 mx-auto ">
        <!--  <div class=" w-2/3 mb-10 lg:mb-0 rounded-lg overflow-hidden"> -->



    <div class="w-full mb-8 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
        <div class="h-36 w-full  checker-bg flex items-start justify-start p-4 text-blue-500">
            <x-thumbnail :filename="$article->user->filename" type="avatars" />
    <div class="ml-8 w-full flex justify-between">
        <div>{{ $article->user->name }}</div>
        <div>2/10 13:45</div>
    
      </div>
        </div>  
        <div class="h-12 ml-8 mb-8 flex items-start justify-start">
            <p>{{ $article->body }}</p>
          </div>     
        <div class="p-4 border-t border-gray-200">
          <div class="flex items-center justify-between">
            <div class="flex items-start justify-start ">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-8 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                  </svg>
                  

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
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






      <form method="POST" action="{{ route('article.comment' ,$article->id)}}" >
      @csrf
      <div class="w-full mb-8 p-4 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
      <!--  <div class="h-24 w-full checker-bg flex items-start justify-start p-4 text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
    </svg>
    <div class=" w-full flex justify-between">
        <div>yamato</div>
        <div>2/10 13:45</div>
    
      </div>

        </div>      --> 
        
        <textarea id="message" name="comment" rows="4" 
        class="bg-gray-100 block container w-full mx-auto  w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
  
        <button type="submit" class="m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            コメントする
          </button>
  



      </div>
      </form>
      











      @foreach($comments as $comment )

      <div class="w-full mb-8 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
        <div class="h-36 w-full checker-bg flex items-start justify-start p-4 text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
    </svg>
    <div class=" w-full flex justify-between">
        <div>{{ $comment->user->name }}</div>
        <div>2/10 13:45</div>

      
    
      </div>
     
      
        </div>       
        <div class="h-12 ml-8 mb-8 flex items-start justify-start">
            <p>{{ $comment->comment }}</p>
          </div>  
      </div>

      @endforeach





     
























    </div>
</div>
    </section>





</x-app-layout>