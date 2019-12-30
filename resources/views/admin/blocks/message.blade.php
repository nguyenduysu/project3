@if(count($errors) > 0)
    <div class="alert alert-danger messageNotification">
        <ul>
            @foreach($errors->all() as $error)
                <li style="list-style-type: none;">{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('flash_level'))
    @if(session()->get('flash_level') == 'success')
        @if(session()->has('flash_message'))
            <div class="alert alert-success messageNotification">
                {!! session()->get('flash_message') !!}
            </div>
        @endif
    @endif
@endif
@if(session()->has('flash_level'))
    @if(session()->get('flash_level') == 'fail')
        @if(session()->has('flash_message'))
            <div class="alert alert-danger messageNotification">
                {!! session()->get('flash_message') !!}
            </div>
        @endif
    @endif
@endif
