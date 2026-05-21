<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>404 - Page Not Found</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Syne:wght@400;700;800&display=swap" rel="stylesheet"/>

  <style>
    :root {
      --accent:     #6366f1;
      --accent-dim: rgba(99,102,241,0.15);
      --accent-bdr: rgba(99,102,241,0.35);
      --bg:         #0a0a0f;
      --card-bg:    rgba(255,255,255,0.03);
      --muted:      #6b7280;
      --border:     rgba(255,255,255,0.08);
    }

    *, *::before, *::after { box-sizing: border-box; }

    body {
      margin: 0;
      min-height: 100vh;
      background: var(--bg);
      font-family: 'Syne', sans-serif;
      color: #fff;
      overflow-x: hidden;
    }

    /* ── grid background ── */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image:
        linear-gradient(rgba(99,102,241,0.06) 1px, transparent 1px),
        linear-gradient(90deg, rgba(99,102,241,0.06) 1px, transparent 1px);
      background-size: 48px 48px;
      pointer-events: none;
      z-index: 0;
    }

    /* ── glow orb ── */
    body::after {
      content: '';
      position: fixed;
      width: 600px;
      height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(99,102,241,0.2) 0%, transparent 70%);
      top: 40%;
      left: 50%;
      transform: translate(-50%, -55%);
      pointer-events: none;
      z-index: 0;
      animation: orb-pulse 5s ease-in-out infinite;
    }

    @keyframes orb-pulse {
      0%, 100% { opacity: .7; transform: translate(-50%,-55%) scale(1); }
      50%       { opacity: 1;  transform: translate(-50%,-55%) scale(1.1); }
    }

    .page-wrapper {
      position: relative;
      z-index: 1;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 3rem 1.5rem 5rem;
    }

    /* ── corner brackets ── */
    .corner {
      position: fixed;
      width: 36px;
      height: 36px;
      opacity: .3;
    }
    .corner-tl { top: 18px; left: 18px;  border-top:  1.5px solid var(--accent); border-left:  1.5px solid var(--accent); }
    .corner-tr { top: 18px; right: 18px; border-top:  1.5px solid var(--accent); border-right: 1.5px solid var(--accent); }
    .corner-bl { bottom: 18px; left: 18px;  border-bottom: 1.5px solid var(--accent); border-left:  1.5px solid var(--accent); }
    .corner-br { bottom: 18px; right: 18px; border-bottom: 1.5px solid var(--accent); border-right: 1.5px solid var(--accent); }

    /* ── badge ── */
    .error-badge {
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--accent);
      background: var(--accent-dim);
      border: 1px solid var(--accent-bdr);
      padding: 6px 20px;
      border-radius: 100px;
      margin-bottom: 2rem;
      animation: fade-down .6s ease both;
    }

    /* ── 404 number ── */
    .error-number {
      font-size: clamp(100px, 20vw, 170px);
      font-weight: 800;
      line-height: 1;
      letter-spacing: -6px;
      background: linear-gradient(135deg, #ffffff 30%, var(--accent) 80%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      user-select: none;
      animation: fade-down .7s .1s ease both;
      position: relative;
    }
    .error-number::after {
      content: '404';
      position: absolute;
      inset: 0;
      background: none;
      -webkit-text-fill-color: transparent;
      -webkit-text-stroke: 1px rgba(99,102,241,.2);
      transform: translate(4px, 4px);
      z-index: -1;
      pointer-events: none;
    }

    /* ── heading & sub ── */
    .error-title {
      font-size: clamp(22px, 4vw, 34px);
      font-weight: 700;
      letter-spacing: -.5px;
      margin-bottom: .6rem;
      animation: fade-down .7s .2s ease both;
    }
    .error-sub {
      font-family: 'Space Mono', monospace;
      font-size: 13px;
      color: var(--muted);
      line-height: 2;
      text-align: center;
      max-width: 380px;
      animation: fade-down .7s .3s ease both;
    }
    .error-sub .code-tag {
      color: var(--accent);
      font-style: normal;
    }

    /* ── info card ── */
    .info-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.1rem 1.5rem;
      width: 100%;
      max-width: 420px;
      display: flex;
      align-items: center;
      gap: 14px;
      animation: fade-down .7s .4s ease both;
    }
    .info-card .icon-wrap {
      width: 40px;
      height: 40px;
      border-radius: 8px;
      background: var(--accent-dim);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: var(--accent);
      font-size: 18px;
    }
    .info-card p { margin: 0; font-size: 13px; color: var(--muted); line-height: 1.6; }
    .info-card strong { color: #d1d5db; font-weight: 700; display: block; font-size: 13px; }

    /* ── buttons ── */
    .btn-accent {
      background: var(--accent);
      color: #fff;
      border: none;
      font-family: 'Syne', sans-serif;
      font-weight: 700;
      font-size: 14px;
      padding: 11px 26px;
      border-radius: 8px;
      transition: background .2s, transform .15s;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      text-decoration: none;
    }
    .btn-accent:hover { background: #4f46e5; color: #fff; transform: translateY(-2px); }

    .btn-ghost {
      background: transparent;
      color: var(--muted);
      border: 1px solid var(--border);
      font-family: 'Syne', sans-serif;
      font-weight: 700;
      font-size: 14px;
      padding: 11px 26px;
      border-radius: 8px;
      transition: color .2s, border-color .2s, transform .15s;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      text-decoration: none;
    }
    .btn-ghost:hover { color: #fff; border-color: rgba(255,255,255,.3); transform: translateY(-2px); }

    .btn-row { animation: fade-down .7s .5s ease both; }

    /* ── loading dots ── */
    .dots-row { animation: fade-down .7s .6s ease both; }
    .dot {
      width: 6px; height: 6px;
      border-radius: 50%;
      background: #374151;
      display: inline-block;
      animation: blink 1.4s infinite;
    }
    .dot:nth-child(2) { animation-delay: .2s; background: #4b5563; }
    .dot:nth-child(3) { animation-delay: .4s; background: var(--accent); }
    @keyframes blink {
      0%,100% { opacity:.4; transform:scale(1);   }
      50%      { opacity:1;  transform:scale(1.5); }
    }

    /* ── status bar ── */
    .status-bar {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      align-items: center;
      gap: 18px;
      z-index: 2;
    }
    .status-item {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: #374151;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .s-dot {
      width: 5px; height: 5px;
      border-radius: 50%;
      background: var(--accent);
      animation: blink 2s infinite;
    }

    /* ── keyframes ── */
    @keyframes fade-down {
      from { opacity:0; transform:translateY(-18px); }
      to   { opacity:1; transform:translateY(0); }
    }

    /* ── responsive tweaks ── */
    @media (max-width: 480px) {
      .corner { display: none; }
      .status-bar { display: none; }
      .btn-row { flex-direction: column; width: 100%; max-width: 280px; }
      .btn-accent, .btn-ghost { justify-content: center; }
    }
  </style>
</head>
<body>

  <!-- corner brackets -->
  <div class="corner corner-tl"></div>
  <div class="corner corner-tr"></div>
  <div class="corner corner-bl"></div>
  <div class="corner corner-br"></div>

  <div class="page-wrapper">

    <!-- badge -->
    <span class="error-badge">error &middot; 404 &middot; not found</span>

    <!-- big number -->
    <div class="error-number mb-2">404</div>

    <!-- title -->
    <h1 class="error-title text-center">Page not found</h1>

    <!-- subtitle -->
    <p class="error-sub mb-4">
      Yeh page abhi available nahi hai.<br>
      <em class="code-tag">// in future we work here</em><br>
      404 Page not found....
    </p>

    <!-- info card -->
    <div class="info-card mb-4">
      <div class="icon-wrap">
        <i class="bi bi-tools"></i>
      </div>
      <div>
        <strong>Under Construction</strong>
        <p>Hamari team is page par kaam kar rahi hai. Jald hi yahan kuch zabardast hoga!</p>
      </div>
    </div>

    <!-- buttons -->
    <div class="btn-row d-flex gap-3 mb-4">
      <a href="/" class="btn-accent">
        <i class="bi bi-house-fill"></i> Home pe jayein
      </a>
      <a href="javascript:history.back()" class="btn-ghost">
        <i class="bi bi-arrow-left"></i> Wapas jayein
      </a>
    </div>

    <!-- animated dots -->
    <div class="dots-row d-flex gap-2">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

  </div>

  <!-- status bar -->
  <div class="status-bar">
    <div class="status-item"><span class="s-dot"></span> system online</div>
    <div class="status-item">&middot;&middot;&middot;</div>
    <div class="status-item">page missing</div>
    <div class="status-item">&middot;&middot;&middot;</div>
    <div class="status-item">awaiting dev</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>