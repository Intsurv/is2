@if (session('success'))
    <div class="alert alert-success @if(session('dashboard-message'))custom-dashboard-alert @endif">
        {!!session('success') !!}
    </div>
@endif
@if (session('warning') )
    <div class="alert alert-warning @if(session('dashboard-message'))custom-dashboard-alert @endif">
        {!! session('warning') !!}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-success @if(session('dashboard-message'))custom-dashboard-alert @endif">
        {!! session('error') !!}
    </div>
@endif
@if (session('status'))
    <div class="alert alert-success @if(session('dashboard-message'))custom-dashboard-alert @endif">
        {!! session('status')!!}
    </div>
@endif