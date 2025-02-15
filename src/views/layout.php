<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeProduct - Transform Your Workflow</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/styles.css">
</head>
<body>
    <!-- Header/Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="bi bi-lightning-charge-fill me-2"></i>
                FakeProduct
            </a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            href="#features"
                        >
                            Features
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            href="#pricing"
                        >
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            href="#testimonials"
                        >
                            Testimonios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="btn btn-primary ms-lg-3" 
                            href="#contact"
                        >
                            Empezar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Transform your workflow with FakeProduct</h1>
                    <p 
                        class="lead mb-4">
                        Streamline your process, boost productivity, and achieve more with our innovative solution.
                    </p>
                    <div class="d-flex gap-3">
                        <button 
                            class="btn btn-primary btn-lg"
                        >
                            Start Free Trial
                        </button>
                        <button 
                            class="btn btn-outline-secondary btn-lg"
                        >
                            Watch Demo
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light p-5 text-center rounded">
                        <p class="text-muted">Hero Image Placeholder</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $content; ?>

    <!-- Footer -->
    <footer class="bg-light py-5 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="mb-3">FakeProduct</h5>
                    <p 
                        class="text-muted"
                    >
                        Transform your workflow with our innovative solution.
                    </p>
                </div>

                <div class="col-lg-4">
                    <h5 class="mb-3">Contacto</h5>
                    <p 
                        class="mb-1"
                    >
                        <i class="bi bi-envelope me-2"></i>
                        contact@fakeproduct.com
                    </p>
                    <p>
                        <i class="bi bi-telephone me-2"></i>
                        (555) 123-4567
                    </p>
                </div>

                <div class="col-lg-4">
                    <h5 class="mb-3">Síguenos</h5>
                    <div class="d-flex gap-3">
                        <a 
                            href="#" 
                            class="text-dark"
                        >
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a 
                            href="#" 
                            class="text-dark"
                        >
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a 
                            href="#" 
                            class="text-dark"
                        >
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="my-4">
            <div class="text-center text-muted">
                <small>&copy; <?php echo date('Y'); ?> FakeProduct. Todos los derechos reservados.</small>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="<?php echo BASE_URL; ?>/js/script.js"></script>
</body>
</html>
