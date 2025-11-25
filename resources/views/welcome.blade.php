<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-T8gyDCg0QpPNgm6kKiC9JIhbSAVnX1nvUs61f7oOJP7146D/EjV116IhVQbK5EOi33ECszO2vCuxR2YkZL8RKg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Blog Website</title>
</head>

<body>
    @include('layout.header')

    <main>
        <section class="hero">
            <div class="container">
                <h1>Welcome to BlogSpace</h1>
                <p>Discover insightful articles, tutorials, and stories from our community of writers. Expand your
                    knowledge and join the conversation.</p>
                <a href="#" class="cta-button">Start Reading</a>
            </div>
        </section>

        <div class="container">
            <h2 class="section-title">Latest Articles</h2>
            <div class="blog-grid">

                @forelse ($posts as $post)
                    <article class="blog-card">
                        <div class="card-image"
                            style="background-image: url('{{ $post->img_url ? asset($post->img_url) : asset('images/default.jpg') }}'); 
                background-size: cover; 
                background-position: center; 
                height: 200px;">
                        </div>

                        <div class="card-content">
                            <span class="card-category">{{ $post->category }}</span>
                            <h3 class="card-title">{{ $post->title }}</h3>
                            <p class="card-excerpt">
                                {{ \Illuminate\Support\Str::limit(strip_tags($post->blog_body), 100, '...') }}</p>
                            <div class="card-meta">
                                <span><i class="far fa-clock"></i> {{ $post->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </article>
                @empty
                    <p>No posts found.</p>
                @endforelse




            </div>
        </div>
    </main>



    @include('layout.footer')
    <script src="javascript/script.js"></script>
</body>

</html>
