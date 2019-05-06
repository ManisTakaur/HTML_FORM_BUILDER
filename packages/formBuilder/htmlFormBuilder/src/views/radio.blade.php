<input
    id="{{ !isset($data['ids']) ? ' ' : implode(" ",$data['ids'])}}"
    class="{{ !isset($data['classes']) ? ' ' : implode(" ",$data['classes'])}}"
    name="{{ !isset($data['name']) ? ' ' : $data['name']}}"
    {{ !isset($data['required']) ? ' ' : $data['required'] ? 'required' : ' '}}

    @if (!isset($data['active']) ||  $data['active'] == null)
        <input type="radio" checked >Not Selected
    @endif

    @if (isset($data['values']))
        @foreach ($data['values'] as $key=>$item)
            @if (isset($data['active']))
                <input value="{{$key}}" {{$key == $data['active'] ? 'checked' : ''}} type="radio">{{$item}}
            @else
                <input value="{{$key}}" type="radio" >{{$item}}
            @endif
        @endforeach
    @endif

