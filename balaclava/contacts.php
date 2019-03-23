<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Балаклава</title>
</head>

<body>

  <?php include 'navbar.php' ?>
  <div class="contacts">
    <div class="container">
      <div class="contacts-block">
        <h2 class="contacts__title title">Контакты</h2>
        <!-- /.contacts__title title -->
        <p class="description contacts__discription">Lorem Ipsum - это текст-"рыба", часто используемый в печати и
          вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время
          некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для
          распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул
          в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem
          Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах
          которых используется Lorem Ipsum.</p>
        <!-- /.description contacts__discription -->
      </div>
      <!-- /.contacts-block -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.contacts -->

  <div class="map">
    <div class="google-map">
     <iframe class="google-map"
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108200.60466928496!2d33.54765274300516!3d44.5499956693772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDM1JzE3LjUiTiAzM8KwNDAnNTMuMCJF!5e0!3m2!1sru!2sru!4v1553286888028"
          style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
      <div class="map-block">
        <div class="map-block__text">
          <span class="map__address">Россия, Крым, г. Балаклава <br>
            “Гостевой дом с орлами”</span>
          <div class="map__info">
            <img src="img/contacts/clock.png" alt="clock">
            <span>Пн.-СБ.: 09:00–18:00</span>
          </div>
          <div class="map__info">
            <img src="img/contacts/mail.png" alt="mail">
            <a href="mailto:info@rus-sauna.com">info@rus-sauna.com</a>
          </div>
          <div class="map__info">
            <img src="img/contacts/phone.png" alt="phonr">
            <a href="tel:8(0765)767667">8 (0765) 76 76 67</a>
          </div>
        </div>
        <div class="map__image"><img src="img/contacts/balaclava.jpg" alt="balaclava"></div>
      </div>
    </div>
  </div>

  <div class="feedback">
    <div class="container">
      <div class="feedback-block">
        <div class="feedback-form">
          <h3 class="feedback-form__title title">Обратная связь</h3>
          <form action="mail-order.php" method="post" class="form feedback__form" id="form">
            <div class="feedback-inputs form-inputs invalid-block">
              <input type="text" name="username" class="form__input feedback__input " placeholder="Ваше имя...">
              <input type="text" name="feedbackemail" class="form__input feedback__input" placeholder="Ваш e-mail...">
            </div>
            <!-- /.bath-inputs inputs -->
            <textarea name="massage" class="form__mail feedback__textarea" placeholder="Ваше сообщение..."></textarea>
            <div class="g-recaptcha" data-sitekey="6LcFcZkUAAAAAATEko9luUctyKXHKmxrAKX4EEIc"></div>
            <button class="feedback__btn button form__button button_green">Отправить!</button>
          </form>
          <!-- /.form feedback__form -->
        </div>
        <div class="feedback-networks">
          <h3 class="feedback-networks__title title">Мы в соцсетях</h3>
          <button class="feedback-networks__btn vk" onclick="window.location.href='https://vk.com/'"><img
              src="img/contacts/vk.png" alt="">ВКОНТАКТЕ</button>
          <button class="feedback-networks__btn facebook"
            onclick="window.location.href='https://ru-ru.facebook.com/'"><img src="img/contacts/facebook.png"
              alt="">facebook</button>
          <button class="feedback-networks__btn google" onclick="window.location.href='https://www.google.ru/'"><img
              src="img/contacts/google.png" alt="">google +</button>
        </div>
      </div>
      <!-- /.container -->
    </div>
  </div>
  <!-- /.feedback -->

  <?php include 'footer.php' ?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/menuBtnActive.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>


  <script>
    $(document).ready(function () {

      document.getElementById('form').onsubmit = function () {
        if (!grecaptcha.getResponse()) {
            alert('Вы не заполнили поле Я не робот!');
            return false; // возвращаем false и предотвращаем отправку формы
        }
      };
      $('#form').validate({
        errorClass: "invalid",
        errorElement: "div",
        rules: {
          username: {
            required: true,
            minlength: 2,
            maxlength: 15
          },
          feedbackemail: {
            required: true,
            email: true
          },
          massage: {
            required: true,
            minlength: 2
          },
        },
        messages: {
          username: {
            minlength: jQuery.validator.format("Минимальное количество символов: 2"),
            maxlength: jQuery.validator.format("Максимальное количество символов: 15"),
            required: "Заполните поле"
          },
          userphone: {
            required: "Заполните поле"
          },
          feedbackemail: {
            email: "Введите корректный email",
            required: "Заполните поле"
          },
          massage: {
            required: "Заполните поле",
            minlength: jQuery.validator.format("Минимальное количество символов: 2")
          }
        }
      })
    });
  </script>

</body>

</html>