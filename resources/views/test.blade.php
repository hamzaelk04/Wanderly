<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Monuments | Wanderly</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "surface-container-low": "#f3f4f5",
            "inverse-on-surface": "#f0f1f2",
            "surface-container-highest": "#e1e3e4",
            "on-tertiary-container": "#ecf9ff",
            "on-surface": "#191c1d",
            "on-primary": "#ffffff",
            "on-secondary-fixed": "#281800",
            "surface-bright": "#f8f9fa",
            "on-surface-variant": "#404850",
            "secondary-fixed-dim": "#ffba3f",
            "tertiary-container": "#007c95",
            "surface-dim": "#d9dadb",
            "on-secondary": "#ffffff",
            "primary": "#005d90",
            "surface-tint": "#006399",
            "surface-container-high": "#e7e8e9",
            "on-primary-container": "#f3f7ff",
            "surface-variant": "#e1e3e4",
            "on-tertiary-fixed": "#001f27",
            "primary-fixed": "#cde5ff",
            "error": "#ba1a1a",
            "background": "#f8f9fa",
            "on-primary-fixed-variant": "#004b74",
            "on-tertiary": "#ffffff",
            "on-error": "#ffffff",
            "on-background": "#191c1d",
            "outline-variant": "#bfc7d1",
            "secondary-container": "#f9ad00",
            "error-container": "#ffdad6",
            "outline": "#707881",
            "on-tertiary-fixed-variant": "#004e5f",
            "tertiary-fixed-dim": "#4cd6fb",
            "secondary-fixed": "#ffdeae",
            "on-secondary-fixed-variant": "#604100",
            "on-secondary-container": "#664500",
            "surface-container-lowest": "#ffffff",
            "surface": "#f8f9fa",
            "primary-container": "#0077b6",
            "tertiary-fixed": "#b3ebff",
            "on-primary-fixed": "#001d32",
            "tertiary": "#006176",
            "on-error-container": "#93000a",
            "primary-fixed-dim": "#94ccff",
            "inverse-primary": "#94ccff",
            "inverse-surface": "#2e3132",
            "secondary": "#7f5600",
            "surface-container": "#edeeef"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "fontFamily": {
            "headline": ["Plus Jakarta Sans"],
            "body": ["Inter"],
            "label": ["Inter"]
          }
        },
      },
    }
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      display: inline-block;
      vertical-align: middle;
    }

    .hide-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .hide-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</head>

