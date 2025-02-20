@extends('layouts.app')

@section('content')
<div class="welcome-container">
    <div class="welcome-card">
        <h1 class="welcome-title">
            <span class="emoji">👋</span>
            Welcome to Elysia
            <span class="emoji">🦊</span>
            <span class="emoji">👈</span>
        </h1>
        
        <p class="welcome-subtitle">Your high-performance web framework is up and running!</p>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🖊️</div>
                <h3 class="feature-title">Fast</h3>
                <p class="feature-description">Built for speed and efficiency</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3 class="feature-title">Modern</h3>
                <p class="feature-description">Using latest web technologies</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🔧</div>
                <h3 class="feature-title">Simple</h3>
                <p class="feature-description">Easy to use and maintain</p>
            </div>
        </div>
    </div>
</div>
@endsection
