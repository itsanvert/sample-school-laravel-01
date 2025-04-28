<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SBKU University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .contact-icon {
            font-size: 1.5rem;
            color: #0d6efd;
            width: 40px;
        }
        .contact-card {
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-5px);
        }
        .form-control {
            border-radius: 10px;
            padding: 12px;
        }
        .btn-submit {
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <div class="container my-5" id="contact">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="display-4 mb-3">Contact Us</h2>
                <p class="text-muted">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="contact-card bg-white p-4">
                    <form>
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-submit w-100">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-card bg-white p-4">
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope contact-icon"></i>
                            <div>
                                <h5 class="mb-1">Email</h5>
                                <p class="mb-0"><a href="mailto:info@sbku.edu" class="text-decoration-none">info@sbku.edu</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone contact-icon"></i>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p class="mb-0"><a href="tel:(123)456-7890" class="text-decoration-none">(123) 456-7890</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <p class="mb-0">123 Education Street,<br>School District, City</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000!2d!3d!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM27CsDA!5e0!3m2!1sen!2sid!4v1234567890!5m2!1sen!2sid" 
                            width="100%" 
                            height="200" 
                            style="border:0; border-radius: 10px;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>