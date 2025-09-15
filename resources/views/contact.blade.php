@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
    <h1 class="text-danger">Contact Us</h1>
    <form class="bg-white p-4 shadow rounded mx-auto" style="max-width: 500px;">
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Message:</label>
            <textarea name="message" rows="4" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send</button>
    </form>

    <div class="mt-3">
        <a href="/" class="btn btn-outline-primary m-2">Back to Home</a>
        <a href="/about" class="btn btn-outline-success m-2">Go to About Page</a>
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        console.log("Contact Page Loaded");

        const form = document.querySelector("form");
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            alert("Form submitted successfully!");
        });
    });
</script>
@endsection
