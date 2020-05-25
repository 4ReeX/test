  <div class="cd-user-modal"> <!-- все формы на фоне затемнения-->
    <div class="cd-user-modal-container"> <!-- основной контейнер -->
  <ul class="cd-switcher">
      <li><a href="#0" onclick="focusMethod();">Вход</a></li>
      <li><a href="#0" onclick="focusMethodRega();">Регистрация</a></li>
  </ul>
  <div id="cd-login"> <!-- форма входа -->
      <form class="cd-form">
    <p class="fieldset">
        <label class="image-replace cd-email" for="signin-email">E-mail</label>
        <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail" autofocus>
        <span class="cd-error-message">Email введен некорректно</span>
    </p>
    <p class="fieldset">
        <label class="image-replace cd-password" for="signin-password">Пароль</label>
        <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Пароль" tabindex="2">
        <a href="#0" class="hide-password">Скрыть</a>
        <span class="cd-error-message">Это точно Ваш пароль?</span>
    </p>
    <p class="fieldset">
        <input type="checkbox" id="remember-me" checked>
        <label for="remember-me">Запомнить меня</label>
    </p>
    <p class="fieldset">
        <input class="full-width" type="submit" value="Войти" tabindex="3">
    </p>
      </form>       
      <p class="cd-form-bottom-message"><a href="#0">Забыли пароль?</a></p>
      <!-- <a href="#0" class="cd-close-form">Close</a> -->
  </div> <!-- конец блока с формой входа -->
  <div id="cd-signup"> <!-- блок с формой регистрации -->
     <form class="cd-form">
        <p class="fieldset">
     <label class="image-replace cd-username" for="signup-username">Имя пользователя</label>
     <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Имя пользователя" autofocus>
     <span class="cd-error-message">Тебя реально так зовут?!</span>
        </p>
        <p class="fieldset">
     <label class="image-replace cd-telegram" for="signup-telegram">Телеграмм</label>
     <input class="full-width has-padding has-border" id="signup-telegram" type="text" placeholder="Телеграмм" autofocus>
     <span class="cd-error-message">?</span>
        </p>
        <p class="fieldset">
     <label class="image-replace cd-skype" for="signup-telegram">Скайп</label>
     <input class="full-width has-padding has-border" id="signup-telegram" type="text" placeholder="Скайп" autofocus>
     <span class="cd-error-message"></span>
        </p>
        <p class="fieldset">
      <label class="image-replace cd-email" for="signup-email">E-mail</label>
      <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
      <span class="cd-error-message">Такой E-mail уже есть в системе</span>
         </p>
         <p class="fieldset">
             <label class="image-replace cd-password" for="signup-password">Пароль</label>
       <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Пароль">
       <a href="#0" class="hide-password">Скрыть</a>
       <span class="cd-error-message">Ошибка в пароле</span>
          </p>
          <p class="fieldset">
        <input type="checkbox" id="accept-terms">
        <label for="accept-terms">Я согласен с <a href="rules.html" target="_blank">Условиями</a></label>
          </p>
          <p class="fieldset">
        <input class="full-width has-padding" type="submit" value="Создать аккаунт">
          </p>
      </form>
    <!-- <a href="#0" class="cd-close-form">Закрыть</a> -->
  </div> <!-- cd-signup -->
  <div id="cd-reset-password"> <!-- форма восстановления пароля -->
      <p class="cd-form-message">Забыли пароль? Пожалуйста, введите адрес своей электронной почты. Вы получите ссылку, чтобы создать новый пароль.</p>
      <form class="cd-form">
    <p class="fieldset">
        <label class="image-replace cd-email" for="reset-email">E-mail</label>
        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
        <span class="cd-error-message">Мыло для сброса. </span>
    </p>
    <p class="fieldset">
         <input class="full-width has-padding" type="submit" value="Восстановить пароль">
    </p>
       </form>
                 <p class="cd-form-bottom-message"><a href="#0">Вернуться к входу</a></p>
  </div> <!-- cd-reset-password -->

    <a href="#0" class="cd-close-form">Закрыть</a>
  </div> <!-- cd-user-modal-container -->
 </div> <!-- cd-user-modal -->