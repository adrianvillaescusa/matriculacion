const chatbox = document.getElementById('chatbox');
const inputBox = document.getElementById('inputBox');

function sendQuestion() {
    const question = inputBox.value;
    inputBox.value = '';

    // Agrega la pregunta al chatbox
    appendMessage('Usuario: ' + question);

    // Encuentra la respuesta adecuada
    const answer = getAnswer(question);

    // Agrega la respuesta al chatbox
    appendMessage('Chatbot: ' + answer);
}

function appendMessage(message) {
    const messageNode = document.createElement('p');
    messageNode.textContent = message;
    chatbox.appendChild(messageNode);
}

function getAnswer(question) {
    const faq = {
        'horario': 'Nuestro horario de atención es de lunes a viernes de 9:00 a.m. a 5:00 p.m.',
        'ubicacion': 'Estamos ubicados en la Calle Principal, Ciudad X.',
        'contacto': 'Puedes contactarnos llamando al 123456789 o enviando un correo electrónico a info@ejemplo.com.',
        'matriculacion': 'Para hacer la matriculación haga click en la palabra Matriculación de arriba derecha.',
        'matricula': 'Para hacer la matriculación haga click en la palabra Matriculación de arriba derecha.'
        
    };

// Busca la pregunta en el objeto faq y devuelve la respuesta correspondiente si existe.
    for (const keyword in faq) {
        if (question.toLowerCase().includes(keyword)) {
            return faq[keyword];
        }
    } return 'Lo siento, no puedo responder esa pregunta en este momento. Por favor, intenta otra pregunta.';
}