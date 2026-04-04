const namaInput = document.getElementById('name');
const nameValue = document.getElementById('nameValue');
const saveBtn = document.querySelector('.svBtn');
const temaBtn = document.querySelector('.temaBtn');
const temaCard = document.querySelector('.studentCard');

saveBtn.addEventListener('click', () => {
    event
    if (namaInput.value === ''){
        nameValue.textContent = '-';
        alert('Please enter your name');
    } else {
        nameValue.textContent = namaInput.value;
    }
});

temaBtn.addEventListener('click', () => {
    temaCard.classList.toggle('dark');
});