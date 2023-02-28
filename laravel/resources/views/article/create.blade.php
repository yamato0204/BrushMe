<x-app-layout>
    <x-slot name="header">
    


       

        
    </x-slot>

    








    <section class="text-gray-600 body-font">
        <div class="container px-5 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
           
          </div>
          <div class="mt-44 lg:w-1/2 md:w-2/3 mx-auto">
            <!--<x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
            
            <form method="POST" action="{{ route('article.store',$team)}}" >
              @csrf
            <div class="-m-2">
              
              <div class="p-2  mx-auto">
                <div class="relative">

<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">チームの説明</label>
<textarea id="message" name="body" rows="4" class="bg-gray-100 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

                </div>
              </div>



             






             
              
              <div class="p-2 w-full flex justify-around mt-4">
                <button type="button" onclick="location.href='{{ route('article.index',$team) }}'"class="bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">投稿する</button>
              </div>
              
      </div>
            </form>
        </div>
      </section>

            
      



</x-app-layout>