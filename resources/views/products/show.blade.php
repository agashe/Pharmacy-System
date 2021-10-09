@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto py-3">
        <table class="table table-bordered">
            <tr>
                <td rowspan="2" class="text-center">
                    <img src="{{ $product->image_src }}" alt="{{ __('Product Logo') }}">
                </td>
                <td colspan="2">
                    <h4>{{ $product->title }}</h4>
                </td>
            </tr>
            <tr>
                <td>{{ $product->desc }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection