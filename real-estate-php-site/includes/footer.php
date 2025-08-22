</main>
<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Brand and Description -->
            <div class="space-y-4">
                <div class="flex items-center">
                    <img src="assets\images\Rudra-logo.webp" alt="Rudraa Housing Logo" class="h-10">
                </div>
                <p class="text-gray-400 text-sm">
                    Rudraa Housing India is committed to turning dreams into reality with premium residential and commercial spaces across India.
                </p>
                <div class="flex space-x-4">
                    <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-indigo-600 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-indigo-600 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733a4.67 4.67 0 0 0 2.048-2.578 9.3 9.3 0 0 1-2.958 1.13 4.66 4.66 0 0 0-7.938 4.25 13.229 13.229 0 0 1-9.602-4.868c-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878a4.647 4.647 0 0 1-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568a4.678 4.678 0 0 1-2.103.08c.592 1.845 2.313 3.188 4.352 3.226a9.356 9.356 0 0 1-5.786 1.995c-.376 0-.747-.022-1.112-.065a13.22 13.22 0 0 0 7.162 2.098c8.581 0 13.297-7.11 13.297-13.297 0-.202-.005-.403-.014-.603a9.5 9.5 0 0 0 2.331-2.416z"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="text-gray-400 hover:text-indigo-600 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="<?php echo $base; ?>/index.php" class="hover:text-indigo-600 transition">Home</a></li>
                    <li><a href="<?php echo $base; ?>/about.php" class="hover:text-indigo-600 transition">About Us</a></li>
                    <li><a href="<?php echo $base; ?>/global-presence.php" class="hover:text-indigo-600 transition">Global Presence</a></li>
                    <li><a href="<?php echo $base; ?>/achievements.php" class="hover:text-indigo-600 transition">Achievements</a></li>
                    <li><a href="<?php echo $base; ?>/partner.php" class="hover:text-indigo-600 transition">Partner With Us</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                <ul class="space-y-2 text-gray-400">
                    <li>Email: <a href="mailto:info@rudraahousing.com" class="hover:text-indigo-600 transition">info@rudraahousing.com</a></li>
                    <li>Phone: <a href="tel:+911234567890" class="hover:text-indigo-600 transition">+91 123 456 7890</a></li>
                    <li>Address: Dehradun, Uttarakhand, India</li>
                </ul>
            </div>

            <!-- Newsletter Signup -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Stay Updated</h3>
                <p class="text-gray-400 text-sm mb-4">Subscribe to our newsletter for the latest updates and offers.</p>
                <div class="flex">
                    <input type="email" placeholder="Enter your email" class="p-2 rounded-l-lg bg-gray-800 border-none focus:ring-2 focus:ring-indigo-600 text-white w-full">
                    <button class="bg-indigo-600 text-white p-2 rounded-r-lg hover:bg-indigo-700 transition">Subscribe</button>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-gray-700 text-center text-gray-400">
            <p>© <?php echo date('Y'); ?> Rudraa Housing India. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>