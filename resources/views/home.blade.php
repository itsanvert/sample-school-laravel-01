<div>
    <!-- He who is contented is rich. - Laozi -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBKU School - Empowering Future Leaders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .feature-card {
            transition: transform 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .stats-section {
            background: linear-gradient(rgba(13, 110, 253, 0.9), rgba(13, 110, 253, 0.9)),
                        url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1') center/cover no-repeat;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')
    @include('layouts.hero')

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose SBKU?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                            <h3 class="card-title h4">Quality Education</h3>
                            <p class="card-text">Experience world-class education with our expert faculty and modern facilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-3x text-primary mb-3"></i>
                            <h3 class="card-title h4">Strong Community</h3>
                            <p class="card-text">Join a diverse and supportive community of learners and educators.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-laptop fa-3x text-primary mb-3"></i>
                            <h3 class="card-title h4">Modern Facilities</h3>
                            <p class="card-text">Access state-of-the-art technology and learning resources.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section text-white py-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3 col-6">
                    <h2 class="display-4 fw-bold">500+</h2>
                    <p class="lead">Students</p>
                </div>
                <div class="col-md-3 col-6">
                    <h2 class="display-4 fw-bold">50+</h2>
                    <p class="lead">Teachers</p>
                </div>
                <div class="col-md-3 col-6">
                    <h2 class="display-4 fw-bold">30+</h2>
                    <p class="lead">Courses</p>
                </div>
                <div class="col-md-3 col-6">
                    <h2 class="display-4 fw-bold">95%</h2>
                    <p class="lead">Success Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Latest News</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="card-img-top" alt="News 1">
                        <div class="card-body">
                            <h5 class="card-title">Annual Science Fair 2024</h5>
                            <p class="card-text">Join us for an exciting showcase of student innovations and scientific discoveries.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="card-img-top" alt="News 2">
                        <div class="card-body">
                            <h5 class="card-title">Sports Tournament</h5>
                            <p class="card-text">Our annual inter-school sports tournament kicks off next month.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="card-img-top" alt="News 3">
                        <div class="card-body">
                            <h5 class="card-title">New Computer Lab</h5>
                            <p class="card-text">State-of-the-art computer lab opening this semester.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
