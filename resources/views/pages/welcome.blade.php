@extends('layouts.app')

@section('content')
<div class="relative min-h-screen w-full overflow-hidden bg-[#030712]">
    <!-- Parallax Gradient Lights -->
    <div id="gradient-1" class="absolute top-0 left-0 w-96 h-96 rounded-full blur-[120px] opacity-30" style="background: radial-gradient(circle, rgba(168, 85, 247, 0.8) 0%, transparent 70%); transform: translate(0px, 0px);"></div>
    
    <div id="gradient-2" class="absolute top-1/3 right-0 w-80 h-80 rounded-full blur-[120px] opacity-25" style="background: radial-gradient(circle, rgba(59, 130, 246, 0.7) 0%, transparent 70%); transform: translate(0px, 0px);"></div>
    
    <div id="gradient-3" class="absolute bottom-1/4 left-1/4 w-72 h-72 rounded-full blur-[120px] opacity-25" style="background: radial-gradient(circle, rgba(168, 85, 247, 0.6) 0%, transparent 70%); transform: translate(0px, 0px);"></div>
    
    <div id="gradient-4" class="absolute bottom-0 right-1/3 w-96 h-96 rounded-full blur-[120px] opacity-30" style="background: radial-gradient(circle, rgba(59, 130, 246, 0.8) 0%, transparent 70%); transform: translate(0px, 0px);"></div>

    <!-- Content Section -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-6">
        <div class="text-center max-w-2xl">
            <h1 class="text-6xl md:text-7xl font-bold mb-6 text-white" data-reveal>
                Hoş Geldiniz
            </h1>
            
            <p class="text-xl md:text-2xl text-white/80 mb-8 leading-relaxed" data-reveal>
                MoonPik - Premium Yazılım Çözümleri
            </p>
            
            <p class="text-lg text-white/60 mb-12 leading-relaxed" data-reveal>
                Dijital dönüşümün gücüyle işletmenizi geleceğe taşıyın. 
                Yenilikçi teknoloji ve yaratıcı tasarım bir araya geldiğinde, 
                başarı kaçınılmazdır.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-reveal>
                <a href="{{ route('home') }}" class="px-8 py-3 bg-gradient-to-r from-purple-500 to-blue-500 text-white rounded-lg font-semibold hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300 transform hover:scale-105">
                    Keşfet
                </a>
                <a href="#" class="px-8 py-3 border border-white/20 text-white rounded-lg font-semibold hover:bg-white/10 transition-all duration-300">
                    Daha Fazla Bilgi
                </a>
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

    // Add fadeInUp animation to style
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
    `;
    document.head.appendChild(style);
</script>
@endsection
