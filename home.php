<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NetIQ - Networking Assistant</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f7f7f7;
      color: #333;
      text-align: center;
    }
    header {
      background: linear-gradient(to right, #00c6ff, #0072ff);
      padding: 10px 10px;
      position: relative;
      color: #fff;
    }
    header h1 {
      margin: 0;
      font-size: 1.8rem;
    }
    header p {
      margin-top: 8px;
      font-size: 1.2rem;
      opacity: 0.9;
    }
    .header-buttons {
      position: absolute;
      top: 20px;
      right: 20px;
    }
    .header-buttons button {
      background-color: #ff5252;
      color: white;
      border: none;
      padding: 10px 18px;
      margin-left: 10px;
      border-radius: 8px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .header-buttons button:hover {
      background-color: #e04848;
    }
    .image-section {
      margin: 40px 0;
    }
    .image-section img {
      width: 250px;
      height: 180px;
      object-fit: cover;
      margin: 10px;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }
    .image-section img:hover {
      transform: scale(1.05);
    }
    .feature-banner img {
      width: 80%;
      max-width: 600px;
      margin: 30px 0;
      border-radius: 20px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }
    section {
      padding: 20px;
    }
    section h2, section h3 {
      margin-bottom: 10px;
      color: #0072ff;
    }
    section p, section ul {
      max-width: 800px;
      margin: 0 auto 20px;
      line-height: 1.6;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    ul li {
      margin-bottom: 8px;
      font-size: 16px;
      
    }
    .about-netiq {
  background: #ffffff;
  padding: 60px 40px;
  margin: 40px auto;
  max-width: 1000px;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  text-align: center;
}

.about-netiq h2 {
  font-size: 2.5rem;
  color: #333;
  margin-bottom: 20px;
}

.about-netiq .description {
  font-size: 1.1rem;
  color: #555;
  line-height: 1.7;
  margin-bottom: 40px;
}

.about-netiq .content-block {
  margin-bottom: 40px;
}

.about-netiq h3 {
  font-size: 2rem;
  color: #4a90e2;
  margin-bottom: 20px;
}

.custom-list {
  list-style: none;
  padding: 0;
  margin: 0 auto;
  max-width: 500px; /* <-- Important: fixes width for center alignment */
  text-align: left;  /* Items aligned neatly under heading */
}

.custom-list li {
  font-size: 1.05rem;
  color: #555;
  margin: 12px 0;
  padding-left: 25px;
  position: relative;
}

.custom-list li::before {
  content: "•";
  position: absolute;
  left: 0;
  color: #4a90e2;
  font-size: 1.2rem;
  line-height: 1;
}

    #footer-section {
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: white;
      padding: 40px 20px;
      margin-top: 50px;
    }
    #footer-section a {
      color: white;
      text-decoration: underline;
    }
    #footer-section a:hover {
      text-decoration: none;
    }
    h1 {
  text-align: center;
  margin-top: 20px;
  font-size: 2.5rem;
  font-weight: bold;
  color: #333;
}

  </style>
</head>

<body>

  <header>
    <h1>NetIQ - Networking Assistant</h1>
    <p>Your Professional AI Companion for Network Queries</p>
    <div class="header-buttons">
      <button onclick="login()">Login</button>
      <button onclick="register()">Register</button>
    </div>
  </header>

  <div class="image-section">
    <img src="https://img.freepik.com/premium-vector/ai-chat-bot-technology-concept-people-chatting-with-robot-asking-questions-receiving-answers_36358-1867.jpg" alt="Feature 1">
    <img src="https://i.pinimg.com/originals/7d/9b/1d/7d9b1d662b28cd365b33a01a3d0288e1.gif" alt="Feature 2">
    <img src="https://itsm.tools/wp-content/uploads/2021/11/bot-and-human.png" alt="Feature 3">
  </div>
  <h1>One to One Voice Interaction with NetIQ VoiceBot </h1>
  <div class="feature-banner">
    <img src="https://cdn.dribbble.com/userupload/32122583/file/original-400827bdf243931c8ffd26a268a837ce.gif" alt="Bot Banner">
  </div>
   <div style="margin: 20px 0;">
    <p style="font-size: 1.2rem; color: #333;">Experience the power of AI with NetIQ. Get instant answers to your networking queries and enhance your knowledge.</p>
    <button onclick="login()" style="background-color: #0072ff; color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer;">Login Now</button>
    <button onclick="register()" style="background-color:rgb(92, 84, 216); color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer;">Register here</button>
   </div>
  <section class="about-netiq">
  <h2>About NetIQ</h2>
  <p class="description">
    NetIQ is an AI-powered chatbot platform designed to assist students, IT professionals, and network enthusiasts with networking-related questions. It provides clear explanations, troubleshooting support, and expert guidance on various networking concepts.
  </p>

  <div class="content-block">
    <h3>Key Functions</h3>
    <ul class="custom-list">
      <li>🔹 Instant solutions for networking queries</li>
      <li>🔹 Comprehensive resources on network fundamentals</li>
      <li>🔹 Expert troubleshooting and best practices</li>
      <li>🔹 Exam preparation support for students</li>
      <li>🔹 Interactive, voice-based chat sessions</li>
    </ul>
  </div>

  <div class="content-block">
    <h3>Features</h3>
    <ul class="custom-list">
      <li>✅ Real-time Q&A for networking topics</li>
      <li>✅ Intuitive and user-friendly interface</li>
      <li>✅ Voice chat enabled for enhanced accessibility</li>
      <li>✅ Fully responsive design for mobile and desktop</li>
      <li>✅ Free access for students and professionals</li>
    </ul>
  </div>
</section>


  <footer id="footer-section">
    <div>
      <h2>About Us</h2>
      <p>NetIQ is a powerful platform designed to assist you with networking-related queries, providing accurate answers to help students and professionals excel in their networking journey.</p>
    </div>

    <div>
      <h3>Features</h3>
      <ul>
        <li>Real-time answers to networking questions</li>
        <li>Interactive voice chat for seamless communication</li>
        <li>User-friendly interface for easy navigation</li>
      </ul>
    </div>

    <div>
      <h3>Contact Us</h3>
      <p>For inquiries or assistance, feel free to reach out:</p>
      <p><strong>Phone:</strong> <a href="tel:+919369572534">+91 9369572534</a></p>
      <p><strong>Email:</strong> <a href="mailto:ambuj20maurya@gmail.com">info@networkingassistant.com</a></p>
      <p><strong>Location:</strong> Mirzapur, India</p>
    </div>
  </footer>

  <script>
    function login() {
      window.location.href = "login.php";
    }
    function register() {
      window.location.href = "register.php";
    }
  </script>

</body>
</html>
