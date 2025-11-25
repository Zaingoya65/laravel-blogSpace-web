<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-T8gyDCg0QpPNgm6kKiC9JIhbSAVnX1nvUs61f7oOJP7146D/EjV116IhVQbK5EOi33ECszO2vCuxR2YkZL8RKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Blog Website</title>
</head>
<body>
    @include('layout.header')


    <main>
        

        <div class="container">
            <h2 class="section-title">Tech Articles</h2>
            <div class="blog-grid">
                <article class="blog-card">
                    <div class="card-image" style="background-color: #3498db;"></div>
                    <div class="card-content">
                        <span class="card-category">Technology</span>
                        <h3 class="card-title">The Future of Web Development in 2023</h3>
                        <p class="card-excerpt">Explore the latest trends and technologies shaping the future of web development and how they will impact your projects.</p>
                        <div class="card-meta">
                            <span><i class="far fa-calendar"></i> June 15, 2023</span>
                            
                        </div>
                    </div>
                </article>

               
            </div>
        </div>
    </main>



    @include('layout.footer')
    <script src="javascript/script.js"></script>
</body>
</html>