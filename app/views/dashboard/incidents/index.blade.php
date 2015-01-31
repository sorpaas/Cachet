@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($subMenu))
        @include('partials.dashboard.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="sub-header">{{ trans('dashboard.incidents.incidents') }}</h4>
                    @include('partials.dashboard.errors')
                    <p class="lead">{{ trans_choice('dashboard.incidents.logged', $incidents->count(), ['count' => $incidents->count()]) }}</p>

                    <div class="striped-list">
                        @foreach($incidents as $incident)
                        <div class="row striped-list-item">
                            <div class="col-md-6">
                                <i class="{{ $incident->icon }}"></i>
                                <strong>
                                    {{ $incident->name }}
                                    @if($incident->isScheduled)
                                    , scheduled for {{ $incident->published_at->format($dateFormat) }}
                                    @endif
                                </strong>
                                @if($incident->message)
                                <p><small>{{ Str::words($incident->message, 5) }}</small></p>
                                @endif
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/dashboard/incidents/{{ $incident->id }}/edit" class="btn btn-default">{{ trans('forms.edit') }}</a>
                                <a href="/dashboard/incidents/{{ $incident->id }}/delete" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
