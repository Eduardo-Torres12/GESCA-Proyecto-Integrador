const chatBtn = document.getElementById('chatBtn');
const chatBox = document.getElementById('chatBox');
const sendMessage = document.getElementById('sendMessage');
const chatBody = document.getElementById('chatBody');

chatBtn.addEventListener('click', () => {

    chatBox.classList.toggle('show');

});

sendMessage.addEventListener('click', () => {

    const input = document.getElementById('userMessage');

    if(input.value === ''){
        return;
    }

    const div = document.createElement('div');

    div.classList.add('message', 'user');

    div.textContent = input.value;

    chatBody.appendChild(div);

    setTimeout(() => {

        const bot = document.createElement('div');

        bot.classList.add('message', 'bot');

        bot.textContent = 'Gracias por comunicarte con MediCare.';

        chatBody.appendChild(bot);

    }, 1000);

    input.value = '';

});