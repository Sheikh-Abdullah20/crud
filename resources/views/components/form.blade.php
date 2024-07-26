@props([
    'action',
    'method' => "POST",
])
   <form action="{{$action}}" method="{{$method === 'GET' ? 'GET' : 'POST'}}">
    @csrf
    @if($method !== ['GET', 'POST'])
    @method($method)
    @endif

    {{$slot}}
   </form>
