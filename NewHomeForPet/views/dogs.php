<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adoptify - Meet Max</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #0e0f1a, #1c1f2b);
      color: white;
      min-height: 100vh;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 60px;
      background: rgba(0, 0, 0, 0.3);
    }

    header nav span {
      margin-left: 30px;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    header nav span:hover {
      color: #fbbf24;
    }

    .hero {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      padding: 60px;
      gap: 40px;
    }

    .hero-text h1 {
      font-size: 4rem;
      letter-spacing: 2px;
    }

    .subtitle {
      font-size: 1.2rem;
      margin: 15px 0 40px;
      letter-spacing: 8px;
      color: #fbbf24;
    }

    .tabs {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .tab-button {
      background: rgba(255, 255, 255, 0.05);
      border: none;
      padding: 15px 20px;
      border-left: 4px solid transparent;
      color: white;
      text-align: left;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .tab-button:hover,
    .tab-button.active {
      background: rgba(255, 255, 255, 0.1);
      border-left: 4px solid #fbbf24;
      color: #fbbf24;
    }

    .content-section {
      margin-top: 30px;
      background: rgba(255, 255, 255, 0.05);
      padding: 25px;
      border-radius: 12px;
      backdrop-filter: blur(6px);
      animation: fadeIn 0.5s ease-in-out;
    }

    .rating {
      color: #fbbf24;
      font-size: 22px;
    }

    .dog-image {
      width: 100%;
      max-width: 500px;
      border-radius: 20px;
      box-shadow: 0 25px 40px rgba(0, 0, 0, 0.4);
    }

    .button {
      margin-top: 30px;
      background: linear-gradient(90deg, #fbbf24, #fff176);
      color: #1c1f2b;
      border: none;
      padding: 15px 40px;
      font-size: 18px;
      font-weight: bold;
      border-radius: 50px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .button:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(251, 191, 36, 0.4);
    }

    ul {
      list-style: none;
      padding: 0;
      margin-top: 10px;
    }

    ul li {
      margin: 10px 0;
      font-size: 1.1rem;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 900px) {
      .hero {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .tabs {
        align-items: center;
      }

      .tab-button {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Adoptify</div>
    <nav>
      <span>LICENSE</span>
      <span>ABOUT</span>
      <span>CONTACT</span>
      <span>CANINES</span>
    </nav>
  </header>

  <div class="hero">
    <div class="hero-text">
      <h1>LOYAL & FRIENDLY</h1>
      <div class="subtitle">MEET MAX</div>
      <div class="tabs">
        <button class="tab-button active" onclick="showTab('about')">01 About Max</button>
        <button class="tab-button" onclick="showTab('personality')">02 Personality</button>
        <button class="tab-button" onclick="showTab('health')">03 Health</button>
      </div>
      <div class="content-section" id="tab-content"></div>
      <button class="button">MEET MAX! 🐾</button>
    </div>
    <div class="hero-image">
      <img src="https://images.unsplash.com/photo-1551717743-49959800b1f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Max the dog" class="dog-image" />
    </div>
  </div>

  <script>
    const tabContent = {
      about: `
        <h2>Friendly and Affectionate</h2>
        <p>Max is a loyal and friendly Golden Retriever who loves to play and spend time with his family. He's 4 years old and has been looking for his forever home. Max is intelligent, energetic, and gets along well with children and other pets. He's house-trained and knows many commands.</p>
      `,
      personality: `
        <h2>Playful and Loyal</h2>
        <ul>
          <li>Intelligent: <span class="rating">🐾🐾🐾🐾🐾</span></li>
          <li>Friendly: <span class="rating">🐾🐾🐾🐾🐾</span></li>
          <li>Energetic: <span class="rating">🐾🐾🐾🐾</span></li>
          <li>Loyal: <span class="rating">🐾🐾🐾🐾🐾</span></li>
          <li>Affectionate: <span class="rating">🐾🐾🐾🐾</span></li>
        </ul>
      `,
      health: `
        <h2>Up-to-Date and Active</h2>
        <p>Max is in excellent health and up-to-date on all vaccinations. He's been neutered and microchipped. Recent veterinary checkup shows he's in perfect condition with no health concerns. He's active, energetic, and ready to bring joy to his new family.</p>
      `
    };

    function showTab(tab) {
      document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
      document.querySelector(`.tab-button[onclick*="${tab}"]`).classList.add('active');
      document.getElementById('tab-content').innerHTML = tabContent[tab];
    }

    showTab('about');
  </script>
</body>
</html>
