<?php 
require __DIR__ . '/includes/functions.php';

// Get filter values from URL
$city = $_GET['city'] ?? '';
$min = $_GET['min'] ?? '';
$max = $_GET['max'] ?? '';
$type = $_GET['type'] ?? '';

// Get filtered properties
$props = filter_properties(get_all_properties(), $city, $min, $max, $type);

// Get unique cities and types for the filter dropdowns
$cities = array_values(array_unique(array_map(fn($p) => $p['city'], get_all_properties())));
$types = array_values(array_unique(array_map(fn($p) => $p['type'], get_all_properties())));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudra Housing - All Listings</title>
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
        .card-content {
            height: 260px; /* Increased height to accommodate button */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .truncate-description {
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Reduced to 2 lines to ensure button visibility */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100">
    <?php include __DIR__ . '/includes/header.php'; ?>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-12 animate-fadeInUp">All Listings</h1>

            <!-- Search / Filter Form -->
            <form method="get" action="" class="flex flex-wrap gap-4 justify-center mb-12 bg-gray-50 p-6 rounded-xl shadow-md">
                <select name="city" class="p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:outline-none min-w-[150px] bg-white">
                    <option value="">All Cities</option>
                    <?php foreach ($cities as $c): ?>
                        <option value="<?php echo htmlspecialchars($c); ?>" <?php echo $c === $city ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($c); ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <select name="type" class="p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:outline-none min-w-[150px] bg-white">
                    <option value="">All Types</option>
                    <?php foreach ($types as $t): ?>
                        <option value="<?php echo htmlspecialchars($t); ?>" <?php echo $t === $type ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($t); ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <input type="number" name="min" placeholder="Min Price" value="<?php echo htmlspecialchars($min); ?>" class="p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:outline-none w-32">
                <input type="number" name="max" placeholder="Max Price" value="<?php echo htmlspecialchars($max); ?>" class="p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:outline-none w-32">
                
                <button type="submit" class="bg-indigo-600 text-white py-3 px-6 rounded-lg hover:bg-indigo-700 transition">Search</button>
            </form>

            <!-- No results message -->
            <?php if (empty($props)): ?>
                <div class="text-center text-red-500 text-lg font-semibold mb-8 animate-fadeInUp">No properties match your filters.</div>
            <?php endif; ?>

            <!-- Properties Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($props as $p): ?>
                    <article class="bg-gray-50 rounded-xl shadow-lg overflow-hidden hover-scale">
                        <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['title']); ?>" class="w-full h-64 object-cover">
                        <div class="p-6 card-content">
                            <div>
                                <h3 class="text-2xl font-semibold text-gray-800 mb-2"><?php echo htmlspecialchars($p['title']); ?></h3>
                                <div class="text-xl font-bold text-indigo-600 mb-3">₹<?php echo number_format($p['price']); ?></div>
                                <p class="text-gray-600 text-sm mb-3">
                                    <?php echo htmlspecialchars($p['city']); ?> • <?php echo htmlspecialchars($p['type']); ?> • 
                                    <?php echo (int)$p['beds']; ?> Beds • <?php echo (int)$p['baths']; ?> Baths • 
                                    <?php echo (int)$p['area_sqft']; ?> sqft
                                </p>
                                <p class="text-gray-700 truncate-description"><?php echo htmlspecialchars($p['description']); ?></p>
                            </div>
                            <a href="property.php?id=<?php echo (int)$p['id']; ?>" class="block w-full bg-indigo-600 text-white py-3 rounded-lg text-center hover:bg-indigo-700 transition">View Details</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>