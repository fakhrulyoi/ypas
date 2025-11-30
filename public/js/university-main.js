document.addEventListener('DOMContentLoaded', () => {

    // ============================================
    // 1. PRAYER TIMES API INTEGRATION (WAKTUSOLAT api)
    // ============================================

    async function fetchPrayerTimes() {
        const zone = 'PHG01'; // Kuantan, Pahang

        try {
            console.log('Fetching from Waktusolat API via backend for zone:', zone);

            // Call your Laravel backend endpoint
            const response = await fetch(`/api/prayer-times?zone=${zone}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();
            console.log('Waktusolat data received:', data);
            displayPrayerTimes(data);

        } catch (error) {
            console.error('Waktusolat API error:', error);
            displayErrorMessage();
        }
    }

    function displayPrayerTimes(data) {
        try {
            console.log('Full response data:', JSON.stringify(data, null, 2));

            let solat = null;
            let date = null;
            let hijri = null;

            // Handle Waktusolat array response format
            if (data.prayers && Array.isArray(data.prayers)) {
                console.log('Handling Waktusolat array format');
                console.log('All prayer data:', data.prayers);

                // Get today's date in Malaysia timezone
                const today = new Date();
                const currentDay = today.getDate();
                const currentMonth = today.getMonth() + 1;
                const currentYear = today.getFullYear();

                console.log(`Looking for date: ${currentDay}-${currentMonth}-${currentYear}`);

                // Find today's prayer data in the array by comparing day numbers
                let todayPrayer = data.prayers.find(p => parseInt(p.day) === currentDay);

                // If not found, use the last prayer in the array (most recent day)
                if (!todayPrayer) {
                    console.warn('Today not found in array, using last available day');
                    todayPrayer = data.prayers[data.prayers.length - 1];
                }

                if (todayPrayer) {
                    console.log('Found today prayer data:', todayPrayer);

                    // Convert UNIX timestamps to HH:MM format
                    const convertTimestamp = (timestamp) => {
                        const date = new Date(timestamp * 1000);
                        const hours = String(date.getHours()).padStart(2, '0');
                        const minutes = String(date.getMinutes()).padStart(2, '0');
                        return `${hours}:${minutes}`;
                    };

                    // Map the prayer times
                    solat = {
                        imsak: todayPrayer.imsak ? convertTimestamp(todayPrayer.imsak) : '--:--',
                        subuh: todayPrayer.fajr ? convertTimestamp(todayPrayer.fajr) : '--:--',
                        dhuha: todayPrayer.syuruk ? convertTimestamp(todayPrayer.syuruk) : '--:--',
                        zuhr: todayPrayer.dhuhr ? convertTimestamp(todayPrayer.dhuhr) : '--:--',
                        asar: todayPrayer.asr ? convertTimestamp(todayPrayer.asr) : '--:--',
                        maghrib: todayPrayer.maghrib ? convertTimestamp(todayPrayer.maghrib) : '--:--',
                        isyak: todayPrayer.isha ? convertTimestamp(todayPrayer.isha) : '--:--'
                    };

                    hijri = todayPrayer.hijri || 'Hijri date unknown';

                    // Use the day from the API response
                    const year = data.year || new Date().getFullYear();
                    const monthNum = data.month_number || (new Date().getMonth() + 1);
                    const dayNum = todayPrayer.day;

                    date = `${year}-${String(monthNum).padStart(2, '0')}-${String(dayNum).padStart(2, '0')}`;
                }
            }
            // Handle single day response format
            else if (data.solat) {
                console.log('Handling single day format');
                solat = data.solat;
                date = data.date || new Date().toISOString().split('T')[0];
                hijri = data.hijri || 'Hijri date unknown';
            }

            if (!solat) {
                console.error('Could not extract prayer times. Response structure:', Object.keys(data));
                displayErrorMessage();
                return;
            }

            console.log('Processing prayer data:', solat);

            // Format date
            const dateObj = new Date(date + 'T00:00:00');
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = dateObj.toLocaleDateString('ms-MY', options);

            // Update date display
            const dateElement = document.getElementById('prayerDate');
            if (dateElement) {
                dateElement.textContent = `${formattedDate} (${hijri})`;
                dateElement.style.color = 'rgba(255, 255, 255, 0.8)';
            }

            // Map prayer times to UI
            const prayerMapping = {
                'imsak': solat.imsak,
                'subuh': solat.subuh,
                'dhuha': solat.dhuha,
                'zuhr': solat.zuhr,
                'asar': solat.asar,
                'maghrib': solat.maghrib,
                'isyak': solat.isyak
            };

            // Update prayer times on page
            Object.keys(prayerMapping).forEach(prayer => {
                const element = document.getElementById(prayer);
                if (element) {
                    const time = prayerMapping[prayer];
                    element.textContent = time || '--:--';
                    element.style.color = '#fbbf24'; // Gold color
                    console.log(`✓ ${prayer}: ${time}`);
                }
            });

            console.log('✓ Waktusolat prayer times displayed successfully');
        } catch (error) {
            console.error('Error displaying prayer times:', error);
            displayErrorMessage();
        }
    }

    function displayErrorMessage() {
        const dateElement = document.getElementById('prayerDate');
        if (dateElement) {
            dateElement.textContent = 'Tidak dapat memuatkan waktu solat. Sila semak sambungan internet anda.';
            dateElement.style.color = '#ff6b6b';
        }

        // Set default times
        const prayerFields = ['imsak', 'subuh', 'dhuha', 'zuhr', 'asar', 'maghrib', 'isyak'];
        prayerFields.forEach(prayer => {
            const element = document.getElementById(prayer);
            if (element) {
                element.textContent = '--:--';
            }
        });
    }

    // Fetch prayer times on page load
    console.log('🕌 Fetching Waktusolat prayer times...');
    fetchPrayerTimes();

    // Refresh every 30 minutes
    setInterval(() => {
        console.log('🔄 Refreshing prayer times...');
        fetchPrayerTimes();
    }, 1800000); // 30 minutes


    // ============================================
    // 2. DARK MODE LOGIC
    // ============================================

    const darkModeToggle = document.getElementById('darkModeToggle');
    const toggleIcon = document.getElementById('toggleIcon');
    const body = document.body;

    // Check localStorage for preferred theme
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark') {
        body.classList.add('dark-mode');
        if (toggleIcon) {
            toggleIcon.classList.remove('fa-moon');
            toggleIcon.classList.add('fa-sun');
        }
    }

    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');

            // Update icon and localStorage
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('theme', 'dark');
                toggleIcon.classList.remove('fa-moon');
                toggleIcon.classList.add('fa-sun');
            } else {
                localStorage.setItem('theme', 'light');
                toggleIcon.classList.remove('fa-sun');
                toggleIcon.classList.add('fa-moon');
            }
        });
    }


    // ============================================
    // 3. STICKY NAVIGATION & SCROLL EFFECT
    // ============================================

    const header = document.querySelector('.main-header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.1)';
            header.style.padding = '0';
        } else {
            header.style.boxShadow = 'var(--shadow-sm)';
        }
    });

    // ============================================
    // 4. MOBILE MENU TOGGLE
    // ============================================

    const mobileToggle = document.getElementById('mobileToggle');
    const closeMenu = document.getElementById('closeMenu');
    const mobileNav = document.getElementById('mobileNav');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const mobileLinks = document.querySelectorAll('.mobile-nav-list a');

    function toggleMenu() {
        mobileNav.classList.toggle('open');
        mobileOverlay.classList.toggle('active');
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', toggleMenu);
        closeMenu.addEventListener('click', toggleMenu);
        mobileOverlay.addEventListener('click', toggleMenu);

        // Close menu when a link is clicked
        mobileLinks.forEach(link => {
            link.addEventListener('click', toggleMenu);
        });
    }

    // ============================================
    // 5. PROGRAM TABS LOGIC
    // ============================================

    const tabBtns = document.querySelectorAll('.tab-btn');
    const contents = document.querySelectorAll('.program-content');

    // Activate the first tab on load if none are active
    if (tabBtns.length > 0 && !document.querySelector('.tab-btn.active')) {
        tabBtns[0].classList.add('active');
        const targetId = tabBtns[0].getAttribute('data-target');
        if (targetId) {
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.classList.add('active');
            }
        }
    }

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons and contents
            tabBtns.forEach(b => b.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));

            // Add active class to clicked button
            btn.classList.add('active');

            // Show corresponding content
            const targetId = btn.getAttribute('data-target');
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.classList.add('active');
            }
        });
    });

    // ============================================
    // 6. SMOOTH SCROLLING FOR ANCHOR LINKS
    // ============================================

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                // Offset for sticky header
                const headerOffset = 90;
                const elementPosition = targetSection.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        });
    });

    // ============================================
    // 7. SIMPLE ANIMATION ON SCROLL
    // ============================================

    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Apply animation to cards and text
    const animatedElements = document.querySelectorAll('.course-card, .career-card, .tahfiz-content, .hero-text-wrapper, .contact-box-v2');

    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
});
