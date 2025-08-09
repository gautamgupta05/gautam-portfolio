<!--
  Rakhi Greeting — Single-file animated template
  ------------------------------------------------
  Instructions:
  1. Open this HTML file locally in your browser (double-click) to preview.
  2. Click the camera icon on each photo to upload your and your sister's pictures (the template uses FileReader and stores them in localStorage so the images persist in your browser).
  3. Use the Next / Prev buttons or click the Rakhi in the center to reveal messages step-by-step. Hover over photos for extra animations.
  4. Optional: upload a background music file via the "Add background music" button and toggle play/pause.
  5. When ready to share: push this file to a GitHub repo and enable GitHub Pages, or deploy to Vercel/Render for a free public URL.

  Quick hosting (summary):
   - GitHub Pages: Create a repo, commit this file as index.html to the main branch, then enable Pages from Settings -> Pages -> branch: main / root. URL: https://{yourusername}.github.io/{repo}/
   - Vercel: Import the repo and deploy a static site. Vercel provides an instant URL.
   - Render: Create a Static Site and connect your repo; deploy.

  Enjoy — edit the messages array below to add personal text.
-->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Happy Rakshabandhan — A Virtual Rakhi for My Sister</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Merriweather:wght@300;400;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --bg1: #FFF6F8;
            --bg2: #FFF0E6;
            --accent: #d63384;
            --accent-2: #ff7aa2;
            --card: #ffffffcc;
            --muted: #666;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
            background: radial-gradient(circle at 10% 20%, #fff0f6, transparent 15%), radial-gradient(circle at 90% 80%, #fff6ee, transparent 15%), linear-gradient(180deg, var(--bg1), var(--bg2));
            -webkit-font-smoothing: antialiased;
            color: #222;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrap {
            width: min(980px, 96%);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.85));
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(20, 20, 30, 0.08);
            padding: 28px;
            position: relative;
            overflow: hidden;
        }

        header {
            display: flex;
            align-items: center;
            gap: 14px
        }

        header h1 {
            font-family: 'Merriweather', serif;
            margin: 0;
            font-size: 28px;
            color: var(--accent);
            letter-spacing: 0.4px;
        }

        header p {
            margin: 0;
            color: var(--muted)
        }

        .stage {
            display: flex;
            gap: 20px;
            align-items: center;
            justify-content: center;
            margin-top: 18px;
            flex-wrap: wrap;
        }

        .person {
            width: 210px;
            height: 210px;
            border-radius: 20px;
            background: linear-gradient(180deg, #fff, #fff0);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            border: 6px solid rgba(255, 255, 255, 0.6);
            transition: transform .5s ease, box-shadow .3s ease;
            box-shadow: 0 6px 18px rgba(10, 10, 20, 0.06);
        }

        .person:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 20px 40px rgba(10, 10, 30, 0.12)
        }

        .person img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block
        }

        .camera {
            position: absolute;
            right: 8px;
            bottom: 8px;
            background: linear-gradient(180deg, var(--accent), var(--accent-2));
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            box-shadow: 0 6px 18px rgba(214, 51, 132, 0.14);
        }

        .camera input {
            display: none
        }

        .center-rakhi {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: conic-gradient(from 120deg, #ffd2e5, #fff, #ffeef6);
            box-shadow: 0 10px 30px rgba(214, 51, 132, 0.08);
            transform: rotate(0deg);
            transition: transform .6s cubic-bezier(.2, .9, .3, 1);
            cursor: pointer;
        }

        .center-rakhi:hover {
            transform: rotate(6deg) scale(1.04)
        }

        .rakhi-inner {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fff, #fffcf6);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .rakhi-thread {
            position: absolute;
            left: -260px;
            top: 50%;
            width: 220px;
            height: 6px;
            background: linear-gradient(90deg, #f9d6e3, #ffdce6);
            border-radius: 6px;
            transform: translateY(-50%)
        }

        .rakhi-thread.right {
            left: auto;
            right: -260px;
            transform: translateY(-50%)
        }

        .rakhi-knot {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: linear-gradient(180deg, #d63384, #ff7aa2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700
        }

        .message-card {
            margin-top: 18px;
            padding: 18px;
            border-radius: 14px;
            background: var(--card);
            box-shadow: 0 6px 24px rgba(20, 20, 30, 0.05);
        }

        .typewriter {
            min-height: 84px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 16px;
            font-size: 18px;
            color: #333;
            line-height: 1.4
        }

        .controls {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 12px
        }

        .btn {
            padding: 10px 16px;
            border-radius: 10px;
            border: 0;
            cursor: pointer;
            font-weight: 600;
            background: linear-gradient(90deg, var(--accent), var(--accent-2));
            color: white;
            box-shadow: 0 8px 20px rgba(214, 51, 132, 0.12)
        }

        .btn.secondary {
            background: transparent;
            color: var(--accent);
            border: 2px solid rgba(214, 51, 132, 0.08);
            box-shadow: none
        }

        .small {
            font-size: 13px;
            color: var(--muted);
            margin-top: 10px;
            text-align: center
        }

        /* floating hearts on hover */
        .hearts {
            position: absolute;
            pointer-events: none;
        }

        .heart {
            position: absolute;
            width: 20px;
            height: 20px;
            transform: rotate(-45deg);
        }

        .heart:before,
        .heart:after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(180deg, #ff7aa2, #ff4778)
        }

        .heart:before {
            top: -10px;
            left: 0
        }

        .heart:after {
            left: 10px;
            top: 0
        }

        /* confetti */
        .confetti-piece {
            position: fixed;
            width: 10px;
            height: 14px;
            z-index: 9999;
            opacity: 0.95;
            border-radius: 2px;
            pointer-events: none
        }

        /* modal */
        .modal {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9998
        }

        .modal.active {
            display: flex
        }

        .modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6)
        }

        /* responsive */
        /* responsive */
        /* Tablet view — less than 820px wide */
        @media (max-width: 820px) {
            header {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 8px;
            }

            header h1 {
                font-size: 22px;
            }

            header .loicon {
                margin-top: 144px;
            }

            .stage {
                gap: 20px;
            }

            .top-right-actions {
                top: 96px;
            }

            .person {
                width: 150px;
                height: 150px;
            }

            .center-rakhi {
                width: 120px;
                height: 120px;
            }

            .rakhi-inner {
                width: 90px;
                height: 90px;
            }
        }

        /* Mobile view — less than 600px wide */
        @media (max-width: 600px) {
            body {
                padding: 16px;
            }

            .wrap {
                padding: 16px;
            }

            header h1 {
                font-size: 20px;
            }

            header p.small {
                font-size: 13px;
            }

            .stage {
                flex-direction: column;
                align-items: center;
                gap: 16px;
            }

            .person {
                width: 130px;
                height: 130px;
                border-width: 4px;
            }

            .center-rakhi {
                width: 110px;
                height: 110px;
            }

            .rakhi-inner {
                width: 80px;
                height: 80px;
            }

            .message-card {
                padding: 14px;
                text-align: center;
            }

            .typewriter {
                font-size: 16px;
                padding: 10px;
            }

            .controls {
                flex-wrap: wrap;
                justify-content: center;
                gap: 8px;
            }

            .btn {
                padding: 8px 14px;
                font-size: 14px;
            }

            .sig-edit {
                flex-direction: column;
                gap: 6px;
                align-items: center;
            }
        }

        /* Small phone view — less than 400px wide */
        @media (max-width: 400px) {
            .person {
                width: 110px;
                height: 110px;
            }

            .center-rakhi {
                width: 90px;
                height: 90px;
            }

            .rakhi-inner {
                width: 65px;
                height: 65px;
            }

            .typewriter {
                font-size: 14px;
            }

            .btn {
                font-size: 13px;
            }

            .small {
                font-size: 12px;
            }
        }

        /* tiny flourish */
        .sig-edit {
            display: flex;
            gap: 8px;
            align-items: center;
            justify-content: center;
            margin-top: 10px
        }

        .sig-edit input {
            padding: 8px 10px;
            border-radius: 8px;
            border: 1px solid #eee
        }

        .top-right-actions {
            position: absolute;
            right: 18px;
            /* top: 18px; */
            display: flex;
            gap: 8px
        }

        .ghost {
            background: transparent;
            border: 2px dashed rgba(200, 100, 140, 0.08);
            padding: 8px;
            border-radius: 10px;
            color: var(--accent);
            font-weight: 600
        }
    </style>
</head>

<body>
    <div class="wrap" role="main">
        <!-- YouTube Background Music -->
        <iframe id="ytAudio"
            src="https://www.youtube.com/embed/xnNDZYh9_Hw?autoplay=1&loop=1&playlist=xnNDZYh9_Hw&controls=0&start=0"
            style="display:none">
        </iframe>
        <div class="top-right-actions">
            <label class="ghost" title="Upload background music">
                🔊 Add background music
                <input id="musicInput" type="file" accept="audio/*" style="display:none" />
            </label>
            <button id="musicToggle" class="ghost" style="cursor:pointer">Play</button>
        </div>

        <header>
            <div class="loicon"
                style="width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,var(--accent),var(--accent-2));display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:20px">
                R</div>
            <div>
                <h1>Happy Rakshabandhan ❤️</h1>
                <p class="small">A little virtual rakhi from me to you — hover, click and enjoy the surprises</p>
            </div>
        </header>

        <div class="stage">
            <div class="person" id="leftPerson" title="Click camera to change photo">
                <img id="leftImg"
                    src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='800' height='800'><rect width='100%' height='100%' fill='%23ffeef6'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' font-size='36' fill='%23d63384' font-family='Poppins'>Click camera to add brother photo</text></svg>"
                    alt="Your Photo">
                <div class="camera" onclick="document.getElementById('leftUpload').click()">📷<input id="leftUpload"
                        type="file" accept="image/*"></div>
            </div>

            <div class="center-rakhi" id="rakhi">
                <div class="rakhi-thread"></div>
                <div class="rakhi-thread right"></div>
                <div class="rakhi-inner">
                    <div style="font-weight:700;color:var(--accent);">🪢</div>
                    <div style="font-size:12px;color:#444;margin-top:6px">Click me</div>
                </div>
            </div>

            <div class="person" id="rightPerson" title="Click camera to change photo">
                <img id="rightImg"
                    src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='800' height='800'><rect width='100%' height='100%' fill='%23fff6f8'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' font-size='36' fill='%23d63384' font-family='Poppins'>Click camera to add sister photo</text></svg>"
                    alt="Sister Photo">
                <div class="camera" onclick="document.getElementById('rightUpload').click()">📷<input id="rightUpload"
                        type="file" accept="image/*"></div>
            </div>
        </div>

        <div class="message-card">
            <div class="typewriter" id="typewriter">Loading message...</div>

            <div class="controls">
                <button class="btn secondary" id="prevBtn">Prev</button>
                <button class="btn" id="nextBtn">Next</button>
                <button class="btn secondary" id="surpriseBtn">Surprise</button>
            </div>

            <div class="sig-edit">
                <input id="signatureInput" placeholder="Your name (signature)" />
                <button id="saveSig" class="btn secondary">Save</button>
            </div>
            <div class="small">Tip: Click the central rakhi or the Next button to reveal the next message. Hover the
                photos for an extra surprise.</div>
        </div>

        <div class="modal" id="modal"><img id="modalImg" src="" alt="Full image">
            <div style="position:absolute;right:28px;top:18px;color:#fff;cursor:pointer;font-weight:700"
                id="modalClose">✕</div>
        </div>
    </div>

    <script>
        // ====== User messages (edit these to customize) ======
        const messages = [
            "Happy Rakshabandhan, my dearest sister! Even miles apart, my love and promise to protect you remain the same. ❤️",
            "I miss our childhood — the sweets, the laughter, the little fights. Today I tie this virtual rakhi and send you my warmest hugs. 🪢",
            "May your life be full of success, health and bright days. I pray for your happiness every day. 🌟",
            "Distance can only keep us apart for a while; my heart is always with you. Come visit soon — I miss you! 😘",
            "💝 Wishing you endless happiness, health, and success.",
            "💖 Even though we are miles apart, my love for you is always close to your heart.",
            "Lots of love, your brother — <span id='sigOut'>Gautam</span>. Click 'Surprise' for a little treat! 🎁"
        ];
        // ====================================================

        // Elements
        const tw = document.getElementById('typewriter');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const surpriseBtn = document.getElementById('surpriseBtn');
        const rakhi = document.getElementById('rakhi');
        const leftUpload = document.getElementById('leftUpload');
        const rightUpload = document.getElementById('rightUpload');
        const leftImg = document.getElementById('leftImg');
        const rightImg = document.getElementById('rightImg');
        const modal = document.getElementById('modal');
        const modalImg = document.getElementById('modalImg');
        const modalClose = document.getElementById('modalClose');
        const signatureInput = document.getElementById('signatureInput');
        const saveSig = document.getElementById('saveSig');
        const sigOut = document.getElementById('sigOut');

        let idx = 0;
        let typing = null;

        function saveToLocal(key, val) {
            try {
                localStorage.setItem(key, val)
            } catch (e) {}
        }

        function loadFromLocal(key) {
            try {
                return localStorage.getItem(key)
            } catch (e) {
                return null
            }
        }

        // Typewriter
        function showMessage(i) {
            i = Math.max(0, Math.min(messages.length - 1, i));
            idx = i;
            const html = messages[i];
            if (typing) clearInterval(typing);
            tw.innerHTML = '';
            let j = 0;
            const plain = html;
            // handle html tags gracefully by revealing char by char
            function step() {
                if (j >= plain.length) {
                    clearInterval(typing);
                    typing = null;
                    return
                }
                tw.innerHTML = plain.slice(0, j + 1) + (j % 2 === 0 ? '<span style="opacity:.6">|</span>' : '');
                j++;
            }
            typing = setInterval(step, 22);
            updateButtons();
        }

        function updateButtons() {
            prevBtn.disabled = idx === 0;
            nextBtn.disabled = idx === messages.length - 1;
        }

        nextBtn.addEventListener('click', () => {
            if (idx < messages.length - 1) showMessage(idx + 1);
        });
        prevBtn.addEventListener('click', () => {
            if (idx > 0) showMessage(idx - 1);
        });

        rakhi.addEventListener('click', () => {
            if (idx < messages.length - 1) showMessage(idx + 1);
            else surprise();
            // small pulse
            rakhi.animate([{
                transform: 'scale(1)'
            }, {
                transform: 'scale(1.06)'
            }, {
                transform: 'scale(1)'
            }], {
                duration: 450,
                easing: 'ease-out'
            })
        });

        surpriseBtn.addEventListener('click', surprise);

        function surprise() {
            // show last message
            showMessage(messages.length - 1);
            // confetti and hearts
            launchConfetti(90);
            spawnHearts(16);
        }

        // File uploads
        leftUpload.addEventListener('change', (e) => {
            handleFile(e.target.files[0], leftImg, 'leftImg')
        });
        rightUpload.addEventListener('change', (e) => {
            handleFile(e.target.files[0], rightImg, 'rightImg')
        });

        function handleFile(file, imgEl, key) {
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function(ev) {
                imgEl.src = ev.target.result;
                saveToLocal(key, ev.target.result);
            }
            reader.readAsDataURL(file);
        }

        // modal open when clicking image
        leftImg.addEventListener('click', () => {
            openModal(leftImg.src)
        });
        rightImg.addEventListener('click', () => {
            openModal(rightImg.src)
        });
        modalClose.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal()
        });

        function openModal(src) {
            modalImg.src = src;
            modal.classList.add('active')
        }

        function closeModal() {
            modal.classList.remove('active')
        }

        // hearts on hover
        function spawnHearts(n, area) {
            const parent = document.body;
            for (let i = 0; i < n; i++) {
                const h = document.createElement('div');
                h.className = 'heart';
                h.style.left = (50 + (Math.random() * 60 - 30)) + '%';
                h.style.top = (40 + Math.random() * 40) + '%';
                h.style.transform = `rotate(${Math.random()*40-20}deg) scale(${0.7+Math.random()*0.6})`;
                h.style.opacity = 0.95;
                parent.appendChild(h);
                const vy = -40 - Math.random() * 120;
                h.animate([{
                    transform: h.style.transform,
                    opacity: 1
                }, {
                    transform: `translateY(${vy}px) ${h.style.transform}`,
                    opacity: 0
                }], {
                    duration: 1200 + Math.random() * 800,
                    easing: 'cubic-bezier(.2,.8,.2,1)'
                });
                setTimeout(() => h.remove(), 2000);
            }
        }

        // confetti
        function launchConfetti(count) {
            const colors = ['#ffd8e6', '#ff77a9', '#ffd47a', '#8de7d6', '#ffb3d9'];
            for (let i = 0; i < count; i++) {
                const el = document.createElement('div');
                el.className = 'confetti-piece';
                el.style.left = Math.random() * 100 + '%';
                el.style.top = '-10px';
                el.style.width = (6 + Math.random() * 10) + 'px';
                el.style.height = (8 + Math.random() * 12) + 'px';
                el.style.background = colors[Math.floor(Math.random() * colors.length)];
                el.style.transform = 'rotate(' + (Math.random() * 360) + 'deg)';
                document.body.appendChild(el);
                const dur = 1800 + Math.random() * 1200;
                el.animate([{
                        transform: 'translateY(0) rotate(0)',
                        opacity: 1
                    },
                    {
                        transform: 'translateY(' + (window.innerHeight + 200) + 'px) rotate(540deg)',
                        opacity: 0
                    }
                ], {
                    duration: dur,
                    easing: 'cubic-bezier(.2,.7,.3,1)'
                });
                setTimeout(() => el.remove(), dur + 100);
            }
        }

        // load local images & signature
        window.addEventListener('load', () => {
            const sigOut = document.getElementById('sigOut'); // Now after DOM is ready
            const signatureInput = document.getElementById('signatureInput');
            const li = loadFromLocal('leftImg');
            const ri = loadFromLocal('rightImg');
            const sig = loadFromLocal('rakhiSig');

            if (li) leftImg.src = li;
            if (ri) rightImg.src = ri;
            if (sig) {
                signatureInput.value = sig;
                sigOut.innerHTML = escapeHtml(sig);
            }
            showMessage(0);
        });


        // signature save
        saveSig.addEventListener('click', () => {
            const v = signatureInput.value.trim();
            saveToLocal('rakhiSig', v);
            sigOut.innerHTML = escapeHtml(v || 'Gautam');
            // tiny pulse
            saveSig.animate([{
                transform: 'scale(1)'
            }, {
                transform: 'scale(1.04)'
            }, {
                transform: 'scale(1)'
            }], {
                duration: 350
            });
        });

        function escapeHtml(s) {
            if (!s) return '';
            return s.replace(/[&<>"']/g, function(c) {
                return {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#39;'
                } [c] || c;
            });
        }


        // music handling
        let audio = null; // For uploaded file
        let isPlaying = true;

        document.getElementById('musicInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                // Stop YouTube iframe music
                document.getElementById('ytAudio').src = '';
                // Play uploaded music
                const url = URL.createObjectURL(file);
                audio = new Audio(url);
                audio.loop = true;
                audio.play();
                isPlaying = true;
                document.getElementById('musicToggle').innerText = 'Pause';
            }
        });

        document.getElementById('musicToggle').addEventListener('click', function() {
            if (audio) {
                if (isPlaying) {
                    audio.pause();
                    this.innerText = 'Play';
                } else {
                    audio.play();
                    this.innerText = 'Pause';
                }
            } else {
                // Toggle iframe music by muting/unmuting
                const iframe = document.getElementById('ytAudio');
                if (isPlaying) {
                    iframe.contentWindow.postMessage('{"event":"command","func":"mute","args":""}', '*');
                    this.innerText = 'Play';
                } else {
                    iframe.contentWindow.postMessage('{"event":"command","func":"unMute","args":""}', '*');
                    this.innerText = 'Pause';
                }
            }
            isPlaying = !isPlaying;
        });
        // hover surprises
        document.getElementById('rightPerson').addEventListener('mouseenter', () => {
            spawnHearts(10)
        });
        document.getElementById('leftPerson').addEventListener('mouseenter', () => {
            spawnHearts(6)
        });

        // allow clicking image overlay camera to open file
        // done via onclick on camera

        // helper: keyboard support
        window.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') nextBtn.click();
            if (e.key === 'ArrowLeft') prevBtn.click();
            if (e.key === 'Enter') rakhi.click();
        });
    </script>
</body>

</html>
