
@extends('layouts.user')

@section('title', 'Trang sản phẩm')

@section('content')
    <h1>Welcome to Product</h1>
@endsection

@push('scripts')
<script src="{{ asset('js/admin/dashboard.js') }}"></script>
@endpush