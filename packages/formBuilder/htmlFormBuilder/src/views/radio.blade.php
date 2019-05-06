

@if (isset($data['values']))
    @foreach ($data['values'] as $key=>$item)
        <input value="{{$key}}" {{$key == $data['active'] ? 'checked' : ''}}
            class="{{ !isset($data['classes']) ? ' ' : implode(" ",$data['classes'])}}"
            name="{{ !isset($data['name']) ? ' ' : $data['name']}}"
            {{ !isset($data['required']) ? ' ' : $data['required'] ? 'required' : ' '}}
            {{!isset($data['active']) ||  $data['active'] == null ? 'selected' : 's'}}
            type="radio"> {{$item}}
        <br>
    @endforeach
@endif

