<x-app-layout>
    <x-slot name="header">
       


       

        
    </x-slot>

    








    <section class=" text-gray-600 body-font ">
        <div class=" container px-5 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
           
          </div>
          <div class="mt-44 lg:w-1/2 md:w-2/3 mx-auto">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('user.update',['user' => $user_id]) }}" enctype="multipart/form-data">
              @csrf
            <div class="-m-2">
              <div class="p-2 w-1/2 mx-auto">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-600">ユーザー名</label>
                  <input type="text" id="name" name="name" value="{{ old('name')}}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2  mx-auto">
                <div class="relative">

<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">チームの説明</label>
<textarea id="message" name="self_introduction" rows="4" class="bg-gray-100 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

                </div>
              </div>



              <div class=" flex items-center justify-center w-full">
                
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">アイコンを設定
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input name="image" id="dropzone-file" type="file" accept="image/png,image/jpeg,image/jpg" class="bg-gray-100 hidden" />
                </label>
            </div> 






             
              
              <div class="p-2 w-full flex justify-around mt-4">
                <button type="button" onclick="location.href='{{ route('home')}}'"class="bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録する</button>
              </div>
              
      </div>
            </form>
        </div>
      </section>
            
      



</x-app-layout>