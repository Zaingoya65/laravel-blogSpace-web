<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSpace - Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Navigation -->
    <header class="nav-container">
        <nav class="navbar">
            <a href="/admin" class="logo">
                <span class="logo-text">BlogSpace Admin</span>
            </a>

            <button class="mobile-toggle" id="mobileToggle">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="nav-links" id="navLinks">
                <li><a href="/admin" class="active">Add Post</a></li>
                <li><a href="/view">View Posts</a></li>
            </ul>
        </nav>
    </header>


    <main>
        <div class="container">

            <div class="blog-grid">
                @forelse ($post as $posts)
                    <article class="blog-card">
                        <div class="card-image"
                            style="background-image: url('{{ $posts->img_url ? asset($posts->img_url) : asset('images/default.jpg') }}'); 
                background-size: cover; 
                background-position: center; 
                height: 200px;">
                        </div>

                        <div class="card-content">
                            <span class="card-category">{{ $posts->category }}</span>
                            <h3 class="card-title">{{ $posts->title }}</h3>
                            <p class="card-excerpt">
                                {{ \Illuminate\Support\Str::limit(strip_tags($posts->blog_body), 100, '...') }}</p>
                            <div class="card-meta">
                                <span><i class="far fa-clock"></i> {{ $posts->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </article>
                @empty
                    <p>No posts found.</p>
                @endforelse
            </div>
        </div>
    </main>


</body>

</html>
