<?php 
require __DIR__ . '/includes/functions.php';
$properties = get_all_properties();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudra Housing - Find Your Dream Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }
        .bg-hero {
            position: relative;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/hero.jpg') center/cover no-repeat;
        }
        .bg-hero video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .step-number {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #4f46e5, #3b82f6);
            color: white;
            font-weight: bold;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        .step-card:hover .step-number {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100">
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="bg-hero min-h-screen flex items-center justify-center text-white">
        <video autoplay loop muted playsinline>
            <source src="assets/videos/istockphoto-1428253293-640_adpp_is.mp4" type="video/mp4">
        </video>
        <div class="container mx-auto px-4 text-center animate-fadeInUp">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Discover Your Dream Home with Rudra Housing</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                Explore premium properties in Mathura, Vrindavan, Jaipur, and Behror
            </p>
            <a href="#projects" class="inline-block bg-indigo-600 text-white py-3 px-8 rounded-full text-lg font-semibold hover:bg-indigo-700 transition">Explore Projects</a>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 animate-fadeInUp">Featured Projects</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($properties as $prop): ?>
                    <div class="bg-gray-50 rounded-xl shadow-lg overflow-hidden hover-scale">
                        <img src="<?php echo htmlspecialchars($prop['image']); ?>" alt="<?php echo htmlspecialchars($prop['title']); ?>" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-2"><?php echo htmlspecialchars($prop['title']); ?></h3>
                            <div class="text-xl font-bold text-indigo-600 mb-3">₹<?php echo number_format($prop['price']); ?></div>
                            <p class="text-gray-600 text-sm mb-4">
                                <?php echo htmlspecialchars($prop['city']); ?> • <?php echo htmlspecialchars($prop['type']); ?> • 
                                <?php echo (int)$prop['beds']; ?> Beds • <?php echo (int)$prop['baths']; ?> Baths • 
                                <?php echo (int)$prop['area_sqft']; ?> sqft
                            </p>
                            <p class="text-gray-700 mb-4"><?php echo htmlspecialchars($prop['description']); ?></p>
                            <a href="property.php?id=<?php echo (int)$prop['id']; ?>" class="block w-full bg-indigo-600 text-white py-3 rounded-lg text-center hover:bg-indigo-700 transition">View Details</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 4-Step Easy Buy Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-100 to-blue-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12 animate-fadeInUp">Your Dream Plot in 4 Easy Steps</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="step-card bg-white p-6 rounded-xl shadow-lg hover-scale animate-fadeInUp" style="animation-delay: 0.1s;">
                    <div class="step-number">01</div>
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4 mb-2">Connect With Us</h3>
                    <p class="text-gray-600">Reach out via call, WhatsApp, or our inquiry form. We’ll discuss your budget and preferences to find the perfect plot.</p>
                </div>
                <div class="step-card bg-white p-6 rounded-xl shadow-lg hover-scale animate-fadeInUp" style="animation-delay: 0.2s;">
                    <div class="step-number">02</div>
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4 mb-2">Site Visit & Tour</h3>
                    <p class="text-gray-600">Join us for a guided tour to explore the project location and available plots with no pressure.</p>
                </div>
                <div class="step-card bg-white p-6 rounded-xl shadow-lg hover-scale animate-fadeInUp" style="animation-delay: 0.3s;">
                    <div class="step-number">03</div>
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4 mb-2">Choose & Book</h3>
                    <p class="text-gray-600">Select your ideal plot and complete the booking with minimal paperwork and full transparency.</p>
                </div>
                <div class="step-card bg-white p-6 rounded-xl shadow-lg hover-scale animate-fadeInUp" style="animation-delay: 0.4s;">
                    <div class="step-number">04</div>
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4 mb-2">Register & Possess</h3>
                    <p class="text-gray-600">We guide you through registration and hand over possession, so you can start building your dream.</p>
                </div>
            </div>
            <div class="text-center mt-12 animate-fadeInUp" style="animation-delay: 0.5s;">
                <a href="contact.php" class="inline-block bg-indigo-600 text-white py-3 px-8 rounded-full text-lg font-semibold hover:bg-indigo-700 transition">Start Your Journey</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-50 to-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6 animate-fadeInUp">Why Choose Rudra Housing?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                At Rudra Housing, we craft premium residential and villa projects across Mathura, Vrindavan, Jaipur, and Behror. 
                Our commitment to transparent pricing, modern designs, and trusted service turns your dream home into reality.
            </p>
            <a href="contact.php" class="inline-block bg-indigo-600 text-white py-3 px-8 rounded-full text-lg font-semibold hover:bg-indigo-700 transition">Get in Touch</a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-12 animate-fadeInUp">What Our Clients Say</h2>
            <div class="max-w-2xl mx-auto">
                <div class="bg-white p-8 rounded-xl shadow-md animate-fadeInUp">
                    <p class="text-gray-600 italic mb-4">
                        “Rudra Housing made buying my first home easy and stress-free. Highly recommended!”
                    </p>
                    <p class="text-gray-800 font-semibold">– Ankit Sharma</p>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>