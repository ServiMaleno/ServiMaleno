from flask import Flask, request, jsonify
from flask_cors import CORS

app = Flask(__name__)
CORS(app)

def chatbot_response(user_input):
    user_input = user_input.lower()

    if any(word in user_input for word in ["hola", "buenos días", "buenas tardes", "buenas noches", "qué tal", "cómo estás"]):
        return "¡Hola! Bienvenido a ServiMaleño. ¿En qué puedo ayudarte hoy?"
    elif "servicio" in user_input or "ofrecen" in user_input:
        return ("Ofrecemos:\n"
                "- Instalación de repetidores WiFi\n"
                "- Instalación de TV Box Android\n"
                "- Desarrollo de software personalizado\n"
                "- Soporte y mantenimiento de computadoras\n")
    elif "reparación" in user_input or "computadora" in user_input or "pc" in user_input:
        return ("Reparamos computadoras y laptops de todas las marcas. "
                "Ofrecemos diagnóstico gratuito y presupuestos sin compromiso.")
    elif "web" in user_input or "página" in user_input or "sitio" in user_input:
        return ("Creamos y diseñamos páginas web a medida. "
                "¿Tienes alguna idea en mente o necesitas ayuda para definirla?")
    elif "app" in user_input or "aplicación" in user_input:
        return ("Desarrollamos aplicaciones móviles y de escritorio. "
                "¿Qué tipo de aplicación necesitas? ¿Para qué plataforma?")
    elif "soporte" in user_input or "mantenimiento" in user_input:
        return ("Ofrecemos soporte técnico y mantenimiento preventivo y correctivo para computadoras. "
                "¿Tienes algún problema específico o necesitas un servicio regular?")
    elif "desarrollo" in user_input or "software" in user_input:
        return ("Desarrollamos sistemas a tu medida. Cuéntame qué tipo de sistema necesitas: "
                "punto de venta, reservas, control académico, etc.")
    elif "repetidor" in user_input or "wifi" in user_input:
        return ("Instalamos repetidores WiFi para mejorar la cobertura en tu hogar u oficina. "
                "Incluye asesoría técnica y configuración completa.")
    elif "tv box" in user_input or "android" in user_input:
        return ("Vendemos e instalamos TV Box Android con apps configuradas para series, películas y canales en vivo.")
    elif "asesor" in user_input or "consultor" in user_input:
        return ("Contamos con asesores expertos para ayudarte a definir tus necesidades tecnológicas.")
    elif "gracias" in user_input:
        return "¡Con gusto! Si necesitas más información, estaré aquí."
    else:
        return "No entendí bien tu mensaje. ¿Puedes explicarme un poco más?"

@app.route("/chat", methods=["POST"])
def chat():
    data = request.get_json()
    user_input = data.get("message", "")
    response = chatbot_response(user_input)
    return jsonify({"reply": response})

if __name__ == "__main__":
    app.run(debug=True)