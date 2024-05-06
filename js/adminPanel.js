var titleInput = document.getElementById("title");
var descriptorInput = document.getElementById("descriptor");
var authNameInput = document.getElementById("authName");
var errorMessageElement = document.getElementById("errorMessage");
var titleLine = document.getElementById("title-line");
var InputAuthorImg = document.getElementById("InputAuthorImg");
var uploadButton = document.getElementById("uploadButton");
var deleteButton = document.getElementById("deleteButton");
var changeButton = document.getElementById("changeButton");

function handleTitleInput() {
  var title = titleInput.value;
  console.log("Title:", title);
}

function handleDescriptorInput() {
  var description = descriptorInput.value;
  console.log("Short description:", description);
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
});

changeButton.addEventListener("click", function () {
  // Сбросить значение файла
  document.getElementById("fileInput").value = "";
  // Триггер клика на input file
  document.getElementById("fileInput").click();
});
