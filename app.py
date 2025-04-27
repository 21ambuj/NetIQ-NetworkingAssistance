from flask import Flask, render_template, request, jsonify
import requests
import sqlite3
from flask_cors import CORS  # ✅ To allow PHP to talk to Flask

app = Flask(__name__)
CORS(app) 

# 🔐 API keys
GROQ_API_KEY = "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"
MURF_API_KEY = "ap2_1ed5cd30-2f51-4ebc-b8f6-33c6a31c81e7"

# 🤖 Call GROQ API to get bot response
def get_bot_reply(user_input):
    url = "https://api.groq.com/openai/v1/chat/completions"
    headers = {
        "Authorization": f"Bearer {GROQ_API_KEY}",
        "Content-Type": "application/json"
    }
    payload = {
        "model": "llama3-8b-8192",
        "messages": [
            {"role": "system", "content": "You are a smart assistant NetIQ. keep it short, answer precise and 5 to 6 lines about 50 words don't use speacila character, if user ask for long answwer answer in points  You help users connect with professionals, enhance networking opportunities, and facilitate communication within their industry. You can assist with queries like finding professional contacts, connecting with others, networking tips, and guidance on expanding professional networks. Politely inform users that you cannot process any unrelated requests and suggest they focus on networking-related questions for further assistance. If the user asks about any other topic, say: ,I am not able to help you with this topic in short, please ask me about networking or related topics."},
            {"role": "user", "content": user_input}
        ]
    }
    response = requests.post(url, headers=headers, json=payload)
    return response.json()['choices'][0]['message']['content']

# 🎤 Get Murf AI voice with safe handling
def get_murf_audio_url(text):
    url = "https://api.murf.ai/speech/generate"
    headers = {
        "api-key": MURF_API_KEY,
        "Content-Type": "application/json"
    }
    payload = {
    "voice": "en-US-wesley", 
    "text": """
        <speak>
            <prosody rate="medium" pitch="high">Here are some tips to help you start open-ended questions:</prosody>
            <break time="500ms"/>
            <prosody rate="medium" pitch="low">Instead of asking "yes" or "no" questions, start with "what", "how", or "why".</prosody>
            <break time="500ms"/>
            <prosody rate="medium" pitch="medium">Avoid leading questions that suggest a specific answer.</prosody>
            <break time="500ms"/>
            <prosody rate="medium" pitch="high">Use phrases like "Can you tell me more about..." or "What do you think about...".</prosody>
        </speak>
    """,  # Use SSML formatted text for better control
    "format": "mp3",
    "rate": 0.9,
    "volume": 0.8,
    "pitch": 1.0,
    "ssml": True  # Enable SSML processing
}

    
    try:
        response = requests.post(url, headers=headers, json=payload)
        data = response.json()
        print("MURF Response:", data)  # For debugging
        return data.get('audioUrl')  # Safe access to 'audioUrl'
    except Exception as e:
        print("Error in get_murf_audio_url:", e)
        return None

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/get', methods=['GET'])
def get_response():
    user_input = request.json.get('user_input')
    bot_reply = get_bot_reply(user_input)
    return jsonify({'response': bot_reply})




    if not audio_url:
        print("Audio URL not returned from Murf.")
    
    return jsonify({'response': bot_reply, 'audio_url': audio_url})

if __name__ == "__main__":
    app.run(debug=True)
