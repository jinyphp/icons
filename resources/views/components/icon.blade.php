@php
    if($svg) {
        $attr = "";
        if(!empty($attributes)) {
            foreach ($attributes as $key => $value) {
                $attr .= $key."=".'"'.$value.'" ';
            }
        } else {
            $attr .= "class=".'"w-4 h-4" ';
        }

        $svg = str_replace("<svg","<svg ".$attr, $svg);
    }
@endphp
{!! $svg !!}
