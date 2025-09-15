@extends('layouts.app')

@section('title', 'About Page')

@section('content')
    <h1 class="text-success">About Us</h1>
    <p class="lead">This page tells you more about our Laravel project.</p>

    <a href="/" class="btn btn-outline-primary m-2">Back to Home</a>
    <a href="/contact" class="btn btn-outline-success m-2">Go to Contact Page</a>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        console.log("About Page Loaded");
    });
</script>
@endsection
