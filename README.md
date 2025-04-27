
# 🚀 NetIQ-Networking Assistance


![Status](https://img.shields.io/badge/status-Active-brightgreen)
![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)

---



## 📚 Project Overview

NetIQ VoiceBot: A Professional Networking Assistant is an intelligent chatbot that helps users by providing networking tips, professional contact suggestions, and general assistance regarding career networking.

.  
key features:-
1.The bot responds with concise and professional answers about networking and career-building.
2.Text responses are converted into speech using Murf API for a more engaging experience.
3.Ability to handle open-ended networking queries and provide tips on professional networking.

It is built using:
- 🌐 Flask (for backend server)
- 🗣️ Text-to-Speech API
- 🔥 Frontend (HTML/CSS/JavaScript/Python/PHP/Mysql)
- 🚀 Fetch API integration for dynamic communication




---

## 🛠️ Features

- 🎤 **Text-to-Speech Bot** that reads and speaks responses dynamically
- 📨 **Form Submission** with validation and feedback
- 🔥 **Real-Time Communication** using Fetch API
- 🧹 **Clean UI** with Responsive Design
- 🌐 **Cross-Origin Requests** handled via Flask-CORS
- 📣 **Custom Voices, Rate, and Volume Settings** for speech
- 🎬 **Animated Responses** (if included)

---

## 🏗️ Project Structure

```plaintext
/AI NETWORKING ASSISTANT
├── contactmysql.php/
│   ├── createCD.php
│   ├── createCT.php
│   ├── deleteCT.php
│   ├── retrivedataCT.php
├── datamysql.php/
│   ├── createdatabase.php
│   ├── createtable.php
│   ├── deletesql.php
│   ├── insertdata.php
│   ├── retrivedata.php
├── PHPMailer-master/       # (PHPMailer library for email sending)
├── templates/
│   ├── contact2.html
│   ├── contactprocess.php
│   ├── index.html
├── app.py                   # Main Python backend file (Flask app)
├── connection.php           # PHP database connection script
├── forgot_password.php      # Forgot password functionality
├── home.php                 # Home page
├── login.php                # User login page
├── logout.php               # Logout handler
├── register.php             # User registration page
├── reset_password.php       # Password reset handler
├── verify_otp.php           # OTP verification for security
├── requirements.txt
└── README.md

📄 Description of Important Folders/Files

File/Folder	Purpose
contactmysql.php/	Manage Contact-related Database operations (Create, Retrieve, Delete Contact Tables).
datamysql.php/	Handle Database-level operations like creating database, inserting data, retrieving data.
PHPMailer-master/	External PHP library to send emails (e.g., for verification, password recovery).
templates/	HTML templates and related PHP processing files for the frontend.
app.py	Python Flask server backend for additional API and TTS features.
connection.php	Central PHP script for MySQL database connection.
login.php, register.php, forgot_password.php, logout.php	User Authentication (Login/Register/Password Reset).
verify_otp.php	OTP verification functionality for security during registration or password recovery.




