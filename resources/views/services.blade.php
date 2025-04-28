<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - SBKU University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .service-card {
            padding: 2rem;
            border-radius: 15px;
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
        }
        .service-icon {
            font-size: 3rem;
            color: #0d6efd;
            margin-bottom: 1.5rem;
        }
        .service-title {
            color: #333;
            margin-bottom: 1rem;
        }
        .service-description {
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <div class="container-fluid bg-light py-5" id="services">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-4 mb-3">Our Services</h2>
                    <p class="lead text-muted">Empowering education through comprehensive facilities and support services</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card h-100">
                        <div class="text-center">
                            <i class="fas fa-book service-icon"></i>
                            <h4 class="service-title">Library Services</h4>
                            <p class="service-description">Access to extensive digital and physical collections, study spaces, and research resources.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-card h-100">
                        <div class="text-center">
                            <i class="fas fa-flask service-icon"></i>
                            <h4 class="service-title">Research Labs</h4>
                            <p class="service-description">State-of-the-art laboratories equipped with modern research facilities and equipment.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-card h-100">
                        <div class="text-center">
                            <i class="fas fa-bus service-icon"></i>
                            <h4 class="service-title">Transportation</h4>
                            <p class="service-description">Reliable campus shuttle service and transportation facilities for students and staff.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-card h-100">
                        <div class="text-center">
                            <i class="fas fa-dumbbell service-icon"></i>
                            <h4 class="service-title">Sports Facilities</h4>
                            <p class="service-description">Modern sports complexes, gymnasium, and recreational facilities for physical activities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>