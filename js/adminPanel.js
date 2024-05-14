var titleInput = document.getElementById("title");
var descriptorInput = document.getElementById("descriptor");
var authNameInput = document.getElementById("authName");
var errorMessageElement = document.getElementById("errorMessage");
var errorMessageElement1 = document.getElementById("errorMessage1");
var errorMessageElement2 = document.getElementById("errorMessage2");
var titleLine = document.getElementById("title-line");

function handleTitleInput() {
  var title = titleInput.value;
  title = title.substring(0, 15);
  console.log("Title:", title);
  changeTitle(title);
  changeCardTitle(title);
}

function handleDescriptorInput() {
  var description = descriptorInput.value;
  description = description.substring(0, 40);
  console.log("Description:", description);
  changeSubTitle(description);
  changeCardSubTitle(description);
}

function handleAuthNameInput() {
  var authorName = authNameInput.value;
  authorName = authorName.substring(0, 15);
  console.log("Author name:", authorName);
  CardName(authorName);
}

titleInput.addEventListener("input", handleTitleInput);
titleInput.placeholder = "Please, enter New Post";

descriptorInput.addEventListener("input", handleDescriptorInput);
descriptorInput.placeholder = "Please, enter any description";

authNameInput.addEventListener("input", handleAuthNameInput);
authNameInput.placeholder = "Please, enter Author name";



titleInput.addEventListener("input", function () {
  // Проверка на пустое поле
  if (titleInput.value.trim() === "") {
    errorMessageElement.textContent = "Title is required.";
    titleInput.style.backgroundColor = "rgba(255, 255, 255, 1)";
    titleInput.style.borderColor = "#E86961"
  } else {
    titleInput.style.borderColor = "black"
    errorMessageElement.textContent = ""; // Очищаем сообщение об ошибке
    titleInput.style.backgroundColor = "rgba(247, 247, 247, 1)";
  }
});


descriptorInput.addEventListener("input", function () {
  // Проверка на пустое поле
  if (descriptorInput.value.trim() === "") {
    errorMessageElement1.textContent = "Description is required.";
    descriptorInput.style.backgroundColor = "rgba(255, 255, 255, 1)";
    descriptorInput.style.borderColor = "#E86961"
  } else {
    descriptorInput.style.borderColor = "black"
    errorMessageElement1.textContent = ""; // Очищаем сообщение об ошибке
    descriptorInput.style.backgroundColor = "rgba(247, 247, 247, 1)";
  }
});



authNameInput.addEventListener("input", function () {
  // Проверка на пустое поле
  if (authNameInput.value.trim() === "") {
    errorMessageElement2.textContent = "Author name is required.";
    authNameInput.style.backgroundColor = "rgba(255, 255, 255, 1)";
  } else {
    errorMessageElement2.textContent = ""; // Очищаем сообщение об ошибке
    authNameInput.style.backgroundColor = "rgba(247, 247, 247, 1)";
  }
});

// __________________________

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
      var imageData1 = reader.result; // Получаем данные изображении
      var rectangle = InputAuthorImg;

      rectangle.style.backgroundImage = "url(" + imageData1 + ")"; // Устанавливаем изображение фона
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

// ___________________________

var InputBackImg = document.getElementById("InputBackImg");
var deleteButton1 = document.getElementById("deleteButton1");
var changeButton1 = document.getElementById("changeButton1");
var config1 = document.getElementById("config1");
var editBoxBack = document.getElementById("editBoxBack");
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

// _______________________________

var InputPostImg = document.getElementById("InputPostImg");
var deleteButton2 = document.getElementById("deleteButton2");
var changeButton2 = document.getElementById("changeButton2");
var config2 = document.getElementById("config2");
var editBoxBack1 = document.getElementById("editBoxBack1");

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
      changeBackgroundSmall(imageData);
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
sampleBigTitle.textContent = "New Post";
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

function changeBackgroundSmall(img) {
  var sampleBigImage = document.getElementById("sampleSmallImage");
  sampleBigImage.style.backgroundImage = "url(" + img + ")";
}

var cardTitle = document.getElementById("cardTitle");
cardTitle.textContent = "New Post";
function changeCardTitle(text) {
  cardTitle.innerText = text;
}