<body class="bg-background text-on-surface font-body selection:bg-primary-fixed selection:text-on-primary-fixed">
  <!-- Top Navigation Shell -->
  <header
    class="bg-white/70 backdrop-blur-xl docked full-width top-0 sticky z-50 shadow-[0px_4px_24px_rgba(0,0,0,0.04)]">
    <nav class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
      <div class="flex items-center gap-8">
        <a class="text-2xl font-extrabold tracking-tighter text-[#0077B6] font-headline" href="#">Wanderly</a>
        <div class="hidden md:flex items-center gap-6">
          <a class="text-[#0077B6] font-bold border-b-2 border-[#0077B6] pb-1 font-headline tracking-tight"
            href="#">Destinations</a>
          <a class="text-slate-500 font-medium hover:text-[#0077B6] transition-all duration-300 rounded-lg font-headline tracking-tight"
            href="#">Experiences</a>
          <a class="text-slate-500 font-medium hover:text-[#0077B6] transition-all duration-300 rounded-lg font-headline tracking-tight"
            href="#">Journal</a>
        </div>
      </div>
      <div class="flex items-center gap-4">
        <button class="p-2 transition-all duration-300 hover:bg-slate-100 rounded-lg scale-95 active:opacity-80">
          <span class="material-symbols-outlined text-[#0077B6]">notifications</span>
        </button>
        <button class="p-2 transition-all duration-300 hover:bg-slate-100 rounded-lg scale-95 active:opacity-80">
          <span class="material-symbols-outlined text-[#0077B6]">favorite</span>
        </button>
        <div class="h-10 w-10 rounded-full overflow-hidden border-2 border-surface-container-high">
          <img class="w-full h-full object-cover"
            data-alt="professional portrait of a traveler smiling in soft natural light"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNXU0JvjxHCo3HqVja03qwRdou8HzAl8A1yM_KsK6Qn9MbbFYoyRAEsZgAhZFIamNf3j46GqB-QqNJomgdWn6pzWdn56eIHrrWGiWsZgcSeYz2ka-Lu-azgFxLYyFMWYf9kjzpKLjjve1bfelGYOjozwURubagjhWWDKlh3IzTSykf3ebDxIWJuWN6lf8yhkXyfkbeJiKyPgOTJOzzAJaFkOwvO8Xbr7eBZQhoJJ6ieNdbJPxkr5lcJ9bJX3KT8I07ey61PnMsoKE" />
        </div>
      </div>
    </nav>
  </header>
  <main class="max-w-7xl mx-auto px-6 py-12 pb-32 md:pb-12">
    <!-- Search & Hero Section -->
    <div class="mb-12">
      <h1 class="font-headline font-extrabold text-5xl md:text-6xl text-on-surface tracking-tighter mb-4">Timeless
        Echoes</h1>
      <p class="text-on-surface-variant text-lg max-w-2xl font-medium leading-relaxed mb-10">Discover the architectural
        marvels and sacred landmarks that define the spirit of civilizations past and present.</p>
      <!-- Sticky Search Bar -->
      <div class="sticky top-24 z-40">
        <div
          class="bg-surface-container-lowest shadow-[0px_4px_32px_rgba(0,0,0,0.06)] rounded-full p-2 flex items-center gap-2 max-w-3xl">
          <div class="flex-1 flex items-center px-4 gap-3">
            <span class="material-symbols-outlined text-outline">search</span>
            <input
              class="w-full bg-transparent border-none focus:ring-0 text-on-surface placeholder:text-outline py-3 font-medium"
              placeholder="Search by name, city, or history..." type="text" />
          </div>
          <button
            class="bg-gradient-to-br from-[#005d90] to-[#0077B6] text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all scale-100 active:scale-95">Explore</button>
        </div>
      </div>
    </div>
    <!-- Filters Section -->
    <div class="flex flex-col md:flex-row gap-4 mb-12 overflow-x-auto hide-scrollbar">
      <div class="flex items-center gap-4 min-w-max">
        <div class="relative group">
          <button
            class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
            Category: All
            <span class="material-symbols-outlined text-outline">expand_more</span>
          </button>
        </div>
        <div class="relative group">
          <button
            class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
            Opening Hours
            <span class="material-symbols-outlined text-outline">schedule</span>
          </button>
        </div>
        <div class="relative group">
          <button
            class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
            Price Range
            <span class="material-symbols-outlined text-outline">payments</span>
          </button>
        </div>
      </div>
      <div class="flex items-center gap-2 md:ml-auto min-w-max">
        <span class="text-label-sm font-semibold text-outline px-4">QUICK FILTERS:</span>
        <button
          class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Historical
          Site</button>
        <button
          class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Museum</button>
        <button
          class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Religious</button>
      </div>
    </div>
    <!-- Bento Grid of Monument Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1: Parthenon -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="the ancient parthenon temple in athens at sunset with golden light hitting the marble columns"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2UVIetZd0CfZrVaQs_LTG9i-2MhLd3Zi88_CBcxvfOZC9k1KZ1DyrN9gjmqcGYZ1NGY4ZvZ_OozR9vATwHyUM1M4FPtfd0K6i2TXNP2fbxWPrqVf3NRe11rq5MP6UVqoA5LbmO214sVFWrI8VMqJ1eHrQnBA064MdzLCMp5WuVMW2J0zxmMJ276URO2WeYL3N-bEyT933Uzpuq-AOnGbnhaFwAZsUzzqkk4FsDvSyz6pNrR402yEKMtn2isBwC9knWPeN2RFlVWM" />
          <div
            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Historical Site</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">The Parthenon</h3>
            <span class="text-secondary font-bold">$22.00</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Athens, Greece</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">A former temple on the Athenian
            Acropolis dedicated to the goddess Athena, completed in 438 BC.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Hours</span>
              <span class="text-sm font-semibold">08:00 - 20:00</span>
            </div>
            <div class="flex gap-2">
              <span
                class="material-symbols-outlined text-outline-variant hover:text-primary transition-colors cursor-help"
                title="Wheelchair Accessible">accessible</span>
              <span
                class="material-symbols-outlined text-outline-variant hover:text-primary transition-colors cursor-help"
                title="Audio Guide Available">audio_file</span>
            </div>
          </div>
          <button
            class="mt-6 w-full py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-primary hover:text-white transition-all duration-300">View
            Details</button>
        </div>
      </div>
      <!-- Card 2: Notre Dame -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="close up architecture of notre dame cathedral in paris with intricate stone carvings under a clear blue sky"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCswumqQ_L0d-JKNF2mF5UH0RWuHvjf0GcAfbo-eHlyQpxi8bjgGgwF2LehTI9SgVLyuo69_C6IMFkybiFq0c5Vt1nSvo4Z_wTgV7ALDq4Pux-6bPIgUG5Hj9C2qxAoDrTpam-V6D05ItJ6od8QRY2msyqVHEsHGmw6zAwqAzgbIn2q3HUjg-PqOw2axGujjA91QbGg52WsuF5gEiDzZRwCbEMlAlXo8aARA44NGuqT5s_g7cLyHXCg7Q1mkMm85ve7sRyqsthzbX4" />
          <div
            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Religious Monument</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Notre-Dame</h3>
            <span class="text-secondary font-bold">Free</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Paris, France</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">A medieval Catholic cathedral on
            the Île de la Cité, one of the finest examples of French Gothic architecture.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Hours</span>
              <span class="text-sm font-semibold">Temporarily Closed</span>
            </div>
            <div class="flex gap-2">
              <span
                class="material-symbols-outlined text-outline-variant hover:text-primary transition-colors cursor-help"
                title="Tactile Map Available">blind</span>
            </div>
          </div>
          <button
            class="mt-6 w-full py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-primary hover:text-white transition-all duration-300">View
            Restoration</button>
        </div>
      </div>
      <!-- Card 3: Statue of Liberty -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="the statue of liberty standing tall against a bright blue sky on a clear day in new york harbor"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDR0Lj4XtV3UyEHDlC0c7DadamcXf1ChTLg7dH1hiaiB3hmsDJq9huU2nwK6sbSoqyTTN9SwpqUxFjgaSjC_mN71uLmgP85RP9wmhnu3b5KIP0GUdSCPMBKoJnIiw8-8Qh-cBl7VOx3b3dJ1ehNFM3hkyeZ-_f9uYtXl0RiD0faNzJxoBvEeXcpy4HIwdmJazze3eERDGPHVCVBorFH-e3CFqKxoIUPsnNAFpXbtNiulEnC38v6qNffTcXwpFgjXue8zcsCUcBwTk" />
          <div
            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Statue</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Statue of Liberty</h3>
            <span class="text-secondary font-bold">$18.50</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">New York, USA</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">A colossal neoclassical sculpture
            on Liberty Island, a gift from the people of France to the United States.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Hours</span>
              <span class="text-sm font-semibold">09:00 - 17:00</span>
            </div>
            <div class="flex gap-2">
              <span
                class="material-symbols-outlined text-outline-variant hover:text-primary transition-colors cursor-help"
                title="Wheelchair Accessible">accessible</span>
              <span
                class="material-symbols-outlined text-outline-variant hover:text-primary transition-colors cursor-help"
                title="Elevator Available">elevator</span>
            </div>
          </div>
          <button
            class="mt-6 w-full py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-primary hover:text-white transition-all duration-300">View
            Details</button>
        </div>
      </div>
      <!-- Card 4: Giza Pyramids -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="the great pyramids of giza at dawn with soft morning light illuminating the ancient stone structures"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrIPySMFev4fCP6MAPOUtnA4ORLGd7_5xCMC3CztSsbhpfpf07dlg0DPZYzAFZtJZnFPKMnAVpme1EkIdbfMfIgr0VejKCZDqmwClBsk5nHmCl19hmDPToNQfLgTdGxAFT88QiT1dvxwNfE-2gxvOqhqeiEz_WyknRy6twsc2yFPnbC-ys6GrV1OqXkYCYIJtYn-uqzz4aBb9JaaFhSXQ94R6UvJ3xScobvH2a2H_6W3w8X-R8UQoqHKK5LKxxenFx8SI2BPi0lFs" />
          <div
            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Archaeological Site</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Great Pyramid</h3>
            <span class="text-secondary font-bold">$15.00</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Giza, Egypt</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">The oldest and largest of the
            pyramids in the Giza pyramid complex, one of the Seven Wonders of the Ancient World.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Hours</span>
              <span class="text-sm font-semibold">08:00 - 16:00</span>
            </div>
            <div class="flex gap-2">
              <span
                class="material-symbols-outlined text-outline-variant hover:text-primary transition-colors cursor-help"
                title="Guided Tours">groups</span>
            </div>
          </div>
          <button
            class="mt-6 w-full py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-primary hover:text-white transition-all duration-300">View
            Details</button>
        </div>
      </div>
      <!-- Card 5: Colosseum -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="the majestic colosseum in rome at twilight with street lamps glowing and a dramatic blue hour sky"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuALo0Azft2Ob7fquHe2ZKQKIs1yn9z-VBwrwssujrYhpKEMsJM38rxposfp6ILh0NnnrSuMC_nNbU0nXZOu6p5owJybsbjpDir0Nm1TQv11CA0OkcoA8ykMlbzDeZ0bhHaAavf8sz9hOPJJP1KzR9kE6uWRMc1k1J4NKK86plec_gdVRHjgELhqZVMjLtqj6xZ9BC6TdHR4X3lfJcNNO9i7zwrEFml6QZG3F0_kXnF6E8UeXO_KE_wMlZQVc5vyszXx25LTTdudSXc" />
          <div
            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Historical Site</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Colosseum</h3>
            <span class="text-secondary font-bold">$24.00</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Rome, Italy</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">An oval amphitheatre in the
            centre of the city of Rome, the largest ancient amphitheatre ever built.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Hours</span>
              <span class="text-sm font-semibold">09:00 - 19:15</span>
            </div>
            <div class="flex gap-2">
              <span
                class="material-symbols-outlined text-outline-variant hover:text-primary transition-colors cursor-help"
                title="Wheelchair Accessible">accessible</span>
            </div>
          </div>
          <button
            class="mt-6 w-full py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-primary hover:text-white transition-all duration-300">View
            Details</button>
        </div>
      </div>
      <!-- Card 6: Louvre Museum -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="the glass pyramid entrance of the louvre museum in paris during golden hour with clear reflections"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDif-PhIXhyueF8Bk3iBuK-IIw1OMmOzlis38vT48q9aJKZeEtvH319Y8AZqpkK8TZOGrYvwVdVoEIo6YHnhkoI0x5J8016o00-pZMzQ0suCtOGnH79uys0pmKT1bZ-jtzNJfEPS-6WOJOiA2kQCS_Fdkm05zvnAtuvaF-j9w1X7agcSNzn2S5OyusKmlhN3Ke3Us4eGsd86_MYWzWDUSDVIY15VQe_S2ifID1kriYL0PamZMtaulUqBMma-u_nNDqS0L1idcU5Rlo" />
          <div
            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Museum</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Louvre Museum</h3>
            <span class="text-secondary font-bold">$17.00</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Paris, France</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">The world's most-visited museum
            and a historic monument in Paris, home to the Mona Lisa.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Hours</span>
              <span class="text-sm font-semibold">09:00 - 18:00</span>
            </div>
            <div class="flex gap-2">
              <span
                class="material-symbols-outlined text-outline-variant hover:text-primary transition-colors cursor-help"
                title="Wheelchair Accessible">accessible</span>
              <span
                class="material-symbols-outlined text-outline-variant hover:text-primary transition-colors cursor-help"
                title="Audio Guide Available">audio_file</span>
            </div>
          </div>
          <button
            class="mt-6 w-full py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-primary hover:text-white transition-all duration-300">View
            Details</button>
        </div>
      </div>
    </div>
    <!-- Map Preview Section -->
    <section class="mt-24 mb-12">
      <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
        <div>
          <h2 class="font-headline font-extrabold text-3xl text-on-surface tracking-tight mb-2">Heritage Map</h2>
          <p class="text-on-surface-variant font-medium">Navigate through centuries of history spatially.</p>
        </div>
        <button class="flex items-center gap-2 text-primary font-bold hover:underline underline-offset-4">
          Open Interactive View
          <span class="material-symbols-outlined">map</span>
        </button>
      </div>
      <div class="h-[500px] w-full bg-surface-container rounded-[32px] relative overflow-hidden group shadow-inner">
        <img
          class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-[20s] ease-linear"
          data-alt="a stylized topographical map illustration with subtle architectural icons and soft wanderly color palette"
          data-location="Europe"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJscgCRNPyYtGSYHyEZ5v637793DYsf-BKg8JNxD8zBcYLYwX4AvOfRDAaxJI3FDrhNfzc41sscG_hTomoeYS4D9DhtKu6EkVEp2-8AzYTg-HSJINhMZdmyf8QNUzTnuDof82sWg6bt0f1L-GlQ86IwVPpg0Ec4bf5W_hapjNpqQl-9uZZuPPbc8cbRfNh3Xmk_pRO6uPV65ic5s5zmsJEeii6i67HPXCQg9S4RTeKMSlQvfe67at186IOGQEMDimVOeYvJlAq6Sc" />
        <!-- Floating Info Card on Map -->
        <div
          class="absolute bottom-8 left-8 bg-white/80 backdrop-blur-xl p-6 rounded-2xl shadow-2xl max-w-sm border border-white/50">
          <div class="flex items-center gap-4 mb-4">
            <div class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center">
              <span class="material-symbols-outlined text-primary">explore</span>
            </div>
            <div>
              <p class="text-xs font-bold text-outline uppercase tracking-widest">Closest to you</p>
              <h4 class="font-bold text-on-surface">Brandenburg Gate</h4>
            </div>
          </div>
          <p class="text-sm text-on-surface-variant leading-relaxed mb-4">You are currently 4.2 miles away from the
            neoclassical monument in Berlin.</p>
          <button class="w-full py-3 bg-primary text-white rounded-xl font-bold shadow-lg shadow-primary/20">Navigate
            Now</button>
        </div>
        <!-- Mock Map Pins -->
        <div
          class="absolute top-1/4 left-1/3 p-2 bg-white rounded-full shadow-lg border-2 border-primary animate-pulse">
        </div>
        <div class="absolute top-1/2 right-1/4 p-2 bg-white rounded-full shadow-lg border-2 border-secondary"></div>
        <div class="absolute bottom-1/3 left-1/2 p-2 bg-white rounded-full shadow-lg border-2 border-primary"></div>
      </div>
    </section>
  </main>
  <!-- Bottom Navigation Shell (Mobile) -->
  <nav
    class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-white shadow-[0_-10px_40px_rgba(0,0,0,0.05)] rounded-t-[32px]">
    <div
      class="flex flex-col items-center justify-center bg-gradient-to-br from-[#005d90] to-[#0077B6] text-white rounded-full p-3 shadow-lg scale-110 duration-200 ease-out">
      <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">explore</span>
      <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-widest mt-1">Explore</span>
    </div>
    <div class="flex flex-col items-center justify-center text-slate-400 p-3 hover:text-[#0077B6] transition-colors">
      <span class="material-symbols-outlined">bookmark</span>
      <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-widest mt-1">Saved</span>
    </div>
    <div class="flex flex-col items-center justify-center text-slate-400 p-3 hover:text-[#0077B6] transition-colors">
      <span class="material-symbols-outlined">map</span>
      <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-widest mt-1">Trips</span>
    </div>
    <div class="flex flex-col items-center justify-center text-slate-400 p-3 hover:text-[#0077B6] transition-colors">
      <span class="material-symbols-outlined">person</span>
      <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-widest mt-1">Profile</span>
    </div>
  </nav>
  <!-- Contextual FAB (Only on main explore pages) -->
  <button
    class="fixed bottom-24 right-6 md:bottom-12 md:right-12 h-16 w-16 rounded-full bg-secondary-container text-on-secondary-container shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all z-40">
    <span class="material-symbols-outlined text-3xl">add_location_alt</span>
  </button>
</body>

</html>