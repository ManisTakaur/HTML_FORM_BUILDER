@if (isset($data['values']))
    @foreach ($data['values'] as $key=>$item)
        <input
            value="{{$key}}"
            id="{{ !isset($data['ids']) ? ' ' : implode(" ",$data['ids'])}}"
            class="{{ !isset($data['classes']) ? ' ' : implode(" ",$data['classes'])}}"
            name="{{ !isset($data['name']) ? ' ' : $data['name']}}"
            {{ !isset($data['required']) ? ' ' : $data['required'] ? 'required' : ' '}}
            type="checkbox"> {{$item}}
        <br>
    @endforeach
@endif
