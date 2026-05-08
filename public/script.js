const cfg = window.MOONPIK_CONFIG || {};
const body = document.body;
const menuToggle = document.getElementById('menuToggle');
const mobileNav = document.getElementById('mobileNav');

if (menuToggle && mobileNav) {
	menuToggle.addEventListener('click', () => {
		mobileNav.classList.toggle('hidden');
		body.classList.toggle('menu-open');
	});
}

document.querySelectorAll('[data-config-text]').forEach((el) => {
	const key = el.getAttribute('data-config-text');
	if (cfg[key]) el.textContent = cfg[key];
});

document.querySelectorAll('[data-config-href]').forEach((el) => {
	const key = el.getAttribute('data-config-href');
	if (cfg[key]) el.setAttribute('href', cfg[key]);
});

const revealEls = document.querySelectorAll('[data-reveal], .card, .metric-card, .quote-box, .mini-card, .hero-copy, .hero-panel, .contact-panel, .page-hero h1, .page-hero p');

const revealObserver = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.classList.add('is-visible');
			entry.target.classList.remove('opacity-0', 'translate-y-6');
			entry.target.classList.add('opacity-100', 'translate-y-0');

			if (!entry.target.hasAttribute('data-reveal')) {
				entry.target.style.opacity = '1';
				entry.target.style.transform = 'none';
			}

			revealObserver.unobserve(entry.target);
		}
	});
}, { threshold: 0.14 });

revealEls.forEach((el, i) => {
	if (!el.hasAttribute('data-reveal')) {
		el.style.opacity = '0';
		el.style.transform = 'translateY(28px)';
		el.style.transition = `opacity .55s ease ${(i % 4) * 0.08}s, transform .55s ease ${(i % 4) * 0.08}s`;
	}
	revealObserver.observe(el);
});

const stepEls = document.querySelectorAll('[data-step]');
const stepObserver = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.classList.remove('opacity-55');
			entry.target.classList.add('opacity-100', 'border-blue-400/55', 'shadow-[0_0_0_1px_rgba(96,165,250,.25),0_10px_30px_rgba(37,99,235,.2)]');
			stepObserver.unobserve(entry.target);
		}
	});
}, { threshold: 0.35 });

stepEls.forEach((el) => stepObserver.observe(el));

if (window.lucide && typeof window.lucide.createIcons === 'function') {
	window.lucide.createIcons();
}

const form = document.querySelector('.contact-form');
if (form) {
	const btn = form.querySelector('[type="submit"]');

	form.addEventListener('submit', async (e) => {
		e.preventDefault();
		const action = form.getAttribute('action');

		if (!action || action.includes('YOUR_FORM_ID')) {
			alert('Form henüz yapılandırılmadı. Formspree hesabı açıp YOUR_FORM_ID değerini güncelleyin.');
			return;
		}

		btn.disabled = true;
		btn.textContent = 'Gönderiliyor...';

		try {
			const res = await fetch(action, {
				method: 'POST',
				body: new FormData(form),
				headers: { Accept: 'application/json' },
			});

			if (res.ok) {
				form.reset();
				btn.textContent = 'Gönderildi ✓';
				btn.style.background = '#22c55e';
			} else {
				throw new Error();
			}
		} catch {
			btn.disabled = false;
			btn.textContent = 'Hata oluştu, tekrar deneyin';
			btn.style.background = '#ef4444';

			setTimeout(() => {
				btn.disabled = false;
				btn.textContent = 'Talep Gönder';
				btn.style.background = '';
			}, 3000);
		}
	});
}

// Process Flow Animation with Scroll-based Line
const flowLine = document.getElementById('flowLine');
const processSteps = document.querySelectorAll('[data-process-step]');

if (flowLine && processSteps.length > 0) {
	const engineSection = document.getElementById('engine');
	let processFrame = null;

	const updateProcessFlow = () => {
		if (!engineSection) return;

		const sectionStart = engineSection.offsetTop;
		const sectionHeight = engineSection.offsetHeight;
		const scrollPos = window.scrollY;
		const progress = (scrollPos - sectionStart) / (sectionHeight * 0.6);
		const clipPercent = Math.min(Math.max(progress * 100, 0), 100);
		const activeStepIndex = Math.min(processSteps.length - 1, Math.max(-1, Math.floor(clipPercent / 25)));

		flowLine.style.clipPath = `inset(0 ${100 - clipPercent}% 0 0)`;
		flowLine.style.opacity = Math.min(clipPercent / 100, 0.9);

		processSteps.forEach((step, index) => {
			const isActive = index <= activeStepIndex;
			step.classList.toggle('opacity-70', !isActive);
			step.classList.toggle('opacity-100', isActive);
			step.classList.toggle('border-blue-400/55', isActive);
			step.classList.toggle('bg-blue-500/10', isActive);
			step.classList.toggle('shadow-[0_0_0_1px_rgba(96,165,250,.25),0_10px_30px_rgba(37,99,235,.2)]', isActive);
		});
	};

	const scheduleProcessFlowUpdate = () => {
		if (processFrame) cancelAnimationFrame(processFrame);
		processFrame = requestAnimationFrame(updateProcessFlow);
	};

	window.addEventListener('scroll', scheduleProcessFlowUpdate, { passive: true });
	window.addEventListener('resize', scheduleProcessFlowUpdate);
	updateProcessFlow();
}