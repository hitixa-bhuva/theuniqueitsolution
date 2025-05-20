
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('.needs-validation');
  const fileInput = document.getElementById('file-upload');
  const phoneInput = document.getElementById('phone');

  form.addEventListener('submit', (event) => {
    event.preventDefault(); // Stop page refresh

    if (validateForm()) {
      console.log('Form submitted successfully!');
      // form.submit(); // Uncomment this if you want actual submit
    }
  });

  function validateForm() {
    let isValid = true;

    // Validate all inputs and textareas
    form.querySelectorAll('input, textarea').forEach((input) => {
      if (!input.checkValidity()) {
        input.classList.add('is-invalid');
        isValid = false;
      } else {
        input.classList.remove('is-invalid');
      }
    });

    // Validate file input (required + max size + allowed types)
    if (!validateFile()) {
      isValid = false;
    }

    // Validate phone number minimum digits
    if (phoneInput && phoneInput.value.length < 8) {
      phoneInput.classList.add('is-invalid');
      isValid = false;
    } else {
      phoneInput.classList.remove('is-invalid');
    }

    return isValid;
  }

  function validateFile() {
    if (!fileInput || fileInput.files.length === 0) {
      fileInput.classList.add('is-invalid');
      return false;
    } else {
      const file = fileInput.files[0];
      const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.ms-excel', 'text/plain'];
      const maxSize = 4 * 1024 * 1024; // 4MB

      if (file.size > maxSize) {
        alert('File size must be less than 4MB.');
        fileInput.classList.add('is-invalid');
        return false;
      }

      if (!allowedTypes.includes(file.type)) {
        alert('Invalid file type. Only PDF, DOC, XLS, TXT allowed.');
        fileInput.classList.add('is-invalid');
        return false;
      }

      fileInput.classList.remove('is-invalid');
      return true;
    }
  }
});