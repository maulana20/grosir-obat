@extends('layouts.app')

@section('title', trans('accounting.balancesheet-account'))

@section('content')
<div class="pull-right">
    {{ link_to_route('balancesheet-account.index', 'Input Akun Baru', ['action' => 'create'], ['class' => 'btn btn-success']) }}
</div>
<h3 class="page-header">
    {{ trans('accounting.balancesheet-account') }}
</h3>

<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default table-responsive">
            <div class="panel-heading">Activa</div>
            <table class="table table-condensed">
                <tbody>
                    @foreach ($activa as $data)
                    <tr>
                        @if (!empty($data->parent))
                        <td style="padding-left: 25px;">{{ $data->name }}</td>
                        @else
                        <td>{{ $data->name }}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default table-responsive">
            <div class="panel-heading">Passiva</div>
            <table class="table table-condensed">
                <tbody>
                    @foreach ($passiva as $data)
                    <tr>
                        @if (!empty($data->parent))
                        <td style="padding-left: 25px;">{{ $data->name }}</td>
                        @else
                        <td>{{ $data->name }}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
