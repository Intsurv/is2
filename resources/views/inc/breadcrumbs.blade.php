@if(isset($breadcrumbs) && !empty($breadcrumbs))
    <div class="card custom-app-card">
        <ol class="breadcrumb" style="margin-bottom: 0;">
            @foreach ($breadcrumbs as $breadcrumb)
                @if($breadcrumb != end($breadcrumbs))
                    <li class="breadcrumb-item">
                        @if(isset($breadcrumb[2]) && isset($breadcrumb[3]))
                            <a href="{{ route($breadcrumb[1], [$breadcrumb[2] => $breadcrumb[3]]) }}">{{ $breadcrumb[0]}}</a>
                        @else
                            <a href="{{ route($breadcrumb[1]) }}">{{ $breadcrumb[0]}}</a>
                        @endif
                    </li>
                @else
                    <li class="breadcrumb-item active">{{ $breadcrumb[0]}}</li>
                @endif
            @endforeach
        </ol>
    </div>
@endif