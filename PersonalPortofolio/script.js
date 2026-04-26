const pw = document.getElementById('password');
const nama = document.getElementById('nama');
const sub = document.querySelector('.submitBtn');

sub.addEventListener('click', (event) => {
    event.preventDefault();

    if (!/[A-Z]/.test(nama.value) || !/[a-z]/.test(nama.value)) {
        alert('Nama harus mengandung huruf besar dan kecil');
        return;
    }

    if (pw.value.length < 8) {
        alert('Password harus terdiri dari minimal 8 karakter');
        return;
    }

    if (!/[A-Z]/.test(pw.value) || !/[a-z]/.test(pw.value) || !/[0-9]/.test(pw.value)) {
        alert('Password harus mengandung huruf besar, huruf kecil, dan angka');
        return;
    }

    document.querySelector('.form').submit();
});