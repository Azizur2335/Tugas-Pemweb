const namaInput = document.getElementById('name');
const nimInput = document.getElementById('nim');
const nameValue = document.getElementById('nameValue');
const saveBtn = document.querySelector('.svBtn');
const temaBtn = document.querySelector('.temaBtn');
const temaCard = document.querySelector('.studentCard');

saveBtn.addEventListener('click', () => {
    event.preventDefault();
    if (namaInput.value === '' || nimInput.value === '') {
        nameValue.textContent = '-';
        nimValue.textContent = '-';
        alert('Please enter both your name and NIM');
    } else if (nimInput.value.substring(0, 4) !== 'F1D0' || nimInput.value.length < 10 || nimInput.value.length > 11) {
        nimValue.textContent = '-';
        alert('NIM harus mulai dengan F1D0 dan terdiri dari 10 - 11 karakter');
    } else {
        nameValue.textContent = namaInput.value;
        nimValue.textContent = nimInput.value;
    }
});

temaBtn.addEventListener('click', () => {
    temaCard.classList.toggle('dark');
}); 