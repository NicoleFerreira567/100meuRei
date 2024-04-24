// Função para exibir a notificação
function showNotification(message) {
    var notification = document.getElementById('notification');
    notification.innerHTML = message;
    notification.style.display = 'block';

    // Oculta a notificação após 3 segundos
    setTimeout(function() {
        notification.style.display = 'none';
    }, 3000);
}

// Exemplo de uso: chame esta função quando desejar exibir uma notificação
showNotification('Produto adicionado ao carrinho.');
