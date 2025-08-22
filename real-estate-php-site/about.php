<?php
$base = dirname($_SERVER['SCRIPT_NAME']);
if ($base === DIRECTORY_SEPARATOR) $base = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Rudraa Housing India</title>
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
        .bg-about-hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://via.placeholder.com/1920x1080?text=About+Us+Hero') center/cover no-repeat;
        }
        .value-card {
            background: linear-gradient(135deg, #eef2ff, #e0e7ff);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100">
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="bg-about-hero min-h-screen flex items-center justify-center text-white">
        <div class="container mx-auto px-4 text-center animate-fadeInUp">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Turning Dreams into Reality: The Rudraa Housing India Story</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                For over a decade, we've been crafting vibrant communities and innovative spaces that inspire lives across India. Join us on a journey of excellence, innovation, and unwavering commitment to your future.
            </p>
            <a href="#our-story" class="inline-block bg-indigo-600 text-white py-3 px-8 rounded-full text-lg font-semibold hover:bg-indigo-700 transition">Discover Our Journey</a>
        </div>
    </section>

    <!-- Our Story Section -->
    <section id="our-story" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12 animate-fadeInUp">Our Inspiring Journey</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="animate-fadeInUp" style="animation-delay: 0.2s;">
                    <img src="https://via.placeholder.com/600x400?text=Our+Journey" alt="Rudraa Housing Journey" class="rounded-xl shadow-lg w-full">
                </div>
                <div class="space-y-6">
                    <p class="text-lg text-gray-600">
                        Founded with a passion for transforming aspirations into tangible realities, Rudraa Housing India has been at the forefront of real estate innovation since our inception. From humble beginnings in Dehradun's emerging locales like Nanda Ki Chowki, Sadhowala, and Dehrakhas, we've grown into a trusted name synonymous with quality and reliability.
                    </p>
                    <p class="text-lg text-gray-600">
                        Over the past 10+ years, we've developed modern residential projects—including plots, apartments, houses, and villas—that blend affordability with luxury. Our commercial ventures, such as offices, shops, and complexes, have empowered businesses and investors alike. What sets us apart? A deep understanding of local markets, forward-thinking designs, and a relentless focus on community-building.
                    </p>
                    <p class="text-lg text-gray-600">
                        We've not just built structures; we've created ecosystems with entertainment hubs, educational facilities, and spaces that foster growth and joy. Millions of smiles later, we're proud to have turned countless dreams into thriving realities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-50 to-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-xl shadow-lg hover-scale animate-fadeInUp">
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">Our Vision</h3>
                    <p class="text-lg text-gray-600">
                        Embodying our motto "Dreams into Reality," we aim to pioneer extraordinary developments using cutting-edge technology. With unwavering integrity and superior customer service, we're redefining living standards—infusing every home with stability, comfort, and endless potential for growth.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover-scale animate-fadeInUp" style="animation-delay: 0.2s;">
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">Our Mission</h3>
                    <p class="text-lg text-gray-600">
                        To emerge as India's leading conglomerate in residential and commercial real estate. We're committed to unparalleled customer satisfaction, multifaceted expansion, and becoming the go-to choice for all building needs—delivering landmark projects that elevate lifestyles and communities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12 animate-fadeInUp">Our Core Values: The Foundation of Excellence</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                <div class="value-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp">
                    <h4 class="text-xl font-semibold text-indigo-600 mb-2">Integrity & Transparency</h4>
                    <p class="text-gray-600">Building trust through honest practices and clear communication.</p>
                </div>
                <div class="value-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.1s;">
                    <h4 class="text-xl font-semibold text-indigo-600 mb-2">Accountability & Professionalism</h4>
                    <p class="text-gray-600">Delivering on promises with expertise and dedication.</p>
                </div>
                <div class="value-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.2s;">
                    <h4 class="text-xl font-semibold text-indigo-600 mb-2">Authenticity & Excellence</h4>
                    <p class="text-gray-600">Striving for genuine quality in every endeavor.</p>
                </div>
                <div class="value-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.3s;">
                    <h4 class="text-xl font-semibold text-indigo-600 mb-2">Responsibility & Respectability</h4>
                    <p class="text-gray-600">Upholding ethical standards and respecting all stakeholders.</p>
                </div>
                <div class="value-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.4s;">
                    <h4 class="text-xl font-semibold text-indigo-600 mb-2">Above and Beyond Assistance</h4>
                    <p class="text-gray-600">Going the extra mile to exceed expectations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-indigo-600 text-white text-center">
        <div class="container mx-auto px-4 animate-fadeInUp">
            <h2 class="text-4xl font-bold mb-6">Ready to Turn Your Dreams into Reality?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Whether you're seeking your perfect home or a smart investment, Rudraa Housing India is here to guide you every step of the way.</p>
            <a href="contact.php" class="inline-block bg-white text-indigo-600 py-3 px-8 rounded-full text-lg font-semibold hover:bg-gray-100 transition">Get in Touch Today</a>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>