@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto py-3">
        <table class="table table-bordered">
            <tr>
                <td colspan="3">
                    <img src="{{ $pharmacy->logo_src }}" alt="{{ __('Pharmacy Logo') }}">
                </td>
                <td>{{ $pharmacy->name }}</td>
                <td>{{ $pharmacy->address }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection