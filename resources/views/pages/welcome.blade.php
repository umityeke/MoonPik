@extends('layouts.app')

@section('content')
<div class="relative w-full overflow-hidden bg-[#030712]">
    <!-- Parallax Gradient Lights -->
    <div id="gradient-1" class="fixed top-0 left-0 w-96 h-96 rounded-full blur-[120px] opacity-30 pointer-events-none" style="background: radial-gradient(circle, rgba(168, 85, 247, 0.8) 0%, transparent 70%); transform: translate(0px, 0px);"></div>
    
    <div id="gradient-2" class="fixed top-1/3 right-0 w-80 h-80 rounded-full blur-[120px] opacity-25 pointer-events-none" style="background: radial-gradient(circle, rgba(59, 130, 246, 0.7) 0%, transparent 70%); transform: translate(0px, 0px);"></div>
    
    <div id="gradient-3" class="fixed bottom-1/4 left-1/4 w-72 h-72 rounded-full blur-[120px] opacity-25 pointer-events-none" style="background: radial-gradient(circle, rgba(168, 85, 247, 0.6) 0%, transparent 70%); transform: translate(0px, 0px);"></div>
    
    <div id="gradient-4" class="fixed bottom-0 right-1/3 w-96 h-96 rounded-full blur-[120px] opacity-30 pointer-events-none" style="background: radial-gradient(circle, rgba(59, 130, 246, 0.8) 0%, transparent 70%); transform: translate(0px, 0px);"></div>

    <!-- Hero Section (Full Screen) -->
    <div class="relative h-screen w-full flex items-center justify-center px-6 pt-20">
        <div class="text-center max-w-5xl relative z-10">
            <!-- Main Title with Gradient -->
            <h1 class="text-7xl md:text-8xl lg:text-9xl font-bold mb-8 leading-tight" data-reveal>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400">
                    Engineering
                </span>
                <br />
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-cyan-400 to-purple-400">
                    Digital
                </span>
                <br />
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-pink-400">
                    Excellence
                </span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-white/70 mb-12 leading-relaxed" data-reveal>
                Transform your vision into reality with cutting-edge technology
            </p>
            
            <!-- Neon Glow Button -->
            <div class="flex justify-center" data-reveal>
                <button class="relative px-10 py-4 text-lg font-semibold text-white rounded-lg group overflow-hidden transition-all duration-300 hover:scale-110 hover:-translate-y-1"
                    style="
                        background: linear-gradient(135deg, rgba(168, 85, 247, 0.2), rgba(59, 130, 246, 0.2));
                        border: 2px solid;
                        border-image: linear-gradient(135deg, #a855f7, #3b82f6) 1;
                        box-shadow: 0 0 20px rgba(168, 85, 247, 0.5), 0 0 40px rgba(59, 130, 246, 0.3), inset 0 0 20px rgba(168, 85, 247, 0.1);
                    "
                    onmouseover="this.style.boxShadow='0 0 30px rgba(168, 85, 247, 0.8), 0 0 60px rgba(59, 130, 246, 0.6), inset 0 0 30px rgba(168, 85, 247, 0.2)'"
                    onmouseout="this.style.boxShadow='0 0 20px rgba(168, 85, 247, 0.5), 0 0 40px rgba(59, 130, 246, 0.3), inset 0 0 20px rgba(168, 85, 247, 0.1)'">
                    <span class="relative z-10">Our Ecosystem</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/0 via-purple-500/20 to-blue-500/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Parallax scroll effect for gradient lights
    const gradients = [
        { element: document.getElementById('gradient-1'), offset: 15 },
        { element: document.getElementById('gradient-2'), offset: -20 },
        { element: document.getElementById('gradient-3'), offset: 10 },
        { element: document.getElementById('gradient-4'), offset: -15 }
    ];

    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        gradients.forEach((grad, index) => {
            const offset = grad.offset;
            const moveY = (scrollY * offset) / 100;
            const moveX = (Math.sin(scrollY / 100) * offset * 0.5);
            
            grad.element.style.transform = `translate(${moveX}px, ${moveY}px)`;
        });
    });

    // Scroll reveal animation
    const revealElements = document.querySelectorAll('[data-reveal]');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeInUp 0.8s ease-out forwards';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    revealElements.forEach(el => {
        el.style.opacity = '0';
        observer.observe(el);
    });

    // Add custom animations and styles
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes neonPulse {
            0%, 100% {
                opacity: 0.8;
            }
            50% {
                opacity: 1;
            }
        }
    `;
    document.head.appendChild(style);
</script>
@endsection
