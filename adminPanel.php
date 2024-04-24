<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/adminPanel.css">
    <link rel="preconnect" href="http://fonts.googleapis.com">
    <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
    <link href="http://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <script src="./js/adminPanel.js" defer></script>
</head>

<body>
    <header>
        <div class="header-conteiner">
            <div>
                <img src="./images/img_admin/EscapeAuthor.svg" alt="EscapeAuthor" />
            </div>
            <div class="header-menu">
                <div class="admin-avatar">
                    <span class="admin-avatar-symb">N</span>
                </div>
                <div class="admin-menu-exit">
                    <img src="./images/img_admin/exitIcon.svg" alt="exitIcon" class="exit-icon" />
                </div>
            </div>
        </div>
    </header>
    <div>
        <div class="admin-conteiner">
            <div class="newpost-wrapper">
                <div class="newpost-wrapper_text">
                    <span class="newpost_title H1">
                        <span>New Post</span>
                    </span>
                    <span class="newpost_subtitle DescritpionSmall">
                        <span>Fill out the form bellow and publish your
                            article</span>
                    </span>
                </div>
                <button class="newpost-button">
                    <span class="newpost-button_title Body">
                        <span>Publish</span>
                    </span>
                </button>
            </div>
            <div class="admin-cards">
                <div class="admin-main-information">
                    <div class="main-information-title H2">
                        <span>Main Information</span>
                    </div>
                    <div class="admin-form-wrapper">
                        <div class="admin-form1">

                            <div class="input-title">
                                <div class="input-title_text">
                                    <p>Title</p>
                                </div>
                                <div class="input_field">
                                    <input class="field_text" id="title">
                                </div>
                            </div>

                            <div class="input-title">
                                <div class="input-title_text">
                                    <p>Short description</p>
                                </div>
                                <div class="input_field">
                                    <input class="field_text" id="descriptor">
                                </div>
                            </div>

                            <div class="input-author-name">
                                <div class="input-title_text">
                                    <p>Author name</p>
                                </div>
                                <div class="input-field2">
                                    <input class="field_text" id="authName">
                                </div>
                                <p></p>
                            </div>

                            <div class="input-upload-conteiner">
                                <div class="input-title_text">
                                    <p>Author Photo </p>
                                </div>
                                <div class="input-upload">
                                    <button class="input-upload_icon" id="InputAuthorImg">
                                        <img src="./images/img_admin/InputUploadIcon.svg" alt="InputUploadIcon" class="input-icon1" />
                                    </button>
                                    <div class="input-upload-button_text">
                                        <p>Upload</p>
                                    </div>
                                </div>
                            </div>

                            <div class="input-date">
                                <div class="input-title_text">
                                    <p>Publish Date</p>
                                </div>
                                <input type="date" class="input_field" value="" id="datep">
                            </div>

                            <div class="input-image">
                                <div class="input-title_text">
                                    <p>Hero Image </p>
                                </div>
                                <div class="input-image-upload">
                                    <button class="input-image_icon">
                                        <div class="input-image_button">
                                            <img src="./images/img_admin/InputUploadIcon.svg" alt="InputUploadIcon" class="input-icon1" />
                                            <div class="input-upload-button_text">
                                                <p>Upload</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="input-image-config">
                                        <div class="input-title_text">
                                            <p>Size up to 10mb. Format: png, jpeg, gif.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="input-image-small">
                                <div class="input-title_text">
                                    <p>Hero Image</p>
                                </div>
                                <div class="input-image-small-upload">
                                    <div class="input-image-small_icon">
                                        <button class="input-image-small_button">
                                            <img src="./images/img_admin/InputUploadIcon.svg" alt="InputUploadIcon" class="input-icon1" />
                                            <div class="input-upload-button_text">
                                                <p>Upload</p>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="input-image-config">
                                        <div class="input-title_text">
                                            <p>Size up to 5mb. Format: png, jpeg, gif.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="admin-form2">
                            <div class="form-preview">
                                <div class="form-preview_text">
                                    <p>Article preview</p>
                                </div>
                                <div class="page-preview-wrapper">
                                    <div class="page-preview">
                                        <div class="admin-dots">
                                            <img src="./images/img_admin/dot.png" alt="." class="admin-dot1" />
                                            <img src="./images/img_admin/dot.png" alt="." class="admin-dot2" />
                                            <img src="./images/img_admin/dot.png" alt="." class="admin-dot3" />
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="card-preview">
                                <div class="form-preview_text">
                                    <p>Post card preview</p>
                                </div>
                                <div class="card-preview-wrapper">
                                    <div class="card-preview-conteiner">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="admin-content">
                    <div class="admin-content_text">
                        <p>Content</p>
                    </div>
                    <div class="admin-content-wrapper">
                        <div class="input-title_text">
                            <p>Post content (plain text)</p>
                        </div>
                        <div class="input-block">
                            <div class="input-block_text">
                                <p>Type anything you want ...</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>