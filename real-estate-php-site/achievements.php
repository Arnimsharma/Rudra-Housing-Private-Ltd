<?php
$base = dirname($_SERVER['SCRIPT_NAME']);
if ($base === DIRECTORY_SEPARATOR) $base = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements - Rudraa Housing India</title>
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
        .bg-achievements-hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://via.placeholder.com/1920x1080?text=Achievements+Hero') center/cover no-repeat;
        }
        .certificate-card {
            background: linear-gradient(135deg, #eef2ff, #e0e7ff);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100">
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="bg-achievements-hero min-h-screen flex items-center justify-center text-white">
        <div class="container mx-auto px-4 text-center animate-fadeInUp">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Celebrating Excellence: Our Achievements</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                At Rudraa Housing India, our pursuit of excellence has earned us recognition that fuels our passion to create exceptional living spaces. Explore our proud milestones and accolades.
            </p>
            <a href="#certificates" class="inline-block bg-indigo-600 text-white py-3 px-8 rounded-full text-lg font-semibold hover:bg-indigo-700 transition">View Our Awards</a>
        </div>
    </section>

    <!-- Achievements Section -->
    <section id="certificates" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12 animate-fadeInUp">Our Certificates of Excellence</h2>
            <p class="text-lg text-gray-600 text-center max-w-3xl mx-auto mb-12">
                Rudraa Housing India is honored to have received numerous accolades that reflect our commitment to quality, innovation, and community-building. Each certificate marks a milestone in our journey to turn dreams into reality.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Certificate 1 -->
                <div class="certificate-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp">
                    <img src="https://via.placeholder.com/300x200?text=Certificate+1" alt="Best Residential Developer Award" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Best Residential Developer Award</h3>
                    <p class="text-gray-600">Recognized for outstanding residential projects in Dehradun, 2023.</p>
                </div>
                <!-- Certificate 2 -->
                <div class="certificate-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.1s;">
                    <img src="https://via.placeholder.com/300x200?text=Certificate+2" alt="Excellence in Affordable Housing" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Excellence in Affordable Housing</h3>
                    <p class="text-gray-600">Awarded for innovative affordable housing solutions, 2022.</p>
                </div>
                <!-- Certificate 3 -->
                <div class="certificate-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.2s;">
                    <img src="https://via.placeholder.com/300x200?text=Certificate+3" alt="Top Real Estate Innovator" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Top Real Estate Innovator</h3>
                    <p class="text-gray-600">Honored for pioneering urban development projects, 2021.</p>
                </div>
                <!-- Certificate 4 -->
                <div class="certificate-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.3s;">
                    <img src="https://via.placeholder.com/300x200?text=Certificate+4" alt="Customer Satisfaction Excellence" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Customer Satisfaction Excellence</h3>
                    <p class="text-gray-600">Celebrated for exceptional client service, 2020.</p>
                </div>
                <!-- Certificate 5 -->
                <div class="certificate-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.4s;">
                    <img src="https://via.placeholder.com/300x200?text=Certificate+5" alt="Sustainable Development Award" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Sustainable Development Award</h3>
                    <p class="text-gray-600">Recognized for eco-friendly construction practices, 2019.</p>
                </div>
                <!-- Certificate 6 -->
                <div class="certificate-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.5s;">
                    <img src="https://via.placeholder.com/300x200?text=Certificate+6" alt="Best Commercial Project" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Best Commercial Project</h3>
                    <p class="text-gray-600">Awarded for innovative commercial spaces, 2018.</p>
                </div>
                <!-- Certificate 7 -->
                <div class="certificate-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.6s;">
                    <img src="https://via.placeholder.com/300x200?text=Certificate+7" alt="Community Impact Award" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Community Impact Award</h3>
                    <p class="text-gray-600">Honored for fostering vibrant communities, 2017.</p>
                </div>
                <!-- Certificate 8 -->
                <div class="certificate-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.7s;">
                    <img src="https://via.placeholder.com/300x200?text=Certificate+8" alt="Architectural Excellence" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Architectural Excellence</h3>
                    <p class="text-gray-600">Recognized for innovative design in residential projects, 2016.</p>
                </div>
                <!-- Certificate 9 -->
                <div class="certificate-card p-6 rounded-xl shadow-md text-center hover-scale animate-fadeInUp" style="animation-delay: 0.8s;">
                    <img src="https://via.placeholder.com/300x200?text=Certificate+9" alt="Industry Leader Award" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Industry Leader Award</h3>
                    <p class="text-gray-600">Celebrated for setting benchmarks in real estate, 2015.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-indigo-600 text-white text-center">
        <div class="container mx-auto px-4 animate-fadeInUp">
            <h2 class="text-4xl font-bold mb-6">Inspired by Our Achievements?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join us in building a brighter future. Explore our projects or partner with us to create something extraordinary.</p>
            <div class="flex justify-center gap-4">
                <a href="<?php echo $base; ?>/index.php#projects" class="inline-block bg-white text-indigo-600 py-3 px-8 rounded-full text-lg font-semibold hover:bg-gray-100 transition">Explore Projects</a>
                <a href="<?php echo $base; ?>/partner.php" class="inline-block bg-transparent border-2 border-white text-white py-3 px-8 rounded-full text-lg font-semibold hover:bg-white hover:text-indigo-600 transition">Partner With Us</a>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>