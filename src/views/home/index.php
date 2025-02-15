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