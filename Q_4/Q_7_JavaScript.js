
function updateTime() {
  const today = new Date();
  const options = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: false};
  const formattedDate = today.toLocaleString('en-US', options);
  document.getElementById("current-date").textContent = formattedDate;
}

setInterval(updateTime, 1000);

function validateForm1(event) {
    const pet = document.querySelector('input[name="pet"]:checked');
    const breed = document.querySelector('#breed');
    const gender = document.querySelector('input[name="gender"]:checked');
    const ageCategory = document.querySelector('#agecategory');
    
    if (!pet || breed.value === 'nothing' || !gender || ageCategory.value === 'select') {
      event.preventDefault();
      alert('Please fill out all fields.');
    }
  }

function validateForm2(event) {
    const pet = document.querySelector('input[name="pet"]:checked');
    const breed = document.getElementById('breed').value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const agecategory = document.getElementById('agecategory').value;
    const along = document.querySelectorAll('input[name="along"]:checked');
    const comment = document.getElementById('comment').value;
    const firstname = document.getElementById('firstname').value;
    const familyname = document.getElementById('familyname').value;
    const email = document.getElementById('email').value;
  
  
    if (!pet || breed === 'nothing' || !gender || agecategory === 'select' || along.length === 0 || comment === '' || firstname === '' || familyname === '' || email === '') {
        event.preventDefault();
        alert('Please fill out all fields.');
    }
  
    const emailValidate = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailValidate.test(email)) {
      alert('Please enter a valid email address.');
    }

  }
  

  