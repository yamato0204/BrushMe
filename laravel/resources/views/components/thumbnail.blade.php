@php
if ($type === 'avatars') {
    $path = 'storage/avatars/';
}
if ($type === 'teams') {
    $path = 'storage/teams/';
}
    
@endphp
<div>
    @if(empty($filename))
    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
      </svg>
    @else
    
    <img class="rounded-full w-24 h-24 flex items-center justify-center" src="{{ asset($path . $filename)}}">
   
    @endif


</div>