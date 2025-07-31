let voiceEnabled = false;

function toggleChat() {
    const chat = document.getElementById("chat-window");
    if (chat.style.display == "flex" || chat.classList.contains("fade-in")){
        chat.classList.remove("fade-in");
        chat.classList.add("fade-out");
        setTimeout(() => {
            chat.style.display = "none";
        }, 300);
    } else {
        chat.style.display = "flex";
        chat.classList.remove("fade-out");
        void chat.offsetWidth;
        chat.classList.add("fade-in");
    }
}

function closeChat() {
    const chat = document.getElementById("chat-window");
    chat.classList.remove("fade-in");
    chat.classList.add("fade-out");
    setTimeout(() => {
        chat.style.display = "none";
    }, 300);
}

function appendMessage(sender, text) {
    const box = document.getElementById("chat-box");
    const msg = document.createElement("div");

    // Si es el bot, animamos el texto letra por letra
    if (sender === "Bot") {
        msg.innerHTML = `<strong>${sender}:</strong> <span class="typing"></span>`;
        box.appendChild(msg);
        box.scrollTop = box.scrollHeight;

        let i = 0;
        const typingSpan = msg.querySelector(".typing");

        const typeInterval = setInterval(() => {
            typingSpan.textContent += text.charAt(i);
            i++;
            box.scrollTop = box.scrollHeight;
            if (i >= text.length) {
                clearInterval(typeInterval);
            }
        }, 30); // velocidad de escritura (puedes ajustar)
    } else {
        // Si es el usuario, aparece de inmediato
        msg.innerHTML = `<strong>${sender}:</strong> ${text}`;
        box.appendChild(msg);
        box.scrollTop = box.scrollHeight;
    }
}

function sendMessage() {
    const input = document.getElementById("user-input");
    const message = input.value.trim();
    if (!message) return;

    appendMessage("Tú", message);

    fetch("http://127.0.0.1:5000/chat", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ message: message })
    })
    .then(res => res.json())
    .then(data => {
        appendMessage("Bot", data.reply);
        speak(data.reply);
        input.value = "";
    })
    .catch(err => {
        appendMessage("Bot", "Error al conectar con el servidor.");
    });
}

function speak(text) {
    if ('speechSynthesis' in window && voiceEnabled) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'es-ES';
        utterance.rate = 1;
        utterance.pitch = 1;
        speechSynthesis.speak(utterance);
    }
}

function toggleVoice() {
    voiceEnabled = !voiceEnabled;
    const btn = document.getElementById("toggle-voice");
    btn.textContent = voiceEnabled ? "🔊" : "🔇";
}