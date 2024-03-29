@php


    if (!isset($field['options'])) {
       $field['options'] = $field['model']::all();


       if(isset($field['query'])) {
        $field['options'] = $field['query'];
        }
    }
    else {
       $field['options'] = call_user_func($field['options'], $field['model']::query());
    }


    //build option keys array to use with Select All in javascript.
    $model_instance = new $field['model'];
    $options_ids_array = $field['options']->pluck($model_instance->getKeyName())->toArray();

    $field['multiple'] = $field['multiple'] ?? true;
@endphp


<select
    name="{{ $field['name'] ?? $field['method'] }}[]"
    data-select-all="{{ var_export($field['select_all'] ?? false)}}"
    data-options-for-js="{{json_encode(array_values($options_ids_array))}}"
    class="{{$class}} select2-basic-multiple"
    {{ $field['multiple'] ? 'multiple' : '' }}>

    @if (isset($field['allows_null']) && $field['allows_null']==true)
        <option value="">-</option>
    @endif

    @if (isset($field['model']))
        @foreach ($field['options'] as $option)
            @if( (old($field["name"]  ?? $field['method']) && in_array($option->getKey(), old($field["name"]  ?? $field['method'] ))) || (is_null(old($field["name"]  ?? $field['method'])) && isset($field['value']) && in_array($option->getKey(), $field['value']->pluck($option->getKeyName(), $option->getKeyName())->toArray())))
                <option value="{{ $option->getKey() }}" selected>{{ $option->{$field['attribute']} }}</option>
            @else
                <option value="{{ $option->getKey() }}">{{ $option->{$field['attribute']} }}</option>
            @endif
        @endforeach
    @endif
</select>


@if ($crud->notLoaded($field))
    @push('fields_scripts')
        <script>
            $(document).ready(function () {
                $('.select2-basic-multiple').select2();
            });
        </script>
    @endpush
@endif
