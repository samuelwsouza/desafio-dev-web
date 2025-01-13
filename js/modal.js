document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('editarModal');
    const closeModal = document.querySelector('.close');
    const form = document.getElementById('editarForm');

    // biome-ignore lint/complexity/noForEach: <explanation>
        document.querySelectorAll('.editar-btn').forEach(button => {
        button.addEventListener('click', () => {
            document.getElementById('editarId').value = button.getAttribute('data-id');
            document.getElementById('editarNome').value = button.getAttribute('data-nome');
            document.getElementById('editarEmail').value = button.getAttribute('data-email');
            modal.style.display = 'block';
        });
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // fecha modal ao clicar fora do range
    window.addEventListener('click', event => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    form.addEventListener('submit', e => {
        e.preventDefault();
        const formData = new FormData(form);
        fetch('actions/editar.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                location.reload();
            })
            .catch(error => console.error('Erro:', error));
    });

    // biome-ignore lint/complexity/noForEach: <explanation>
        document.querySelectorAll('.excluir-btn').forEach(button => {
        button.addEventListener('click', () => {
            if (confirm('Tem certeza que deseja excluir este usuário?')) {
                const userId = button.getAttribute('data-id');
                fetch(`actions/excluir.php?id=${userId}`, {
                        method: 'GET',
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload(); 
                    })
                    .catch(error => console.error('Erro:', error));
            }
        });
    });
});
