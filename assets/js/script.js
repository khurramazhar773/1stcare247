const progressBar = document.getElementById('progressBar');
const formSteps = document.querySelectorAll('.form-step');
const nextBtns = document.querySelectorAll('.next-btn');
const backBtns = document.querySelectorAll('.back-btn');

let currentStep = 0;

// Show the initial step
formSteps[currentStep].classList.add('active');

// Function to go to the next step
nextBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    if (currentStep < formSteps.length - 1) {
      formSteps[currentStep].classList.remove('active');
      currentStep++;
      formSteps[currentStep].classList.add('active');
      updateProgressBar();
    }
  });
});

// Function to go to the previous step
backBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    if (currentStep > 0) {
      formSteps[currentStep].classList.remove('active');
      currentStep--;
      formSteps[currentStep].classList.add('active');
      updateProgressBar();
    }
  });
});

// Update the progress bar based on the current step
function updateProgressBar() {
  const progressPercent = ((currentStep + 1) / formSteps.length) * 100;
  progressBar.style.width = progressPercent + '%';
}

document.getElementById('image-upload').addEventListener('change', function (event) {
  const imageContainer = document.getElementById('imageContainer');
  imageContainer.innerHTML = ''; // Clear any previous images

  const files = event.target.files;
  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const reader = new FileReader();
    reader.onload = function (e) {
      const imgElement = document.createElement('img');
      imgElement.src = e.target.result;
      imgElement.style.width = '200px';
      imgElement.style.height = '200px';
      imgElement.style.objectFit = 'cover';
      imgElement.style.marginRight = '10px';
      imgElement.style.marginTop = '20px';
      imgElement.style.marginBottom = '10px';
      imageContainer.appendChild(imgElement);
    };
    reader.readAsDataURL(file);
  }
});
