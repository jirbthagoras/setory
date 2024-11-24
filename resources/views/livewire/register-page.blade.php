<div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg backdrop-blur-sm bg-white/90 hover:shadow-xl transition-all duration-300">
            <!-- Header -->
            <div class="text-center animate-float">
                <h2 class="text-3xl font-bold text-primary">Create Account</h2>
                <p class="mt-2 text-sm text-primary/60">Bergabung dengan kami untuk menjelajahi waktu!</p>
            </div>

            @if (session('success'))
        <div class="p-4 mb-4 text-green-600 bg-green-100 rounded">
            {{ session('success') }}
        </div>
            @endif

            <!-- Register Form -->
            <form wire:submit.prevent='create' class="mt-8 space-y-6">
                <div class="space-y-4">
                    <div class="input-wrapper">
                        <label for="name" class="block text-sm font-medium text-primary">Nama</label>
                        <input type="text" id="name" name="name" required
                            wire:model='name'
                            class="mt-1 block w-full px-3 py-2 bg-primary/5 border border-primary/20 rounded-md shadow-sm focus:ring-2 focus:ring-primary/30 focus:border-primary/30 focus:outline-none transition-all duration-300"
                            placeholder="Enter your full name">
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="input-wrapper">
                        <label for="email" class="block text-sm font-medium text-primary">Email</label>
                        <input type="email" id="email" name="email" required
                            wire:model='email'
                            class="mt-1 block w-full px-3 py-2 bg-primary/5 border border-primary/20 rounded-md shadow-sm focus:ring-2 focus:ring-primary/30 focus:border-primary/30 focus:outline-none transition-all duration-300"
                            placeholder="your.email@example.com">
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div id="passwordWrapper" class="password-input-wrapper p-4 rounded-lg border border-primary/20">
                        <label for="password" class="block text-sm font-medium text-primary">Password</label>
                        <input type="password" id="password" name="password" required
                            wire:model='password'
                            class="mt-1 block w-full px-3 py-2 bg-primary/5 border border-primary/20 rounded-md shadow-sm focus:ring-2 focus:ring-primary/30 focus:border-primary/30 focus:outline-none transition-all duration-300"
                            placeholder="Create a strong password"
                            oninput="updatePasswordStrength(this.value)"
                            maxlength="30">
                        <div class="mt-3 grid grid-cols-4 gap-2">
                            <div id="strengthBar1" class="h-1 rounded-full bg-gray-200 transition-all duration-300"></div>
                            <div id="strengthBar2" class="h-1 rounded-full bg-gray-200 transition-all duration-300"></div>
                            <div id="strengthBar3" class="h-1 rounded-full bg-gray-200 transition-all duration-300"></div>
                            <div id="strengthBar4" class="h-1 rounded-full bg-gray-200 transition-all duration-300"></div>
                        </div>
                        <p id="passwordStrengthText" class="font-bold text-xs mt-2 transition-all duration-300">Masukkan Password</p>
                        @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- <div class="flex items-center">
                    <input type="checkbox" id="terms"
                        class="h-4 w-4 rounded border-primary/20 text-primary focus:ring-primary/30">
                    <label for="terms" class="ml-2 block text-sm text-primary">
                        Sayae <a href="#" class="font-medium text-primary hover:text-primary/80">Terms</a> and
                        <a href="#" class="font-medium text-primary hover:text-primary/80">Privacy Policy</a>
                    </label>
                </div> -->

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/30 transform hover:-translate-y-1 transition-all duration-300">
                    Create Account
                </button>

                <div class="text-center text-sm">
                    <span class="text-primary/60">Sudah punya akun? Ayo</span>
                    <a href="{{route('login-page')}}" class="font-medium text-primary hover:text-primary/80 ml-1 transition-colors duration-300">Log In</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Cursor following effect
        document.addEventListener('mousemove', (e) => {
            const cursor = document.getElementById('cursor-dot');
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Click particle effect
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

        // Enhanced password strength checker
        function updatePasswordStrength(password) {
            const wrapper = document.getElementById('passwordWrapper');
            const strengthText = document.getElementById('passwordStrengthText');
            const bars = [
                document.getElementById('strengthBar1'),
                document.getElementById('strengthBar2'),
                document.getElementById('strengthBar3'),
                document.getElementById('strengthBar4')
            ];

            let strength = 0;
            let strengthClass = 'strength-very-weak';
            let strengthLabel = 'Sangat Lemah';

            // Reset all bars
            bars.forEach(bar => {
                bar.className = 'h-1 rounded-full bg-gray-200 transition-all duration-300';
            });

            if (password.length >= 8) strength++;
            if (password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^A-Za-z0-9]/)) strength++;

            // Update UI based on strength
            switch(strength) {
                case 0:
                    strengthClass = 'strength-very-weak';
                    strengthLabel = 'Sangat Lemah';
                    break;
                case 1:
                    strengthClass = 'strength-weak';
                    strengthLabel = 'Lemah';
                    bars[0].className = 'h-1 rounded-full strength-weak transition-all duration-300';
                    break;
                case 2:
                    strengthClass = 'strength-medium';
                    strengthLabel = 'Lumayan';
                    bars[0].className = 'h-1 rounded-full strength-medium transition-all duration-300';
                    bars[1].className = 'h-1 rounded-full strength-medium transition-all duration-300';
                    break;
                case 3:
                    strengthClass = 'strength-strong';
                    strengthLabel = 'Kuat';
                    bars[0].className = 'h-1 rounded-full strength-strong transition-all duration-300';
                    bars[1].className = 'h-1 rounded-full strength-strong transition-all duration-300';
                    bars[2].className = 'h-1 rounded-full strength-strong transition-all duration-300';
                    break;
                case 4:
                    strengthClass = 'strength-strong';
                    strengthLabel = 'Sangat Kuat';
                    bars.forEach(bar => {
                        bar.className = 'h-1 rounded-full strength-strong transition-all duration-300';
                    });
                    break;
            }

            // Update wrapper styles
            wrapper.className = `password-input-wrapper p-4 rounded-lg border border-primary/20 ${strengthClass}`;

            // Update strength text
            strengthText.textContent = `${strengthLabel}`;
            strengthText.className = `text-xs mt-2 transition-all duration-300 ${strengthClass === 'strength-strong' ? 'text-black' : ''}`;
        }
    </script>
