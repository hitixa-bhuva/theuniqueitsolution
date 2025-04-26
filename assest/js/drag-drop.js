// Element references
let dropArea = document.getElementById('drop-area');
let fileInput = document.getElementById('file-upload');
let uploadPrompt = document.getElementById('upload-prompt');
let filePreview = document.getElementById('file-preview');
let fileNameText = document.getElementById('file-name-text');
let fileSizeText = document.getElementById('file-size-text');
let removeFileBtn = document.getElementById('remove-file');

// Format file size
function formatFileSize(size) {
  const kb = size / 1024;
  if (kb > 1024) {
    return (kb / 1024).toFixed(2) + ' MB';
  } else {
    return kb.toFixed(2) + ' KB';
  }
}

// Show selected file
function showFile(file) {
  uploadPrompt.classList.add('hidden');
  filePreview.classList.remove('hidden');

  if (fileNameText && fileSizeText) {
    fileNameText.textContent = file.name;
    fileSizeText.textContent = formatFileSize(file.size);
  }
}

// Create new file input
function createNewFileInput() {
  // Remove old input if exists
  if (fileInput) {
    fileInput.remove();
  }

  const newInput = document.createElement('input');
  newInput.type = 'file';
  newInput.accept = '.doc,.pdf,.xls,.txt';
  newInput.id = 'file-upload';
  newInput.required = true;
  newInput.hidden = true;

  dropArea.appendChild(newInput);
  fileInput = newInput;

  // Bind event for new input
  fileInput.addEventListener('change', () => {
    if (fileInput.files.length) {
      showFile(fileInput.files[0]);
    }
  });

  // Update file name and size references (in case needed)
  fileNameText = document.getElementById('file-name-text');
  fileSizeText = document.getElementById('file-size-text');
}

// Remove file and reset
function removeFile() {
  fileInput.remove();
  createNewFileInput();
  filePreview.classList.add('hidden');
  uploadPrompt.classList.remove('hidden');
}

// Drag and Drop Events
['dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, (e) => {
    e.preventDefault();
    dropArea.classList.toggle('highlight', eventName === 'dragover');

    if (eventName === 'drop' && e.dataTransfer.files.length) {
      fileInput.files = e.dataTransfer.files;
      showFile(fileInput.files[0]);
    }
  });
});

// Click on drop area to open file picker
dropArea.addEventListener('click', () => {
  fileInput.click();
});

// Initial file input change event
fileInput.addEventListener('change', () => {
  if (fileInput.files.length) {
    showFile(fileInput.files[0]);
  }
});

// Remove file button click
removeFileBtn.addEventListener('click', (e) => {
  e.stopPropagation();
  removeFile();
});