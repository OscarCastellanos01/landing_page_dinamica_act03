<!-- Features Section -->
<section id="features" class="features-section">
    <div class="container">
        <div class="row g-4">

            <?php foreach ($features as $feature): ?>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto">
                            <i 
                                class="<?php echo htmlspecialchars($feature['Feature_IconFontAwesome']); ?>"
                            ></i>
                        </div>
                        <h3><?php echo htmlspecialchars($feature['Feature_Title']); ?></h3>
                        <p 
                            class="text-muted"
                        >
                            <?php echo htmlspecialchars($feature['Feature_Description']); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="pricing-section">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($pricing as $price): ?>
                <div class="col-md-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo htmlspecialchars($price['Pricing_Title']); ?>
                            </h5>
                            <h2 class="card-price">
                                $<?php echo htmlspecialchars($price['Pricing_Price']); ?>
                                <small class="text-muted">/mo</small>
                            </h2>
                            <ul class="list-unstyled mt-4">
                                <?php 
                                $features = explode('|', $price['Features']);
                                foreach ($features as $feature): ?>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary me-2"></i>
                                        <?php echo htmlspecialchars($feature); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <button class="btn btn-primary w-100 mt-4">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>