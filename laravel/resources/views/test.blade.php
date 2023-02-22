<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
    <article-like>
    </article-like>
</div>
    <script src="{{ mix('js/app.js') }}"></script> {{--この行を追加--}}
</body>
</html>
<!-- @if($loop->iteration % 2 ==0)
                            
                        
                          <div class="flex items-center lg:w-5/6 sm:w-full mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                              </svg>
                            </div>
                            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                              <h2 class="text-gray-900 text-lg title-font font-medium mb-2">{{ $var->title }}</h2>
                              <p class="leading-relaxed text-base">{{$var->body}}</p>
    
                              <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More

                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>

                              </a>
                            </div>
                          </div>
                          
                        @else
                        -->