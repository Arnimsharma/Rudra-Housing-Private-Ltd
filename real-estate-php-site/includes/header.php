<?php
$base = dirname($_SERVER['SCRIPT_NAME']);
if ($base === DIRECTORY_SEPARATOR) $base = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudra Housing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .nav-link {
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .nav-link:hover {
            color: #4f46e5;
            transform: translateY(-2px);
        }
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }
        .hamburger span {
            width: 25px;
            height: 3px;
            background: #1f2937;
            transition: all 0.3s ease;
        }
        #nav-menu {
            transition: all 0.3s ease;
        }
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }
            #nav-menu {
                display: none;
            }
            #nav-menu.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 80px;
                left: 0;
                right: 0;
                background: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 1rem;
            }
            #nav-menu.active a {
                padding: 0.5rem 0;
            }
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="brand">
                <a href="<?php echo $base; ?>/index.php" class="flex items-center">
                    <img src="assets\images\Rudra-logo.webp" alt="Rudra Housing Logo" class="h-12">
                </a>
            </div>

            <!-- Navigation -->
            <nav id="nav-menu" class="flex items-center space-x-6">
                <a href="<?php echo $base; ?>/index.php" class="text-gray-800 font-semibold nav-link">Home</a>
                <a href="<?php echo $base; ?>/about.php" class="text-gray-800 font-semibold nav-link">About Us</a>
                <a href="<?php echo $base; ?>/global-presence.php" class="text-gray-800 font-semibold nav-link">Global Presence</a>
                <a href="<?php echo $base; ?>/achievements.php" class="text-gray-800 font-semibold nav-link">Achievements</a>
                <a href="<?php echo $base; ?>/partner.php" class="text-gray-800 font-semibold nav-link">Partner With Us</a>
            </nav>

            <!-- Hamburger Menu for Mobile -->
            <div class="hamburger md:hidden">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <main>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('#nav-menu');
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            hamburger.querySelectorAll('span').forEach(span => {
                span.classList.toggle('bg-gray-800');
            });
        });
    </script>
</body>
</html>