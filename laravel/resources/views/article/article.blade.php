<x-app-layout>
    <x-slot name="header" class="bg-fixed">
      <div class="flex justify-between ">
    <div>
        <div class="flex -space-x-2">
          
          <x-avatars :users="$users ?? ''" />
           
          @isset($count)
           <!-- <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">-->
           <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">
           
            +{{$count}}
           
          </a>
          @endisset
          </div>
          <div id="app1">
        <modal-window
        :initial-is-member-by = {{Illuminate\Support\Js::from($team->isJoinBy($team))}} 
        endpoint = "{{ route('team.join',['team' => $team])}}">
          </modal-window> 
          
        </div>
        </div>
          <div class="flex justify-center md:justify-end" >
            <button onclick="location.href='{{ route('article.create',$team->id) }}'" class="mb-4 md:mr-16 bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
              
              </button>
              
            </div>
      </div>
      
    </x-slot>

    

    <div class="py-1">
         
        <section class="text-gray-600 body-font mt-44">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
              <div class="lg:w-1/4 md:w-full w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                


                <div class="p-4 lg:w-full sm:w-full w-full">
                    <h2 class="font-medium title-font tracking-widest text-gray-900 mb-4 text-sm text-center sm:text-left">SHOOTING STARS</h2>
                    <nav class="flex flex-col sm:items-start sm:text-left text-center items-center -mb-1 space-y-2.5">
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>First Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>Second Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>Third Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>Fourth Link
                      </a>
                      <a>
                        <span class="bg-indigo-100 text-indigo-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </span>Fifth Link

                      </a>
                    </nav>
                  </div>




                
              </div>
              <!-- px-5 py-24 mx-auto -->

              <div class="flex flex-col flex-wrap lg:py-6 -mb-10 w-full lg:w-7/12 lg:pl-12 lg:ml-24 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">



                    <section class="w-full text-gray-600 body-font">
                      <div class="w-full"> 


                        
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

                                      <div id="app"> 
                                        <article-like
                                        :initial-is-liked-by = {{Illuminate\Support\Js::from($article->isLikedBy(Auth::user()))}}      
                                        :initial-count-likes = {{Illuminate\Support\Js::from($article->count_likes)}}

                                        :authorized = {{Illuminate\Support\Js::from(Auth::check())}}
                                        endpoint = "{{ route('article.like', ['article'=>$article]) }}"
                                      >
                                      </article-like>    
                                    </div>

                                    <a href="{{ route('article.show', ['article' => $article->id ])}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-8 w-6 h-6 ">
                                            <path  stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                          </svg>
                                        </a>
                                       

                                    

                                    </div>
                                    @if(Auth::id() === $article->user_id)
                                  <!--  <button class="text-gray-500 hover:text-gray-900">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                                    </button>

                                  -->

                                 

                                  
                                 
                                 



                                


                            

                              @php
                              // ユニークなIDを生成
                              $uniqueId = uniqid('optionsMenu');
                            @endphp
                            
                            <div class="ml-auto card-text relative">
                              <button type="button" class="inline-flex items-center justify-center text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-inset" id="optionsMenu{{ $uniqueId ?? '' }}" aria-expanded="false" aria-haspopup="true">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M3 6h18M3 18h18" />
                                </svg>
                              </button>
                              <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="options-menu-items-{{ $uniqueId ?? '' }}" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                <div class="py-1" role="none">
                                  <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">記事を更新する</a>
                                  <div class="border-t border-gray-100"></div>

                                  <form id="delete_{{$article->id}}" method="POST" action="">
                                    @csrf
                                    @method('delete')
                                  <td class="md:px-4 py-3">
                                    <a href="#" data-id="{{ $article->id }}" onclick="deletePost(this)"  class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 hover:text-gray-900">記事を削除する</a>
                                  </td>
                                  </form>
                                  



                                  
                                </div>
                              </div>
                            </div>
                            
                            <script>
                              let optionsMenuButton{{ $uniqueId ?? '' }} = document.getElementById('optionsMenu{{ $uniqueId ?? '' }}');
                              let optionsMenuItems{{ $uniqueId ?? '' }} = document.getElementById('options-menu-items-{{ $uniqueId ?? '' }}');
                              
                              optionsMenuButton{{ $uniqueId ?? '' }}.addEventListener('click', () => {
                                let expanded{{ $uniqueId ?? '' }} = optionsMenuButton{{ $uniqueId ?? '' }}.getAttribute('aria-expanded') === 'true' || false;
                                optionsMenuButton{{ $uniqueId ?? '' }}.setAttribute('aria-expanded', !expanded{{ $uniqueId ?? '' }});
                                optionsMenuItems{{ $uniqueId ?? '' }}.classList.toggle('hidden');
                              });
                            </script>

<script>
  function deletePost(e) {
    'use strict';
    if(confirm('本当に削除してもいいですか？')){
      document.getElementById('delete_' + e.dataset.id).submit();
    }
  }
</script>



                            





                                  


                             
                                  
                             


                                   
                                                


















                                    @endif
                                  </div>
                                
                                </div>
                             

                              
                      
                            </div>
                       
                          
                       
                           
                           
            @endforeach
            @endisset
            
            





                             




                         








                          
                        
                          










                        </div>
                      </section>




                  





                  </div>
                </div>
              </div>
            </div>
          

</x-app-layout>