var cardSubTitle = document.getElementById("cardSubTitle");
cardSubTitle.textContent = "Please, enter any description";
function changeCardSubTitle(text) {
  cardSubTitle.innerText = text;
}

var CardNameInput = document.getElementById("CardNameInput");
CardNameInput.textContent = "Enter author name";
function CardName(text) {
  CardNameInput.innerText = text;
}

function changeCardAuthor(img) {
  var CardImageInput = document.getElementById("CardImageInput");
  CardImageInput.style.backgroundImage = "url(" + img + ")";
}

document.getElementById("textareaInput").addEventListener("input", function () {
  // Получаем текст из textarea
  var text = this.value;

  // Отображаем текст в консоли (можно заменить эту строку на свой код)
  console.log("Text:", text);
});

// ___________________________

function validateInputs() {
  var title = document.getElementById("title").value.trim();
  var description = document.getElementById("descriptor").value.trim();
  var authorName = document.getElementById("authName").value.trim();
  var textarea = document.getElementById("textareaInput");
  if (title === "") {
    return "Title field is empty!";

  }

  if (description === "") {
    return "Description field is empty!";
  }

  if (authorName === "") {
    return "Author name field is empty!";
    
  }

  if (textarea.value === "") {
    return "Textarea field is empty!";
  }
  // Если все поля заполнены, вернуть null
  return null;
}

function handleInput() {
  var errorMessage = validateInputs();
  var CheckErrorContainer = document.getElementById("CheckErrorContainer");

  if (errorMessage) {
    console.error(errorMessage);
    CheckErrorContainer.innerHTML = `<div class="error-box_conteiner">
                    <div class="error-box">
                        <img src="./images/img_admin/alert-circle.svg" />
                        <p>Whoops! Some fields need your attention :o</p>
                    </div>
                </div>`;
  } else {
    // Ваша текущая логика обработки ввода
    var title = document.getElementById("title").value;
    var description = document.getElementById("descriptor").value;
    var authorName = document.getElementById("authName").value;
    var CheckErrorContainer = document.getElementById("CheckErrorContainer");
    var textarea = document.getElementById("textareaInput");

    console.log("Title:", title);
    console.log("Description:", description);
    console.log("Author name:", authorName);
    console.log("Text area:", textarea);

    CheckErrorContainer.innerHTML = `
    <div class="error-box_conteiner1">
                    <div class="error-box">
                        <img src="./images/img_admin/check-circle.svg" />
                        <p>Publish Complete!</p>
                    </div>
                </div>`;
    // Добавьте здесь вызовы ваших функций для обработки ввода
  }
}

// _______________________________

titleInput.addEventListener("input", handleTitleInput);
titleInput.placeholder = "Please, enter New Post";

var date = document.getElementById("dateAutor").value;
console.log(date); // Выведет значение выбранной даты в формате "год-месяц-день"

document.getElementById("dateAutor").addEventListener("change", function () {
  var inputDate = this.value;
  var savedDate = new Date(inputDate); // Сохраняем дату в переменную
  var day = savedDate.getDate();
  var month = savedDate.getMonth() + 1; // Месяцы начинаются с 0, поэтому добавляем 1
  var year = savedDate.getFullYear() % 100; // Получаем последние две цифры года
  var formattedDate = `${day}/${month}/${year}`;

  console.log("Selected date:", formattedDate);
  // Выводим дату в консоль
});
function saveAndDisplayDate() {
  var inputDate = document.getElementById("dateAutor").value;
  var savedDate = new Date(inputDate); // Сохраняем дату в переменную
  var day = savedDate.getDate();
  var month = savedDate.getMonth() + 1; // Месяцы начинаются с 0, поэтому добавляем 1
  var year = savedDate.getFullYear() % 100; // Получаем последние две цифры года
  // Форматируем дату в строку "DD/MM/YY"
  var formattedDate = `${day}/${month}/${year}`;

  console.log("Selected date:", formattedDate);
  CardDate(formattedDate);
}
var CardDateInput = document.getElementById("CardDateInput");
// CardDateInput.textContent("Hello");
function CardDate(text) {
  CardDateInput.innerText = text;
}
// Устанавливаем слушатель события для поля ввода даты
document.getElementById("dateAutor").addEventListener("change", function () {
  saveAndDisplayDate();
});
// Вызываем функцию при загрузке страницы
saveAndDisplayDate();
