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

    <!-- Main Content -->
    <main>
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">Create New Blog Post</h1>
                <p class="page-description">Fill out the form below to add a new blog post to your website</p>
            </div>

            <!-- Blog Post Form -->
            <div class="form-container">
             <form action="{{ route('posts.store') }}" id="blogForm" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="blogImage">Blog Image</label>
        <input type="file" name="blogImage" id="blogImage" class="form-input">
    </div>

    <div class="form-group">
        <label for="blogCategory">Category</label>
        <select name="blogCategory" id="blogCategory">
            <option value="">Select a category</option>
            <option value="T">Technology</option>
            <option value="H">Health</option>
            <option value="B">Beauty</option>
        </select>
    </div>

    <div class="form-group">
        <label for="blogTitle">Blog Title</label>
        <input type="text" name="blogTitle" id="blogTitle" class="form-input">
    </div>

    <div class="form-group">
        <label>Blog Content</label>
        <div id="blogContent" class="editor-content" contenteditable="true"></div>
        <textarea name="blog_body" id="blogBodyInput" style="display:none;"></textarea>
    </div>

    <div class="form-actions">
        <button type="submit">Add Blog Post</button>
    </div>
</form>

<script>
const form = document.getElementById('blogForm');
const editor = document.getElementById('blogContent');
const hiddenBody = document.getElementById('blogBodyInput');

form.addEventListener('submit', function() {
    hiddenBody.value = editor.innerHTML;
});
</script>

            </div>

            
        </div>
    </main>

</body>
</html>