<x-app-layout>






<!-- Modal toggle -->

<!-- Main modal -->
<div id="defaultModal-2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <form method="POST" action="{{ route('user.goal' ,['name' => Auth::id()])}}" >
      @csrf
       @method('put')
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    目標設定を変更
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal-2">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
             
            <div class="p-6 space-y-6">
                <textarea id="message" name="goal" rows="4" 
        class="bg-gray-100 block container w-full mx-auto  w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      </textarea>
  
                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="defaultModal-2" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">変更</button>
                <button data-modal-hide="defaultModal-2" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">キャンセル</button>
            </div>
        </div>
        </form>
    </div>
</div>












  <x-slot name="header">
      
          
          <p class="text-center text-new-3xl font-bold md:text-new-4xl">
          </p>

      
  </x-slot>

  

  <div class="py-1">
       
      <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-1/3 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

              


           
                <div class=" mt-16 w-full md:h-40 xl:h-40 lg:w-full mb-8 bg-white shadow rounded border border-transparent">
         
                  <!-- <textarea id="message" name="comment" rows="4" 
        class="bg-gray-100 block container w-full mx-auto  w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
  
                  -->
            <button data-modal-target="defaultModal-2" data-modal-toggle="defaultModal-2" type="button">
  

            <div class="flex justify-start p-4 leading-normal">
              <h5 class="text-blue-600 mb-2 text-2xl font-bold tracking-tight dark:text-white mb-2">目標設定を変更</h5>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-1 vw-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
</svg>

            </div>
            </button>
            <p class="ml-4 mb-6">{{Auth::user()->goal}}</p>
     
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

            <div class="flex flex-col flex-wrap -mb-10 w-full lg:w-7/12 lg:pl-12 lg:ml-130 lg:text-left text-center">
              <div class="flex flex-col mb-10 lg:items-start items-center">



                  <section class="w-full text-gray-600 body-font">
                      <div class="w-full mt-4">


                        

                        @isset($teams)
                        @foreach($teams as $team)


                           <div class="w-full md:h-30 xl:h-30 lg:mt-16  mb-8 bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
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