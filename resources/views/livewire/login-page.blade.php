<div>
<div id="cursor-dot" class="cursor-dot"></div>

<div class="min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg backdrop-blur-sm bg-white/90 hover:shadow-xl transition-all duration-300">
        <!-- Header -->
        <div class="text-center animate-float">
            <h2 class="text-3xl font-bold text-primary">Selamat Datang!</h2>
            <p class="mt-2 text-sm text-primary/60">Sebelum mengeksplor, masuk terlebih dahulu!</p>
        </div>

        <!-- Login Form -->
        <form class="mt-8 space-y-6">
            <div class="space-y-4">
                <div class="input-wrapper">
                    <label for="email" class="block text-sm font-medium text-primary">Email</label>
                    <input type="email" id="email" name="email" required
                           class="mt-1 block w-full px-3 py-2 bg-primary/5 border border-primary/20 rounded-md shadow-sm focus:ring-2 focus:ring-primary/30 focus:border-primary/30 focus:outline-none transition-all duration-300"
                           placeholder="Enter your email">
                </div>

                <div class="input-wrapper">
                    <label for="password" class="block text-sm font-medium text-primary">Password</label>
                    <input type="password" id="password" name="password" required
                           class="mt-1 block w-full px-3 py-2 bg-primary/5 border border-primary/20 rounded-md shadow-sm focus:ring-2 focus:ring-primary/30 focus:border-primary/30 focus:outline-none transition-all duration-300"
                           placeholder="Enter your password">
                </div>
            </div>

            <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/30 transform hover:-translate-y-1 transition-all duration-300">
                Sign in
            </button>

            <div class="text-center text-sm">
                <span class="text-primary/60">Belum punya akun?</span>
                <a href="{{ route('register-page') }}" class="font-medium text-primary hover:text-primary/80 ml-1 transition-colors duration-300">Daftar</a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('mousemove', (e) => {
        const cursor = document.getElementById('cursor-dot');
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    // Add particle effect for clicks
    document.addEventListener('click', (e) => {
        const particle = document.createElement('div');
        particle.style.position = 'fixed';
        particle.style.left = e.clientX + 'px';
        particle.style.top = e.clientY + 'px';
        particle.style.width = '10px';
        particle.style.height = '10px';
        particle.style.backgroundColor = '#312414';
        particle.style.borderRadius = '50%';
        particle.style.pointerEvents = 'none';
        particle.style.opacity = '0.5';
        particle.style.transition = 'all 0.5s ease';

        document.body.appendChild(particle);

        setTimeout(() => {
            particle.style.transform = 'scale(2)';
            particle.style.opacity = '0';
        }, 10);

        setTimeout(() => {
            particle.remove();
        }, 500);
    });
</script>

</div>
