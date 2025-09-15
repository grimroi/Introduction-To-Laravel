@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1 class="text-primary">Welcome to Laravel Routing Demo</h1>
    <p class="lead">This is the Home page.</p>

    <a href="/about" class="btn btn-outline-primary m-2">Go to About Page</a>
    <a href="/contact" class="btn btn-outline-success m-2">Go to Contact Page</a>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        console.log("Home Page Loaded");
    });
</script>
@endsection
