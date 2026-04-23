<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>403 - Access Denied | Wanderly</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
            "on-secondary": "#ffffff",
            "primary-container": "#0077b6",
            "error-container": "#ffdad6",
            "on-secondary-fixed": "#281800",
            "surface-container-highest": "#e1e3e4",
            "surface": "#f8f9fa",
            "inverse-on-surface": "#f0f1f2",
            "on-primary": "#ffffff",
            "on-error-container": "#93000a",
            "on-tertiary-fixed": "#001f27",
            "on-tertiary-fixed-variant": "#004e5f",
            "surface-container-lowest": "#ffffff",
            "primary": "#005d90",
            "on-tertiary": "#ffffff",
            "on-surface-variant": "#404850",
            "tertiary-fixed": "#b3ebff",
            "surface-container-low": "#f3f4f5",
            "on-surface": "#191c1d",
            "background": "#f8f9fa",
            "on-primary-fixed-variant": "#004b74",
            "surface-dim": "#d9dadb",
            "secondary-fixed": "#ffdeae",
            "on-secondary-fixed-variant": "#604100",
            "tertiary-fixed-dim": "#4cd6fb",
            "primary-fixed-dim": "#94ccff",
            "on-tertiary-container": "#ecf9ff",
            "surface-variant": "#e1e3e4",
            "on-background": "#191c1d",
            "error": "#ba1a1a",
            "secondary": "#7f5600",
            "tertiary": "#006176",
            "secondary-fixed-dim": "#ffba3f",
            "on-error": "#ffffff",
            "tertiary-container": "#007c95",
            "surface-tint": "#006399",
            "surface-bright": "#f8f9fa",
            "inverse-primary": "#94ccff",
            "outline-variant": "#bfc7d1",
            "on-primary-container": "#f3f7ff",
            "inverse-surface": "#2e3132",
            "outline": "#707881",
            "primary-fixed": "#cde5ff",
            "on-secondary-container": "#664500",
            "surface-container": "#edeeef",
            "surface-container-high": "#e7e8e9",
            "secondary-container": "#f9ad00",
            "on-primary-fixed": "#001d32"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "fontFamily": {
            "headline": ["Plus Jakarta Sans"],
            "display": ["Plus Jakarta Sans"],
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
    }

    .text-shadow-sm {
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .adventure-gradient {
      background: linear-gradient(135deg, #005d90 0%, #0077b6 100%);
    }
  </style>
</head>

<body class="bg-background text-on-background font-body selection:bg-primary/10">
  <!-- Main Viewport Wrapper -->
  <main class="min-h-screen flex items-center justify-center relative overflow-hidden px-6">
    <!-- Intentional Asymmetry: Decorative Background Elements -->
    <div
      class="absolute top-[-10%] left-[-5%] w-[40vw] h-[40vw] bg-surface-container-high/30 rounded-full blur-3xl -z-10">
    </div>
    <div class="absolute bottom-[-5%] right-[5%] w-[30vw] h-[30vw] bg-primary-fixed/20 rounded-full blur-3xl -z-10">
    </div>
    <!-- 403 Content Canvas -->
    <div class="w-full max-w-2xl text-center ">
      <!-- Branding Accent -->
      <div class="flex justify-center mb-8">
        <span class="text-2xl font-extrabold tracking-tighter text-primary font-display">Wanderly</span>
      </div>
      <div class="relative inline-block">
        <!-- Large 403 Focal Point -->
        <div class=" inset-0 flex items-center justify-center">
          <div
            class="bg-surface-container-lowest p-6 rounded-full shadow-[0_24px_48px_-12px_rgba(25,28,29,0.04)] border border-outline-variant/10">
            <span class="material-symbols-outlined text-6xl text-primary" data-icon="lock"
              style="font-variation-settings: 'FILL' 1;">lock</span>
          </div>
        </div>
        <h1
          class="font-display font-extrabold text-[12rem] md:text-[16rem] leading-none tracking-tighter text-surface-container-highest select-none opacity-60">
          403
        </h1>
        <!-- Restricted Access Icon Overlay -->
      </div>
      <!-- Text Content Stack -->
      <div class="space-y-4 max-w-md mx-auto">
        <h2 class="font-display text-4xl font-bold text-on-surface tracking-tight">Access Denied</h2>
        <p class="text-on-surface-variant font-body leading-relaxed">
          You don't have permission to view this page. If you believe this is an error, please contact your
          administrator.
        </p>
      </div>
      <!-- CTA Action Cluster -->
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
        <a href="/"
          class="adventure-gradient text-on-primary font-display font-semibold px-8 py-4 rounded-full shadow-sm hover:shadow-lg hover:scale-[1.02] active:scale-95 transition-all duration-300">
          Back to Dashboard
        </a>
      </div>
    </div>
    <!-- Minimal Footer Reference (As per Wanderly Branding) -->
    <footer class="absolute bottom-8 left-0 w-full px-8 flex justify-center">
      <p class="font-label text-[10px] uppercase tracking-[0.2em] text-outline">
        © 2024 Wanderly. The Art of Exploration.
      </p>
    </footer>
  </main>
</body>

</html>