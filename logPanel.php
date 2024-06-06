<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/logPanel.css">
    <link rel="preconnect" href="http://fonts.googleapis.com">
    <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
    <link href="http://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="../js/logPanel.js" defer></script>
    <title>Document</title>
</head>

<body>
    <div class="main-back">
        <div class="header-conteiner">
            <div class="title-conteiner">
                <div class="title-text">
                    <img src="./images/img_log/EscapeAuthor.svg" alt="Escape" />
                </div>
            </div>
            <div class="subtitle-conteiner">
                <p>Log in to start creating</p>
            </div>
        </div>
        <div class="log-conteiner">
            <div class="log-in-title">
                <p>Log In</p>
            </div>
            <div class="error-box_emptyError">
                <div class="error-box">
                    <img src="./images/img_admin/alert-circle.svg" />
                    <p>Email or password is incorrect.</p>
                </div>
            </div>
            <div class="error-box_incorrectData">
                <div class="error-box">
                    <img src="./images/img_admin/alert-circle.svg" />
                    <p>A-Ah! Check all fields,</p>
                </div>
            </div>
            <div class="log-in-conteiner">
                <div class="log-in-input">
                    <div class="input-title">
                        <p>Email</p>
                    </div>
                    <input class="input-block_email" />
                    <div class="errorMessage_EmailEmpty">Email is required.</div>
                    <div class="errorMessage_IncorrectFormatEmail">Incorrect email format. Correct format is ****@**.***</div>
                </div>
                <div class="log-in-input">
                    <div class="input-title">
                        <p>Password</p>
                    </div>
                    <div class="input-block">
                        <img src="./images/img_log/icon-eye.svg" alt="icon-eye" class="icon-eye" />
                        <input class="input-block_password" />
                    </div>
                    <div class="errorMessage_Password">Password is required.</div>
                </div>
                <button class="log-in-button">
                    <p>Log In</p>
                </button>
            </div>
        </div>
    </div>
</body>

</html>