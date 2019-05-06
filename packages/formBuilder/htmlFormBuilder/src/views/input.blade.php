<input
    id="{{ !isset($data['ids']) ? ' ' : implode(" ",$data['ids'])}}"
    class="{{ !isset($data['classes']) ? ' ' : implode(" ",$data['classes'])}}"
    type="{{ !isset($data['type']) ? ' ' : $data['type']}}"
    name="{{ !isset($data['name']) ? ' ' : $data['name']}}"
    value="{{ !isset($data['values']) ? ' ' : $data['values']['prev_value']}}"
    {{ !isset($data['required']) ? ' ' : $data['required'] ? 'required' : ' '}}
>
