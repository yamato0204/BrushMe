<x-app-layout>




  <div id="popup-modal-1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal-1">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <form method="POST" action="{{route('team.join',['team' => $team->id ])}}">
              @csrf
              @method('PUT')
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">チームに参加で記事に投稿できます。チームに参加しますか？</h3>
                <button data-modal-hide="popup-modal-1" type="submit" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    参加する
                </button>
             
                <button data-modal-hide="popup-modal-1" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    キャンセル
                </button>
            </div>
            </form>
        </div>
    </div>
  </div>
  
  
  


  <div id="popup-modal-2" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal-2">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <form method="POST" action="{{route('team.exit',['team' => $team->id ])}}">
              @csrf
              @method('DELETE')
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">チームに参加で記事に投稿できます。チームに参加しますか？</h3>
                <button data-modal-hide="popup-modal-2" type="submit" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    退会する
                </button>
                <button data-modal-hide="popup-modal-2" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    キャンセル
                </button>
              </div>
            </form>
            </div>
        </div>
    </div>
  


 

    










    <x-slot name="header" class="bg-fixed">
      
      
      <div class="flex justify-between ">
  <div> 
        <div class="flex -space-x-2 mb-4">
          
          <x-avatars :users="$users ?? ''" />
           
          @isset($count)
           <!-- <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">-->
           <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">
           
            +{{$count}}
           
          </a>
          @endisset
          </div>






         
          


<!-- Modal toggle -->
@if($member == true)

<button data-modal-target="popup-modal-2" data-modal-toggle="popup-modal-2" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="button">
  退会する

  
</button>


<!--<button data-modal-target="popup-modal-1" data-modal-toggle="popup-modal-1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-8 py-2 px-4  rounded-full" type="button">
  退会する
</button>-->



@else
<button data-modal-target="popup-modal-1" data-modal-toggle="popup-modal-1" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="button">
  参加する

  
</button>









            
            
@endif









       
       </div>
        @if($member == true)
          <div class="flex justify-center md:justify-end" >
            <button onclick="location.href='{{ route('article.create',$team->id) }}'" class="mb-4 md:mr-16 bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
              
              </button>
              
            </div>
            @else
            <div>
             
            </div>
            @endif
      </div>
      
    </x-slot>

    

    <div class="py-1">
         
        <section class="text-gray-600 body-font mt-44">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
              <div class="lg:w-1/4 md:w-full w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                


                <div class="p-4 lg:w-full sm:w-full w-full">
                    <h3 class="font-medium title-font tracking-widest text-gray-900 mb-4 text-center sm:text-left">参加メンバー</h3>
                    
                    <nav class="flex flex-col sm:items-start sm:text-left text-center items-center -mb-1 space-y-2.5">
                      @if(!empty($users))
                      @foreach($users as $user)
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                         <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>-->
                        </span>{{ $user->name }}
                      </a>
                      @endforeach
                      @endif
                      @isset($count)

                      <div class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full " >
           
                        +{{$count}}
                       
                      </div>
                      
                      @endisset

                      <button onclick="location.href='{{ route('team.member',$team->id)}}'" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        メンバー一覧
                      </button>

                     
      
                    </nav>
                  </div>




                
              </div>
              <!-- px-5 py-24 mx-auto -->

              
              <div class="flex flex-col flex-wrap lg:py-6 -mb-10 w-full lg:w-7/12 lg:pl-12 lg:ml-24 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">



                 
                    <section class="w-full text-gray-600 body-font">

                      <div class="w-full"> 


                        <div id="app">
                        
                        @isset($articles)
                        
                            
                       
                          @foreach($articles as $article)

                          
                        
                          
                          
                            <div class="w-full mb-8 bg-white shadow rounded border border-transparent ">
                           
                                <div class="h-18 w-full checker-bg flex items-start justify-start p-4 text-blue-500">
                                  
                               

                                  <a href="{{ route('user.show', ['name' => $article->user->name]) }}">
                                    <x-thumbnail :filename="$article->user->filename" type="avatars" />
                          </a>
                            <div class=" w-full flex justify-between">
                                <div>{{ $article->user->name }}</div>
                                <div>{{$article->created_at}}</div>
                            
                              </div>
                              
                                </div>
                                <div class="h-36 ml-8 flex items-start justify-start">
                                <p>{{ $article->body }}</p>
                              </div>
                                       
                                <div class="p-4 border-t border-gray-200">
                                  <div class="flex items-center justify-between">
                                    <div class="flex items-start justify-start ">

                                      
                                        <article-like
                                        :initial-is-liked-by = {{Illuminate\Support\Js::from($article->isLikedBy(Auth::user()))}}      
                                        :initial-count-likes = {{Illuminate\Support\Js::from($article->count_likes)}}

                                        :authorized = {{Illuminate\Support\Js::from(Auth::check())}}
                                        endpoint = "{{ route('article.like', ['article'=>$article]) }}"
                                      >
                                      </article-like> 
                                   
                                  
                                   

                                    <a href="{{ route('article.show', ['article' => $article->id ])}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-8 w-6 h-6 ">
                                            <path  stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                          </svg>
                                        </a>
                                        <div class="mt-2 ml-1">
                                        {{ count($article->comments) }}
                                        </div>
                                       

                                    

                                    </div>
                                  
                                
                          
                            @if(Auth::id() === $article->user_id)



                                    
                             
                            
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownId" class="  focus:outline-none  inline-flex items-center" type="button"> 
                              <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                  </svg></button>

                            <div id="dropdownId" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                  <li class="flex justify-center">
                                    <a href="{{route('article.edit',['article' => $article->id ])}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">記事を更新する</a>
                                  </li>
                                  <li class="flex justify-center">
                                    <button class="text-red-400 block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"  data-modal-target="popup-modal" data-modal-toggle="popup-modal"  type="button">記事を削除する</button>
                                  </li>
                                  
                                </ul>

                            </div>


                            <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                              <div class="relative w-full h-full max-w-md md:h-auto">
                                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                      <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                          <span class="sr-only">Close modal</span>
                                      </button>
                                      <form method="POST" action="{{route('article.destroy',['article' => $article->id, 'team' => $team->id ])}}">
                                        @csrf
                                        @method('DELETE')
                                  
                                      <div class="p-6 text-center">
                                          <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">記事を削除しますか?</h3>
                                          <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                              はい
                                          </button>
                                          <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">いいえ</button>
                                      </div>
                                    </form>
                                  </div>
                              </div>
                            </div>


                            





                        </div>
                                
                      </div>
                   

                    
            
                  </div>
             
                                                
                    
                   






                            @endif
                           
                           
            @endforeach
                         
                         
            @endisset
            
                                   
                        
                          



                          </div>

                        </div>
                      </section>
                    </div>


                    
                    


                    </div>
                    




                  





                  
                </div>
              </div>
         
          

</x-app-layout>


