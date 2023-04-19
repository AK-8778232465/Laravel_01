<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('bi-eye');
    });
</script>
<?php /**PATH D:\Laravel\Laravel_01\dream-dev\resources\views/partials/loginHelper.blade.php ENDPATH**/ ?>