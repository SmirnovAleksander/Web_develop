var titleInput = document.getElementById("title");
var descriptorInput = document.getElementById("descriptor");
var authNameInput = document.getElementById("authName");
var errorMessageElement = document.getElementById("errorMessage");
var titleLine = document.getElementById("title-line");

function handleTitleInput() {
  var title = titleInput.value;
  title = title.substring(0, 15);
  console.log("Title is too long. Trimmed to 15 characters.");
  console.log("Title:", title);
  changeTitle(title);
}

function handleDescriptorInput() {
  var description = descriptorInput.value;
  description = description.substring(0, 40);
  console.log("Subtitle is too long. Trimmed to 40 characters.");
  console.log("Description:", description);
  changeSubTitle(description);
}

function handleAuthNameInput() {
  var authorName = authNameInput.value;
  console.log("Author name:", authorName);
}

titleInput.addEventListener("input", handleTitleInput);
titleInput.placeholder = "Please, enter New Post";

descriptorInput.addEventListener("input", handleDescriptorInput);
descriptorInput.placeholder = "Please, enter any description";

authNameInput.addEventListener("input", handleAuthNameInput);
authNameInput.placeholder = "Please, enter Author name";

authNameInput.addEventListener("input", function () {
  // Проверка на пустое поле
  if (authNameInput.value.trim() === "") {
    errorMessageElement.textContent = "Author name is required.";
    titleLine.style.backgroundColor = "#E86961";
    authNameInput.style.backgroundColor = "rgba(255, 255, 255, 1)";
  } else {
    errorMessageElement.textContent = ""; // Очищаем сообщение об ошибке
    titleLine.style.backgroundColor = "#bdbdbd";
    authNameInput.style.backgroundColor = "rgba(247, 247, 247, 1)";
  }
});

var InputAuthorImg = document.getElementById("InputAuthorImg");
var uploadButton = document.getElementById("uploadButton");
var deleteButton = document.getElementById("deleteButton");
var changeButton = document.getElementById("changeButton");

InputAuthorImg.addEventListener("click", function () {
  document.getElementById("fileInput").click(); // Кликаем на скрытый input для выбора файла
});

document
  .getElementById("fileInput")
  .addEventListener("change", function (event) {
    var file = event.target.files[0]; // Получаем выбранный файл

    var reader = new FileReader(); // Создаем объект FileReader

    reader.onload = function () {
      var imageData = reader.result; // Получаем данные изображении

      var rectangle = InputAuthorImg;

      rectangle.style.backgroundImage = "url(" + imageData + ")"; // Устанавливаем изображение фона

      rectangle.innerHTML = "";
      rectangle.style.borderStyle = "none";
      uploadButton.innerHTML = "";
      deleteButton.style.display = "inline";
      changeButton.style.display = "inline";
      deleteButton.style.display = "flex";
      changeButton.style.display = "flex";
    };

    reader.readAsDataURL(file); // Читаем выбранный файл как data URL
  });

deleteButton.addEventListener("click", function () {
  // Удаление фонового изображения
  InputAuthorImg.style.backgroundImage = "";
  // Показать тег <img> снова
  InputAuthorImg.innerHTML =
    '<img src="./images/img_admin/InputUploadIcon.svg" alt="InputUploadIcon" class="input-icon1" />';
  // Скрыть кнопки
  deleteButton.style.display = "none";
  changeButton.style.display = "none";
  uploadButton.innerHTML = "<p>Upload</p>";
  InputAuthorImg.style.borderStyle = "dashed";
});

changeButton.addEventListener("click", function () {
  // Сбросить значение файла
  document.getElementById("fileInput").value = "";
  // Триггер клика на input file
  document.getElementById("fileInput").click();
});




var InputBackImg = document.getElementById("InputBackImg");
var deleteButton1 = document.getElementById("deleteButton1");
var changeButton1 = document.getElementById("changeButton1");
var config1 = document.getElementById("config1");

InputBackImg.addEventListener("click", function () {
  document.getElementById("fileInputBack").click(); // Кликаем на скрытый input для выбора файла
});

