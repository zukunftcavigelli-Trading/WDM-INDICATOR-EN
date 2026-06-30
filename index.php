<?php
// CLIENT-FRONTEND INDEX
// Diese Datei enthält nur HTML und lädt CSS/JS/Bilder von deinem Server.
$ASSET_BASE = 'https://api-p.com/myserver/pages/index';
$API_ENDPOINT = 'https://api-p.com/myserver/pages/index/api.php';
$LOGOUT_URL     = 'https://api-p.com/myserver/pages/logout/api.php';
$ASSET_VERSION  = 'index_logout_fix_v001';
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WDMindikator - Trading Intelligence</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Sora:wght@300;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= htmlspecialchars($ASSET_BASE, ENT_QUOTES, 'UTF-8') ?>/style.css?v=<?= urlencode($ASSET_VERSION) ?>" />
</head>
<body>

  <!-- ── HEADER ── -->
  <header>
    <div class="header-inner">
      <a class="logo" href="#">
        <img src="<?= htmlspecialchars($ASSET_BASE, ENT_QUOTES, 'UTF-8') ?>/assets/wdm_logo.png" alt="WDMindikator" style="height:20px;width:auto;display:block;" />
      </a>

      <nav class="main-nav">
        <a href="#copytrading">Copytrading</a>
        <a href="#indikator">Indikator</a>
        <a href="#">Preise</a>
        <a href="#">Über uns</a>
      </nav>

      <div class="header-actions" id="headerActions" data-api-endpoint="<?= htmlspecialchars($API_ENDPOINT, ENT_QUOTES, 'UTF-8') ?>" data-logout-url="<?= htmlspecialchars($LOGOUT_URL, ENT_QUOTES, 'UTF-8') ?>">
        <a class="btn-login" href="login.php">Login</a>
        <a class="btn-register" href="register.php">Registrieren</a>
      </div>
    </div>
  </header>

  <!-- ── PAGE CONTENT ── -->
  <div class="page">

    <!-- HERO -->
    <section class="hero">
      <canvas id="chartCanvas"></canvas>

      <div class="hero-inner">
        <div class="hero-label">Genutzt von professionellen Tradern</div>
        <h1>Ein Indikator.<br>Volle Klarheit.<br><em>Echter Profit.</em></h1>
        <p>Vergiss 10 Indikatoren. <strong>WDM</strong> ersetzt sie alle durch <strong>ein</strong> Tool, das dir Angebots- und Nachfragezonen als Text beschreibt - kein visuelles Chaos mehr. <strong>85&nbsp;% der angezeigten Zonen</strong> sind profitable Zonen. Geprüft an Gold und Bitcoin.</p>
        <div class="hero-actions">
          <a class="btn-primary" href="#">WDM jetzt sichern - ab 99&nbsp;€/Monat</a>
          <a class="btn-ghost"   href="#indikator">Sehen, wie es funktioniert ↓</a>
        </div>
        <div class="hero-social">
          <div class="hero-trust-row">
            <span class="hero-live">847 Trader nutzen WDM gerade jetzt</span>
            <span class="trust-sep">&middot;</span>
            <span class="hero-trust">Sichere Zahlung</span>
            <span class="trust-sep">&middot;</span>
            <span class="hero-trust">Sofortiger Zugang</span>
            <span class="trust-sep">&middot;</span>
            <span class="hero-trust">Support 24/7</span>
          </div>
          <a class="hero-telegram" href="#">Kostenlose Telegram-Gruppe beitreten</a>
        </div>
      </div>
    </section>

    <!-- TICKER -->
    <div class="ticker-wrap">
      <div class="ticker-track" id="ticker"></div>
    </div>

    <!-- STATS -->
    <div class="stats-row">
      <div class="stat-card">
        <div class="stat-number">847+</div>
        <div class="stat-label">Trader</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">85 %</div>
        <div class="stat-label">Zonen-Genauigkeit</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">BTC + Gold</div>
        <div class="stat-label">Getestete Märkte</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">24/7</div>
        <div class="stat-label">Support</div>
      </div>
    </div>

    <!-- CHAOS SECTION -->
    <section class="chaos-section">

      <!-- Canvas background -->
      <canvas id="chaosCanvas"></canvas>
      <div class="chaos-vignette"></div>

      <div class="chaos-inner">
        <div class="chaos-eyebrow">Das Problem</div>
        <h2 class="chaos-title">Schluss mit dem<br>Indikator-Chaos.</h2>
        <p class="chaos-sub">Die meisten Trader ertrinken in Signalen. WDM gibt dir stattdessen klare Worte.</p>

        <div class="compare-grid">
          <!-- Ohne WDM -->
          <div class="compare-card without">
            <div class="compare-head">
              <span class="compare-label without-label">Ohne WDM</span>
            </div>
            <ul class="compare-list">
              <li>
                <span class="icon-x">
                  <svg viewBox="0 0 16 16"><path d="M3 3l10 10M13 3L3 13"/></svg>
                </span>
                Zu viele Indikatoren auf dem Chart
              </li>
              <li>
                <span class="icon-x">
                  <svg viewBox="0 0 16 16"><path d="M3 3l10 10M13 3L3 13"/></svg>
                </span>
                Unklare, widersprüchliche Signale
              </li>
              <li>
                <span class="icon-x">
                  <svg viewBox="0 0 16 16"><path d="M3 3l10 10M13 3L3 13"/></svg>
                </span>
                Du verpasst die besten Einstiege
              </li>
              <li>
                <span class="icon-x">
                  <svg viewBox="0 0 16 16"><path d="M3 3l10 10M13 3L3 13"/></svg>
                </span>
                Stundenlange Analyse ohne Ergebnis
              </li>
            </ul>
          </div>

          <!-- Mit WDM -->
          <div class="compare-card with">
            <div class="compare-head">
              <span class="compare-label with-label">Mit WDM</span>
            </div>
            <ul class="compare-list">
              <li>
                <span class="icon-check">
                  <svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg>
                </span>
                Ein einziger Indikator für alles
              </li>
              <li>
                <span class="icon-check">
                  <svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg>
                </span>
                Klare Text-Beschreibung jeder Zone
              </li>
              <li>
                <span class="icon-check">
                  <svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg>
                </span>
                85 % Genauigkeit der angezeigten Zonen
              </li>
              <li>
                <span class="icon-check">
                  <svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg>
                </span>
                Sofort handelbar - kein Setup nötig
              </li>
            </ul>
          </div>
        </div>

        <div class="chaos-urgency">
          Der Einführungspreis gilt nur, solange Plätze frei sind.
        </div>
      </div>
    </section>

    <!-- TEXT STATT RAUSCHEN -->
    <section class="text-section">
      <canvas id="textCanvas"></canvas>
      <div class="text-vignette"></div>
      <div class="text-inner">
        <div class="text-left">
          <h2 class="text-title">Text statt visuellem Rauschen.</h2>
          <p class="text-body">WDM wurde für Trader gebaut, die Entscheidungen treffen müssen - nicht raten wollen. Statt einem Dutzend überlappender Linien liest du einen klaren Satz: wo die Zone liegt, wie stark sie ist und was als Nächstes wahrscheinlich ist.</p>
          <p class="text-body">Der Algorithmus analysiert Angebots- und Nachfragezonen in Echtzeit auf <strong>Gold (XAUUSD)</strong> und <strong>Bitcoin (BTC)</strong> und übersetzt sie in verständliche Sprache. So triffst du schneller bessere Entscheidungen - auf jedem Zeitfenster.</p>
        </div>
        <div class="text-right">
          <div class="features-box">
            <div class="feature-item">
              <span class="fcheck"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>
              Ersetzt 10+ klassische Chart-Indikatoren
            </div>
            <div class="feature-item">
              <span class="fcheck"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>
              Text-Beschreibung jeder Marktzone
            </div>
            <div class="feature-item">
              <span class="fcheck"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>
              85 % der angezeigten Zonen sind Gewinnzonen
            </div>
            <div class="feature-item">
              <span class="fcheck"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>
              Optimiert für Gold &amp; Bitcoin
            </div>
            <div class="feature-item">
              <span class="fcheck"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>
              Funktioniert direkt in TradingView
            </div>
            <div class="feature-item">
              <span class="fcheck"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>
              Community-Support 24/7 über Telegram
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials-section">
      <div class="testimonials-eyebrow">Community</div>
      <h2 class="testimonials-title">Was Trader sagen.</h2>
      <p class="testimonials-sub">Echte Worte aus der WDM-Community.</p>

      <div class="testimonials-grid">
        <div class="testimonial-card">
          <div class="tcard-head">
            <div class="tcard-avatar" style="background:#b8860b;">MK</div>
            <div>
              <div class="tcard-name">Markus K.</div>
              <div class="tcard-role">Daytrader · Gold</div>
            </div>
          </div>
          <div class="tcard-stars">★★★★★</div>
          <p class="tcard-quote">„Seit ich WDM nutze, ist mein Chart endlich aufgeräumt. Die Zonen in Worten haben meinen XAUUSD-Trade-Plan komplett verändert."</p>
        </div>

        <div class="testimonial-card featured">
          <div class="tcard-head">
            <div class="tcard-avatar" style="background:#2e8b57;">SL</div>
            <div>
              <div class="tcard-name">Sophie L.</div>
              <div class="tcard-role">Swing-Trader · BTC</div>
            </div>
          </div>
          <div class="tcard-stars">★★★★★</div>
          <p class="tcard-quote">„Ich habe früher 8 Indikatoren gestapelt. Jetzt lese ich einen Satz und weiß, was zu tun ist. Auf Bitcoin ein echter Gamechanger."</p>
        </div>

        <div class="testimonial-card">
          <div class="tcard-head">
            <div class="tcard-avatar" style="background:#6a5acd;">TR</div>
            <div>
              <div class="tcard-name">Thomas R.</div>
              <div class="tcard-role">Trader · Gold &amp; BTC</div>
            </div>
          </div>
          <div class="tcard-stars">★★★★★</div>
          <p class="tcard-quote">„Klarheit statt Bauchgefühl. Die Trefferquote der Zonen hat mich überzeugt - und der Support im Telegram ist erstklassig."</p>
        </div>
      </div>
    </section>

    <!-- SO STARTEST DU -->
    <section class="steps-section">
      <div class="steps-eyebrow">Onboarding</div>
      <h2 class="steps-title">So startest du.</h2>
      <p class="steps-sub">In vier einfachen Schritten von der Anmeldung zum ersten Setup.</p>

      <div class="steps-grid">

        <div class="step-card">
          <div class="step-top">
            <div class="step-num">01</div>
            <div class="step-connector"></div>
          </div>
          <div class="step-icon">
            <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
          </div>
          <div class="step-body">
            <div class="step-name">Video ansehen</div>
            <p class="step-desc">Verstehe in einer Minute, wie WDM denkt und warum es anders ist.</p>
          </div>
          <a class="step-action" href="#">Video starten →</a>
        </div>

        <div class="step-card active">
          <div class="step-top">
            <div class="step-num">02</div>
            <div class="step-connector"></div>
          </div>
          <div class="step-icon">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
          </div>
          <div class="step-body">
            <div class="step-name">Indikator erhalten</div>
            <p class="step-desc">Sofortiger Zugang direkt in TradingView - kein kompliziertes Setup.</p>
          </div>
          <a class="step-action" href="#">Jetzt sichern →</a>
        </div>

        <div class="step-card">
          <div class="step-top">
            <div class="step-num">03</div>
            <div class="step-connector"></div>
          </div>
          <div class="step-icon">
            <svg viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          </div>
          <div class="step-body">
            <div class="step-name">VIP-Schulung</div>
            <p class="step-desc">Persönliche Einweisung vom Support-Team - live oder per Video.</p>
          </div>
          <a class="step-action" href="#">Termin buchen →</a>
        </div>

        <div class="step-card">
          <div class="step-top">
            <div class="step-num">04</div>
          </div>
          <div class="step-icon">
            <svg viewBox="0 0 24 24"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
          </div>
          <div class="step-body">
            <div class="step-name">Profitabel traden</div>
            <p class="step-desc">Setze klare Zonen in echte Entscheidungen um - auf jedem Zeitfenster.</p>
          </div>
          <a class="step-action" href="#">Loslegen →</a>
        </div>

      </div>
    </section>

    <!-- WDM IN AKTION -->
    <section class="aktion-section">

      <div class="aktion-header">
        <div class="aktion-eyebrow">Praxis</div>
        <h2 class="aktion-title">WDM in Aktion.</h2>
        <p class="aktion-sub">Beispielhafte Setups auf Gold und Bitcoin - echte Zonen, klare Sprache.</p>
      </div>

      <!-- Native scroll track - breaks out of .page padding -->
      <div class="aktion-scroll-outer">
        <div class="aktion-scroll-track" id="aktionTrack">

          <!-- Card 1 -->
          <div class="aktion-card slide-active">
            <div class="aktion-card-img">
              <img src="<?= htmlspecialchars($ASSET_BASE, ENT_QUOTES, 'UTF-8') ?>/assets/img/wdm_indikator_trade_01.jpg" alt="XAUUSD M15" loading="lazy" />
              <div class="aktion-card-overlay"></div>
              <div class="aktion-card-badge badge-green"><span class="badge-dot dot-green"></span>Long</div>
            </div>
            <div class="aktion-card-body">
              <div class="aktion-card-meta">
                <span class="aktion-card-pair">XAUUSD · M15</span>
                <span class="aktion-card-mkt">Gold</span>
              </div>
              <p class="aktion-card-desc">Nachfragezone als Text markiert, sauberer Long-Einstieg.</p>
              <div class="aktion-card-tags">
                <span class="stag stag-green">Long</span>
                <span class="stag">Nachfragezone</span>
                <span class="stag">M15</span>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="aktion-card">
            <div class="aktion-card-img">
              <img src="<?= htmlspecialchars($ASSET_BASE, ENT_QUOTES, 'UTF-8') ?>/assets/img/wdm_indikator_trade_02.jpg" alt="BTC/USD H1" loading="lazy" />
              <div class="aktion-card-overlay"></div>
              <div class="aktion-card-badge badge-red"><span class="badge-dot dot-red"></span>Short</div>
            </div>
            <div class="aktion-card-body">
              <div class="aktion-card-meta">
                <span class="aktion-card-pair">BTC/USD · H1</span>
                <span class="aktion-card-mkt">Bitcoin</span>
              </div>
              <p class="aktion-card-desc">Angebotszone erkannt, Short vor dem Rücklauf.</p>
              <div class="aktion-card-tags">
                <span class="stag stag-red">Short</span>
                <span class="stag">Angebotszone</span>
                <span class="stag">H1</span>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="aktion-card">
            <div class="aktion-card-img">
              <img src="<?= htmlspecialchars($ASSET_BASE, ENT_QUOTES, 'UTF-8') ?>/assets/img/wdm_indikator_trade_03.jpg" alt="Gold H4" loading="lazy" />
              <div class="aktion-card-overlay"></div>
              <div class="aktion-card-badge badge-green"><span class="badge-dot dot-green"></span>Long</div>
            </div>
            <div class="aktion-card-body">
              <div class="aktion-card-meta">
                <span class="aktion-card-pair">Gold · H4</span>
                <span class="aktion-card-mkt">Gold</span>
              </div>
              <p class="aktion-card-desc">Starke Zone bestätigt, mehrtägiger Trend mitgenommen.</p>
              <div class="aktion-card-tags">
                <span class="stag stag-green">Long</span>
                <span class="stag">Trend</span>
                <span class="stag">H4</span>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="aktion-card">
            <div class="aktion-card-img">
              <img src="<?= htmlspecialchars($ASSET_BASE, ENT_QUOTES, 'UTF-8') ?>/assets/img/wdm_indikator_trade_04.jpg" alt="BTC M30" loading="lazy" />
              <div class="aktion-card-overlay"></div>
              <div class="aktion-card-badge badge-neutral"><span class="badge-dot dot-white"></span>Re-Entry</div>
            </div>
            <div class="aktion-card-body">
              <div class="aktion-card-meta">
                <span class="aktion-card-pair">BTC · M30</span>
                <span class="aktion-card-mkt">Bitcoin</span>
              </div>
              <p class="aktion-card-desc">Text-Signal vermeidet Fehlausbruch, präziser Re-Entry.</p>
              <div class="aktion-card-tags">
                <span class="stag">Re-Entry</span>
                <span class="stag">Fehlausbruch</span>
                <span class="stag">M30</span>
              </div>
            </div>
          </div>

          <!-- Ghost 1 - Demnächst -->
          <div class="aktion-card aktion-ghost">
            <div class="aktion-card-img aktion-ghost-img">
              <div class="ghost-icon">
                <svg viewBox="0 0 24 24"><path d="M12 3l8 5-8 13L4 8l8-5z"/><path d="M4 8h16M9 8l3 13 3-13"/></svg>
              </div>
            </div>
            <div class="aktion-card-body">
              <div class="aktion-card-meta">
                <span class="aktion-card-pair ghost-pair">ETH/USD · H1</span>
                <span class="aktion-card-mkt ghost-mkt">Bald</span>
              </div>
              <p class="aktion-card-desc ghost-desc">Neues Setup wird hinzugefügt - Ethereum Angebotszone.</p>
              <div class="aktion-card-tags">
                <span class="stag ghost-stag">Ethereum</span>
                <span class="stag ghost-stag">H1</span>
              </div>
            </div>
          </div>

          <!-- Ghost 2 - Demnächst -->
          <div class="aktion-card aktion-ghost">
            <div class="aktion-card-img aktion-ghost-img">
              <div class="ghost-icon">
                <svg viewBox="0 0 24 24"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
              </div>
            </div>
            <div class="aktion-card-body">
              <div class="aktion-card-meta">
                <span class="aktion-card-pair ghost-pair">Gold · M30</span>
                <span class="aktion-card-mkt ghost-mkt">Bald</span>
              </div>
              <p class="aktion-card-desc ghost-desc">Scalping-Zone auf Gold - kurze Reaktion, sauberer Einstieg.</p>
              <div class="aktion-card-tags">
                <span class="stag ghost-stag">Gold</span>
                <span class="stag ghost-stag">Scalping</span>
              </div>
            </div>
          </div>

          <!-- Ghost 3 - Demnächst -->
          <div class="aktion-card aktion-ghost">
            <div class="aktion-card-img aktion-ghost-img">
              <div class="ghost-icon">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
              </div>
            </div>
            <div class="aktion-card-body">
              <div class="aktion-card-meta">
                <span class="aktion-card-pair ghost-pair">BTC · D1</span>
                <span class="aktion-card-mkt ghost-mkt">Bald</span>
              </div>
              <p class="aktion-card-desc ghost-desc">Wochenzone auf Bitcoin - langfristiger Trendansatz.</p>
              <div class="aktion-card-tags">
                <span class="stag ghost-stag">Bitcoin</span>
                <span class="stag ghost-stag">D1</span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!-- WAS DU BEKOMMST -->
    <section class="wdg-section">

      <div class="wdg-header">
        <div class="wdg-eyebrow">Alles inklusive</div>
        <h2 class="wdg-title">Was du mit WDM bekommst.</h2>
        <p class="wdg-sub">Zwei profitable Strategien. Ein erfahrenes Team. Ein klarer Plan - für Anfänger und Profis.</p>
      </div>

      <div class="wdg-grid">

        <!-- Strategie 1 -->
        <div class="wdg-card wdg-card--dark wdg-card--tall">
          <div class="wdg-card-icon">
            <svg viewBox="0 0 24 24"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
          </div>
          <div class="wdg-card-label">Strategie 1</div>
          <h3 class="wdg-card-title">Automatisiertes Geld&shy;wachstum</h3>
          <p class="wdg-card-desc">Für Nutzer mit Zugang zum System - dein Kapital arbeitet automatisiert im Markt. Zwei erprobte, profitable Strategien, entwickelt von einem erfahrenen Team über Jahre hinweg.</p>
          <ul class="wdg-list">
            <li>Zwei backtestete Handelsstrategien</li>
            <li>Vollautomatisierte Ausführung</li>
            <li>Kapitalwachstum ohne manuelle Eingriffe</li>
            <li>Geprüft auf Gold &amp; BTC</li>
          </ul>
        </div>

        <!-- Strategie 2 -->
        <div class="wdg-card wdg-card--light">
          <div class="wdg-card-icon wdg-card-icon--dark">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
          </div>
          <div class="wdg-card-label wdg-card-label--dark">Strategie 2</div>
          <h3 class="wdg-card-title wdg-card-title--dark">Eigenständig am Markt profitieren</h3>
          <p class="wdg-card-desc wdg-card-desc--dark">Für alle, die selbst handeln wollen - auch als Einsteiger. WDM macht es möglich, einen klaren Plan im Markt umzusetzen und eigene Entscheidungen sicher zu treffen.</p>
          <ul class="wdg-list wdg-list--dark">
            <li>Auch für Anfänger ohne Vorkenntnisse</li>
            <li>Klarer Handelsplan mit Text-Signalen</li>
            <li>Einstieg in Gold, BTC und mehr</li>
          </ul>
        </div>

        <!-- Live Call -->
        <div class="wdg-card wdg-card--light">
          <div class="wdg-card-icon wdg-card-icon--dark">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div class="wdg-card-label wdg-card-label--dark">Live Call</div>
          <h3 class="wdg-card-title wdg-card-title--dark">1× pro Woche - live mit dem Team</h3>
          <p class="wdg-card-desc wdg-card-desc--dark">Jede Woche ein gemeinsamer Live-Call. Marktanalyse, aktuelle Setups und deine Fragen direkt beantwortet.</p>
        </div>

        <!-- Marktverständnis -->
        <div class="wdg-card wdg-card--border">
          <div class="wdg-card-icon wdg-card-icon--dark">
            <svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
          </div>
          <div class="wdg-card-label wdg-card-label--dark">Bildung</div>
          <h3 class="wdg-card-title wdg-card-title--dark">Markt- &amp; Indikator&shy;verständnis</h3>
          <p class="wdg-card-desc wdg-card-desc--dark">Präsentationen, Erklärungen und Materialien - damit du verstehst was der Markt macht und wie WDM dabei hilft.</p>
          <ul class="wdg-list wdg-list--dark">
            <li>Präsentationen zu Zonen &amp; Signalen</li>
            <li>Indikator-Erklärungen Schritt für Schritt</li>
            <li>Marktverständnis für alle Level</li>
          </ul>
        </div>

        <!-- Community -->
        <div class="wdg-card wdg-card--border">
          <div class="wdg-card-icon wdg-card-icon--dark">
            <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <div class="wdg-card-label wdg-card-label--dark">Community</div>
          <h3 class="wdg-card-title wdg-card-title--dark">Etwas am Markt bewirken</h3>
          <p class="wdg-card-desc wdg-card-desc--dark">Für alle die mehr wollen als nur Profit - werde Teil einer Bewegung von Tradern die gemeinsam wachsen, teilen und Märkte besser verstehen.</p>
        </div>

      </div>
    </section>

    <!-- PRICING -->
    <section class="pricing-section" id="preise">

      <div class="pricing-header">
        <div class="pricing-urgency">⚠ Nur noch 7 Plätze zu diesem Preis</div>
        <h2 class="pricing-title">Wähle deinen Zugang.</h2>
        <p class="pricing-sub">Einmal einrichten - dauerhaft klarer traden.</p>
      </div>

      <div class="pricing-grid">

        <!-- MONATLICH -->
        <div class="pricing-card">
          <div class="pc-plan-badge">Standard</div>
          <div class="pricing-card-inner">
            <div class="pc-top">
              <div class="pc-name">Monatlich</div>
              <div class="pc-desc">Voller Zugang, monatlich kündbar</div>
            </div>
            <div class="pc-price-wrap">
              <span class="pc-price">99 €</span>
              <span class="pc-period">pro Monat</span>
            </div>
            <ul class="pc-features">
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>WDM-Indikator für Gold &amp; BTC</li>
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>Text-Zonen &amp; Updates inklusive</li>
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>Telegram-Support 24/7</li>
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>Sofortiger Zugang in TradingView</li>
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>Community Chat</li>
            </ul>
            <a class="pc-btn" href="checkout.php?plan=standard">Monatlich starten</a>
            <p class="pc-note">Jederzeit kündbar</p>
          </div>
        </div>

        <!-- PRO -->
        <div class="pricing-card pricing-card--pro">
          <div class="pc-pro-badge">Pro Version</div>
          <div class="pricing-card-inner">
            <div class="pc-top">
              <div class="pc-name pc-name--pro">Pro Version</div>
              <div class="pc-desc pc-desc--pro">Alles was du brauchst für maximalen Erfolg</div>
            </div>
            <div class="pc-price-wrap">
              <span class="pc-price pc-price--pro">249.99 €</span>
              <span class="pc-period pc-period--pro">pro Monat</span>
            </div>
            <ul class="pc-features pc-features--pro">
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>Klare SL und TP</li>
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>WDM Indikator für alle Charts</li>
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>Telegram Support 24/7</li>
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>VIP Community Chat</li>
              <li><span class="pc-check"><svg viewBox="0 0 16 16"><path d="M2.5 8.5l4 4 7-8"/></svg></span>VIP Schulung zum optimalen Nutzen</li>
            </ul>
            <a class="pc-btn pc-btn--pro" href="checkout.php?plan=pro">Pro Version sichern</a>
            <p class="pc-note pc-note--pro">🔒 Sichere Zahlung · sofortiger Zugang</p>
          </div>
        </div>

      </div>
    </section>

    <!-- SECTION 1 - COPYTRADING -->
    <section class="feature" id="copytrading">
      <div class="section-card">
        <div class="card-content">
          <span class="section-tag">Copytrading</span>
          <h2>Folge den Besten - vollautomatisch.</h2>
          <p>Wähle einen verifizierten Top-Trader aus und jede seiner Positionen wird proportional auf dein Konto gespiegelt. Keine manuelle Eingabe, kein Verpassen.</p>
          <ul class="feature-list">
            <li>Echtzeit-Synchronisation aller Trades</li>
            <li>Risikoskalierung nach deinem Kapital</li>
            <li>Detaillierte Performance-Historie je Trader</li>
            <li>Stop-Loss auf Konto-Ebene konfigurierbar</li>
          </ul>
          <a class="card-link" href="#">Trader durchsuchen</a>
        </div>
        <div class="card-visual" id="copytradingVisual">
          <canvas id="bgCandleCanvas"></canvas>
          <div class="copy-ui">
            <div class="trader-row active">
              <div class="trader-info">
                <div class="avatar">AR</div>
                <div>
                  <div class="trader-name">Alex R.</div>
                  <div class="trader-sub">BTC · ETH · SOL</div>
                </div>
              </div>
              <div class="pnl-badge">+38.4 %</div>
            </div>
            <div class="trader-row">
              <div class="trader-info">
                <div class="avatar grey">MK</div>
                <div>
                  <div class="trader-name">Mira K.</div>
                  <div class="trader-sub">Forex · Indices</div>
                </div>
              </div>
              <div class="pnl-badge">+21.1 %</div>
            </div>
            <div class="trader-row">
              <div class="trader-info">
                <div class="avatar grey">TL</div>
                <div>
                  <div class="trader-name">Tom L.</div>
                  <div class="trader-sub">Gold · Oil</div>
                </div>
              </div>
              <div class="pnl-badge">+17.7 %</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 2 - INDIKATOR -->
    <section class="feature" id="indikator">
      <div class="section-card reverse">
        <div class="card-content">
          <span class="section-tag">Indikator</span>
          <h2>Signale, die wirklich etwas bedeuten.</h2>
          <p>Unser proprietärer Indikator kombiniert Volumenanalyse, Orderflow und Momentum - und liefert dir klare Kauf- und Verkaufssignale direkt im Chart.</p>
          <ul class="feature-list">
            <li>Kompatibel mit TradingView & MT5</li>
            <li>Alerts per Telegram, E-Mail und Webhook</li>
            <li>Multi-Timeframe-Bestätigung integriert</li>
            <li>Backtesting über 5 Jahre verfügbar</li>
          </ul>
          <a class="card-link" href="#">Indikator testen</a>
        </div>
        <div class="card-visual">
          <div class="indicator-visual-wrap">
            <div class="indicator-panel">
              <div class="panel-header">
                <span class="panel-title">BTC / USDT · 4H</span>
                <span class="panel-badge">LIVE</span>
              </div>
              <canvas id="indCanvas"></canvas>
              <div class="panel-footer">
                <div class="signal-chip">RSI 62</div>
                <div class="signal-chip active">LONG ↑</div>
                <div class="signal-chip">Vol +↑</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-big">

      <!-- CTA BAND -->
      <div class="footer-cta-band">
        <div class="footer-cta-left">
          <div class="footer-cta-label">Bereit zu starten?</div>
          <h3 class="footer-cta-title">WDM jetzt sichern - ab 99 €/Monat.</h3>
          <p class="footer-cta-sub">Sofortiger Zugang · Kein Abo-Stress · Support 24/7</p>
        </div>
        <div class="footer-cta-right">
          <a class="footer-cta-btn" href="register.php">Jetzt registrieren →</a>
          <a class="footer-cta-ghost" href="#">Telegram beitreten</a>
        </div>
      </div>

      <!-- MAIN COLUMNS -->
      <div class="footer-top">
        <!-- Brand col -->
        <div class="footer-brand">
          <a href="#" class="footer-logo">
            <img src="<?= htmlspecialchars($ASSET_BASE, ENT_QUOTES, 'UTF-8') ?>/assets/wdm_logo.png" alt="WDMindikator" style="height:24px;width:auto;display:block;" />
          </a>
          <p class="footer-tagline">Der Indikator, der denkt. Angebots- und Nachfragezonen als klare Sprache - für Trader, die Ergebnisse wollen.</p>
          <div class="footer-trust-chips">
            <span class="ftrust-chip">✓ TradingView</span>
            <span class="ftrust-chip">✓ MT5</span>
            <span class="ftrust-chip">✓ Gold &amp; BTC</span>
          </div>
          <div class="footer-socials">
            <a class="footer-social-btn" href="#" title="Telegram">
              <svg viewBox="0 0 24 24"><path d="M21.2 4.3L2.8 11.5c-1.2.5-1.2 1.2-.2 1.5l4.7 1.5 1.8 5.5c.2.7.5.9 1 .9.4 0 .6-.2.9-.5l2.2-2.1 4.6 3.4c.8.5 1.4.2 1.6-.8l2.9-13.6c.3-1.3-.5-1.9-1.1-1.5z"/></svg>
            </a>
            <a class="footer-social-btn" href="#" title="Twitter / X">
              <svg viewBox="0 0 24 24"><path d="M4 4l16 16M4 20L20 4"/></svg>
            </a>
            <a class="footer-social-btn" href="#" title="YouTube">
              <svg viewBox="0 0 24 24"><rect x="2" y="6" width="20" height="14" rx="3"/><path d="M10 9.5l5 2.5-5 2.5V9.5z"/></svg>
            </a>
            <a class="footer-social-btn" href="#" title="Instagram">
              <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
            </a>
          </div>
        </div>

        <!-- Col: Produkt -->
        <div class="footer-col">
          <div class="footer-col-title">Produkt</div>
          <a href="#">Indikator Overview</a>
          <a href="#">Copytrading</a>
          <a href="#">Preise &amp; Pläne</a>
          <a href="#">Changelog</a>
          <a href="#">Roadmap</a>
          <a href="#" class="footer-badge-link">KI-Signale <span class="footer-badge">NEU</span></a>
          <a href="#" class="footer-badge-link">Mobile App <span class="footer-badge soon">BALD</span></a>
        </div>

        <!-- Col: Ressourcen -->
        <div class="footer-col">
          <div class="footer-col-title">Ressourcen</div>
          <a href="#">TradingView Setup</a>
          <a href="#">MT5 Integration</a>
          <a href="#">Zonen erklärt</a>
          <a href="#">Backtesting Daten</a>
          <a href="#">Video-Tutorials</a>
          <a href="#">Blog &amp; Analysen</a>
          <a href="#">Glossar</a>
          <a href="#">FAQ</a>
        </div>

        <!-- Col: Community -->
        <div class="footer-col">
          <div class="footer-col-title">Community</div>
          <a href="#">Telegram-Gruppe</a>
          <a href="#">Discord Server</a>
          <a href="#">Live-Webinar</a>
          <a href="#">Trader-Stories</a>
          <a href="#">Leaderboard</a>
          <div class="footer-col-title" style="margin-top:20px">Affiliate</div>
          <a href="#">Programm Overview</a>
          <a href="#">Provisionen</a>
          <a href="#">Dashboard</a>
        </div>

        <!-- Col: Märkte -->
        <div class="footer-col">
          <div class="footer-col-title">Märkte</div>
          <a href="#">Gold (XAUUSD)</a>
          <a href="#">Bitcoin (BTC)</a>
          <a href="#">Ethereum (ETH)</a>
          <a href="#">Solana (SOL)</a>
          <a href="#">EUR/USD</a>
          <a href="#">Crude Oil</a>
          <a href="#">S&amp;P 500</a>
          <div class="footer-col-title" style="margin-top:20px">Vergleiche</div>
          <a href="#">WDM vs RSI</a>
          <a href="#">WDM vs MACD</a>
        </div>

        <!-- Col: Unternehmen + Legal -->
        <div class="footer-col">
          <div class="footer-col-title">Unternehmen</div>
          <a href="#">Über WDM</a>
          <a href="#">Unser Team</a>
          <a href="#">Karriere</a>
          <a href="#">Presse &amp; Medien</a>
          <a href="#">Kontakt</a>
          <a href="#">Support</a>
          <div class="footer-col-title" style="margin-top:20px">Legal</div>
          <a href="#">Impressum</a>
          <a href="#">Datenschutz</a>
          <a href="#">AGB</a>
          <a href="#">Cookie-Einstellungen</a>
          <a href="#">Risikohinweis</a>
        </div>
      </div>

      <!-- DISCLAIMER -->
      <div class="footer-disclaimer">
        <strong>Risikohinweis:</strong> Trading beinhaltet erhebliche Risiken. Vergangene Ergebnisse sind keine Garantie für zukünftige Performance. WDMindikator ist kein Finanzberater. Alle Inhalte dienen ausschließlich zu Bildungszwecken.
      </div>

      <div class="footer-bottom">
        <span>© 2025 WDMindikator. Alle Rechte vorbehalten.</span>
        <div class="footer-bottom-links">
          <a href="#">Impressum</a>
          <a href="#">Datenschutz</a>
          <a href="#">AGB</a>
          <a href="#">Risikohinweis</a>
        </div>
      </div>
    </footer>

  </div><!-- /page -->
<script src="<?= htmlspecialchars($ASSET_BASE, ENT_QUOTES, 'UTF-8') ?>/app.js?v=<?= urlencode($ASSET_VERSION) ?>" defer></script>
</body>
</html>
