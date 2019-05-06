<select
    id="{{ !isset($data['ids']) ? ' ' : implode(" ",$data['ids'])}}"
    class="{{ !isset($data['classes']) ? ' ' : implode(" ",$data['classes'])}}"
    name="{{ !isset($data['name']) ? ' ' : $data['name']}}"
    {{ !isset($data['required']) ? ' ' : $data['required'] ? 'required' : ' '}}
>
    @if (!isset($data['active']) ||  $data['active'] == null)
        <option value="null" selected >Not Selected</option>
    @endif

    @if (isset($data['values']))
        @foreach ($data['values'] as $key=>$item)
               @if (isset($data['active']))
                  <option value="{{$key}}" {{$key == $data['active'] ? 'selected' : ''}}>{{$item}}</option>
                @else
                  <option value="{{$key}}">{{$item}}</option>
                @endif
        @endforeach
    @endif
</select>
