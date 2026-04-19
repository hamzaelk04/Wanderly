@extends('layouts.app')

@section('content')
    <main class="max-w-7xl mx-auto px-6 py-12 pb-32 md:pb-12">
        <!-- Search & Hero Section -->
        <div class="mb-12 mt-12">
            <h1 class="font-headline font-extrabold text-5xl md:text-6xl text-on-surface tracking-tighter mb-4">Échos intemporels</h1>
            <p class="text-on-surface-variant text-lg max-w-2xl font-medium leading-relaxed mb-10">Découvrez les merveilles architecturales et les monuments sacrés qui définissent l’esprit des civilisations passées et présentes.</p>
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
                        class="bg-linear-to-br from-primary to-[#0077B6] text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all scale-100 active:scale-95">Explore</button>
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
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">A former temple on the
                        Athenian
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
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">A medieval Catholic
                        cathedral on
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
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">A colossal neoclassical
                        sculpture
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
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">The oldest and largest of
                        the
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
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">The world's most-visited
                        museum
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
    </main>
@endsection