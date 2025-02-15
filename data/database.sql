CREATE DATABASE landing_page_mvc;

USE landing_page_mvc;

-- CREATE TABLE FEATURES
CREATE TABLE TBL_FEATURES (
    Feature_Id INT AUTO_INCREMENT PRIMARY KEY,
    Feature_Title VARCHAR(100) NOT NULL UNIQUE,
    Feature_Description TEXT NOT NULL,
    Feature_IconFontAwesome VARCHAR(75) NOT NULL
);

-- INSERT INTO FOR TABLE FEATURES
INSERT INTO TBL_FEATURES (Feature_Title, Feature_Description, Feature_IconFontAwesome) 
VALUES 
    ('Secure Platform', 'Enterprise-grade security to protect your data and privacy at all times.', 'bi bi-shield-check'),
    ('Fast Performance', 'Lightning-fast speeds ensure your work flows smoothly without interruption.', 'bi bi-rocket-takeoff'),
    ('Easy Integration', 'Seamlessly connects with your existing tools and workflows.', 'bi bi-lightning');

-- CREATE TABLE PRICING
CREATE TABLE TBL_PRICING (
    Pricing_Id INT AUTO_INCREMENT PRIMARY KEY,
    Pricing_Title VARCHAR(100) NOT NULL UNIQUE,
    Pricing_Price DECIMAL(10,2) NOT NULL
);

-- INSERT INTO FOR TABLE PRICING
INSERT INTO TBL_PRICING (Pricing_Title, Pricing_Price) 
VALUES 
    ('Basic', 9.00),
    ('Professional', 29.00),
    ('Premium', 99.00);

-- CREATE TABLE PRICE FEATURES
CREATE TABLE TBL_PRICE_FEATURES (
    PF_Id INT AUTO_INCREMENT PRIMARY KEY,
    PF_IdPricing INT NOT NULL,
    PF_Feature VARCHAR(75) NOT NULL,
    CONSTRAINT FK_Price_Feature FOREIGN KEY (PF_IdPricing) REFERENCES TBL_PRICING (Pricing_Id)
);

-- INSERT INTO FOR TABLE PRICE FEATURES
INSERT INTO TBL_PRICE_FEATURES (PF_IdPricing, PF_Feature) 
VALUES 
    (1, 'Basic features'),
    (1, 'Up to 5 users'),
    (1, '2GB storage'),
    (2, 'All Basic features'),
    (2, 'Up to 20 users'),
    (2, '10GB storage'),
    (3, 'All Pro features'),
    (3, 'Unlimited users'),
    (3, 'Unlimited storage');

-- CREATE TABLE TESTIMONIALS
CREATE TABLE TBL_TESTIMONIALS (
    Testimonial_Id INT AUTO_INCREMENT PRIMARY KEY,
    Testimonial_Description TEXT NOT NULL,
    Testimonial_Author VARCHAR(75) NOT NULL,
    Testimonial_JobPosition VARCHAR(75) NOT NULL
);

-- INSERT INTO FOR TABLE TESTIMONIALS
INSERT INTO TBL_TESTIMONIALS (Testimonial_Description, Testimonial_Author, Testimonial_JobPosition) 
VALUES 
    ('FakeProduct ha transformado nuestra forma de trabajar. Las mejoras en eficiencia son notables.', 'Juan Pérez', 'CEO, Empresa 1'),
    ('La mejor inversión que hemos hecho para nuestro equipo. El soporte es excepcional.', 'María García', 'CTO, Empresa 2'),
    ('Increíblemente fácil de usar. Ha mejorado nuestra productividad en un 200%.', 'Carlos Rodríguez', 'Director, Empresa 3');
