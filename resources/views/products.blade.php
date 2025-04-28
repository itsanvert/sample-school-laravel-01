
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Programs - SBKU University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="container py-5">
        <h1 class="text-center mb-5">Our Academic Programs</h1>

        <div class="row g-4">
            <!-- Undergraduate Programs -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Undergraduate Programs</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">Bachelor of Computer Science</li>
                            <li class="mb-2">Bachelor of Business Administration</li>
                            <li class="mb-2">Bachelor of Engineering</li>
                            <li class="mb-2">Bachelor of Arts in Communication</li>
                            <li class="mb-2">Bachelor of Science in Psychology</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Graduate Programs -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Graduate Programs</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">Master of Business Administration</li>
                            <li class="mb-2">Master of Computer Science</li>
                            <li class="mb-2">Master of Engineering</li>
                            <li class="mb-2">Ph.D. in Computer Science</li>
                            <li class="mb-2">Ph.D. in Business Administration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>