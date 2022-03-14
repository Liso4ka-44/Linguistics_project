<?php include "connect.php";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js" type="text/javascript"></script>
    <script src="../js/add.js" type="text/javascript"></script>
    <title>Добавление</title>
</head>

<body>
    <?php
    include "navigation.php";
    ?>
    <main class="main">
        <div class="container">
            <div class="main__body">
                <div class="main__nav">
                    <div class="nav__body">
                        <a href="#information__announcement" class=" main__nav__item">Сведения об анонсе</a>
                        <a href="#KeysDate">Важные даты</a>
                        <a href="#programs">Программки</a>
                    </div>
                </div>
                <div class="main__content">
                <form action="add_edit\anons_add.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="KeysDate" id="KeysDate">
                        <h2 class="top__heading">Дата конференции</h2>
                        <div class="dateConf">
                            <div class="date__editing label_center">
                                <label>
                                    От
                                    <input type="date" name="date_from" required="required" data-error="Заполните">
                                </label>

                                <label>
                                    До
                                    <input type="date" name="date_to" required="required" data-error="Заполните">
                                </label>

                            </div>

                        </div>
                        <p class="warning">если дата не является промежутком,
                            продублируйте её в обе формы
                        </p>
                    </div>
                    
                        <div class="information__announcement" id="information__announcement">
                            <h2>Сведения об анонсе</h2>
                            <div class="main__introductionAnnouncement">
                                <div class="introductionRu">
                                    <h4 class="ruText">Вступление анонса</h4><textarea name="intro_ru" required="required" data-error="Заполните"></textarea>
                                </div>
                                <div class="introductionEn">
                                    <h4 class="enText">Introduction</h4><textarea name="intro_en"></textarea>
                                </div>
                            </div>
                            <div class="editor__list">
                                <div class="editor1">
                                    <h4 class="ruText">Информация о конференции</h4><textarea name="anons_info_ru" class="edit" id="editor0"></textarea>
                                </div>
                                <div class="editor2">
                                    <h4 class="enText">Conference information</h4><textarea name="anons_info_en" class="edit" id="editor1"></textarea>
                                </div>
                                <div class="editor3">
                                    <h4 class="ruText">Концепция конференции</h4><textarea name="concept_ru" class="edit" id="editor2"></textarea>
                                </div>
                                <div class="editor4">
                                    <h4 class="enText">Conference conception</h4><textarea name="concept_en" class="edit" id="editor3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="programs" id="programs">
                            <h2>Программки,информационные письма</h2>
                            <div class="program">
                                <div class="programm__item">
                                    <h3>Документ 1</h3>
                                    <div class="description">
                                        <label class="ruText">
                                            Файл
                                            <input type="file" name="playbill_ru">
                                        </label>
                                        <label class="ruText">
                                            Название
                                            <textarea name="name_ru" class="programText"></textarea>
                                        </label>
                                    </div>
                                    <div class="description">
                                        <label class="enText">
                                            File
                                            <input type="file" name="playbill_en">
                                        </label>
                                        <label class="enText">
                                            Name
                                            <textarea name="name_en" class="programText"></textarea>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="addAdditionalDates">
                                <a href="#" class="programm__add">
                                    <img src="../img/icon/add.svg">
                                </a>
                            </div>
                        </div>
                        <button type="submit" class="main__button">Добавить конференцию</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>