document
  .getElementById("fileInputBack")
  .addEventListener("change", function (event) {
    var file = event.target.files[0]; // Получаем выбранный файл

    var reader = new FileReader(); // Создаем объект FileReader

    reader.onload = function () {
      var imageData = reader.result; // Получаем данные изображении

      var rectangle = InputBackImg;

      rectangle.style.backgroundImage = "url(" + imageData + ")"; // Устанавливаем изображение фона
      changeBackground(imageData);
      rectangle.innerHTML = "";
      rectangle.style.borderStyle = "none";
      deleteButton1.style.display = "inline";
      changeButton1.style.display = "inline";
      deleteButton1.style.display = "flex";
      changeButton1.style.display = "flex";
      config1.innerHTML = "";
    };

    reader.readAsDataURL(file); // Читаем выбранный файл как data URL
  });

deleteButton1.addEventListener("click", function () {
  // Удаление фонового изображения
  InputBackImg.style.backgroundImage = "";
  // Показать тег <img> снова
  InputBackImg.innerHTML = `
    <div class="input-image_button">
        <img src="./images/img_admin/InputUploadIcon.svg" alt="InputUploadIcon" class="input-icon1" />
        <div class="input-upload-button_text">
            <p>Upload</p>
        </div>
    </div>`;
  // Скрыть кнопки
  deleteButton1.style.display = "none";
  changeButton1.style.display = "none";
  InputBackImg.style.borderStyle = "dashed";
  config1.innerHTML = `<div class="input-image-config" id="config1">
  <div class="input-title_text">
      <p>Size up to 10mb. Format: png, jpeg, gif.</p>
  </div>
</div>`;
});

changeButton1.addEventListener("click", function () {
  // Сбросить значение файла
  document.getElementById("fileInputBack").value = "";
  // Триггер клика на input file
  document.getElementById("fileInputBack").click();
});




var InputPostImg = document.getElementById("InputPostImg");
var deleteButton2 = document.getElementById("deleteButton2");
var changeButton2 = document.getElementById("changeButton2");
var config2 = document.getElementById("config2");

InputPostImg.addEventListener("click", function () {
  document.getElementById("fileInputPost").click(); // Кликаем на скрытый input для выбора файла
});

document
  .getElementById("fileInputPost")
  .addEventListener("change", function (event) {
    var file = event.target.files[0]; // Получаем выбранный файл

    var reader = new FileReader(); // Создаем объект FileReader

    reader.onload = function () {
      var imageData = reader.result; // Получаем данные изображении

      var rectangle = InputPostImg;

      rectangle.style.backgroundImage = "url(" + imageData + ")"; // Устанавливаем изображение фона

      rectangle.innerHTML = "";
      rectangle.style.borderStyle = "none";
      deleteButton2.style.display = "inline";
      changeButton2.style.display = "inline";
      deleteButton2.style.display = "flex";
      changeButton2.style.display = "flex";
      config2.innerHTML = "";
    };

    reader.readAsDataURL(file); // Читаем выбранный файл как data URL
  });

deleteButton2.addEventListener("click", function () {
  // Удаление фонового изображения
  InputPostImg.style.backgroundImage = "";
  // Показать тег <img> снова
  InputPostImg.innerHTML = `
  <div class="input-image_button2">
  <img src="./images/img_admin/InputUploadIcon.svg" alt="InputUploadIcon" class="input-icon1" />
  <div class="input-upload-button_text">
      <p>Upload</p>
  </div>
</div>`;

  // Скрыть кнопки
  deleteButton2.style.display = "none";
  changeButton2.style.display = "none";
  InputPostImg.style.borderStyle = "dashed";
  config2.innerHTML = `<div class="input-image-config" id="config2">
  <div class="input-title_text">
      <p>Size up to 10mb. Format: png, jpeg, gif.</p>
  </div>
</div>`;
});

changeButton2.addEventListener("click", function () {
  // Сбросить значение файла
  document.getElementById("fileInputPost").value = "";
  // Триггер клика на input file
  document.getElementById("fileInputPost").click();
});


var sampleBigTitle = document.getElementById("sampleBigTitle");
sampleBigTitle.textContent = "New Title";
function changeTitle(text) {
    sampleBigTitle.innerText = text;
}

var sampleBigSubTitle = document.getElementById("sampleBigSubTitle");
sampleBigSubTitle.textContent = "Please, enter any description";
function changeSubTitle(text) {
    sampleBigSubTitle.innerText = text;
}

function changeBackground(img) {
    var sampleBigImage = document.getElementById("sampleBigImage");
    sampleBigImage.style.backgroundImage = "url(" + img + ")";
}