@php
function message($message, $type)
{
    return "<div class='alert alert-" .
        $type .
        "' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert'
        aria-hidden='true'>×</button>
    <i class='fa fa-frown-o me-2' aria-hidden='true'></i>" .
        $message .
        "
</div>";
}

function errorAlert($errors,$type)
{
    $mess = '';
    foreach ($errors as $error) {
        $mess .=
            '<div class="alert alert-'.$type.'" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-hidden="true">×</button>
            <i class="fa fa-warning me-2" aria-hidden="true"></i>
            <span> ' .
            $error .
            '</span>
            <br>
            </div>';
    }
    return $mess;
}
@endphp