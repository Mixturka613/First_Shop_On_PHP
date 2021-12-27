<div class="menu__content">
  <div class="auth__btns">
    <button onClick="changeForm('Authorisation')" class="auth__btn">
      Login
    </button>
    <button onClick="changeForm('Registration')" class="auth__btn">
      Registration
    </button>
  </div>

  <hr class="auth__line" />

  <form action="authorisation/login.php" method="POST" class="auth__form form__login">
    <h2 class="auth__title">Login</h2>
    <input
      class="auth__input"
      type="email"
      name="email"
      placeholder="Введите email"
      required
    />
    <input
      class="auth__input"
      type="password"
      name="password"
      placeholder="Введите пароль"
      required
    />
    <input class="auth__btn form__btn" type="submit" value="Login" />
  </form>

  <form action="authorisation/register.php" method="POST" class="auth__form form__register">
    <h2 class="auth__title">Registration</h2>
    <input
      class="auth__input"
      type="text"
      name="username"
      placeholder="Введите ваше имя"
      required
    />
    <input
      class="auth__input"
      type="email"
      name="email"
      placeholder="Введите ваш email"
      required
    />
    <input
      class="auth__input"
      type="password"
      name="password"
      placeholder="Придумайте пароль"
      required
    />
    <input
      class="auth__input"
      type="password"
      name="passwordRepeat"
      placeholder="Повторите пароль"
      required
    />

    <input class="auth__btn form__btn" type="submit" value="Registration" />
  </form>
</div>
