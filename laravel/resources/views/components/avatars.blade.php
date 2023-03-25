@if(!empty($users))
@foreach($users as $user)
@if(empty($user->filename))
<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-8 w-8 rounded-full ring-2 ring-white" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
  </svg>
@else

<img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="{{ asset('storage/avatars/' . $user->filename)}}">

@endif


@endforeach
@endif
