@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto py-3">
        <table class="table table-bordered">
            <tr>
                <td rowspan="2" class="text-center">
                    <img src="{{ $pharmacy->logo_src }}" alt="{{ __('Pharmacy Logo') }}">
                </td>
                <td colspan="2">
                    <h4>{{ $pharmacy->name }}</h4>
                </td>
            </tr>
            <tr>
                <td>{{ $pharmacy->address }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection