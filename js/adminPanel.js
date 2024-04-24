var titleInput = document.getElementById('title');
var descriptorInput = document.getElementById('descriptor');
var authNameInput = document.getElementById('authName');

function handleTitleInput() {
    var title = titleInput.value;
    console.log('Title:', title);
}

function handleDescriptorInput() {
    var description = descriptorInput.value;
    console.log('Short description:', description);
}

function handleAuthNameInput() {
    var authorName = authNameInput.value;
    console.log('Author name:', authorName);
}

titleInput.addEventListener('input', handleTitleInput);
titleInput.placeholder = "Please, enter New Post";

descriptorInput.addEventListener('input', handleDescriptorInput);
descriptorInput.placeholder = "Please, enter any description";

authNameInput.addEventListener('input', handleAuthNameInput);
authNameInput.placeholder = "Please, enter Author name";



document.querySelector('.input_field').addEventListener('change', (e) =>
{
  document.querySelector('.time span').innerText = e.target.value;
}); 

document.addEventListener('DOMContentLoaded', function() {
    var fileInput = document.getElementById('fileInput');
    var uploadButton = document.getElementById('uploadButton');

    uploadButton.addEventListener('click', function() {
        fileInput.click();
    });

    fileInput.addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(event) {
                var imgElement = document.getElementById('previewImage');
                imgElement.src = event.target.result;
                document.querySelector('.image-preview').style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
});
