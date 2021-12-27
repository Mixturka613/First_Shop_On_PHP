<div class="menu__user-page">
  <div class="user-page__avatar">
    <img
      src="https://yt3.ggpht.com/a/AATXAJxubCVCVhHwa1lvkpLm6MrpNhP5AgNz5Op_IQ=s900-c-k-c0xffffffff-no-rj-mo"
      alt=""
    />
  </div>
  <div class="user-page__info">
    <h2 class="user-page__name">Name: <?= getDataUser($_COOKIE['jwt-tocken'])->username; ?></h2>
    <p class="user-page__email">Email: <?= getDataUser($_COOKIE['jwt-tocken'])->email ; ?></p>
  </div>

  <form action="/authorisation/logout.php">
    <input
      type="submit"
      class="auth__btn user-page__btn"
      value="Logout"
    />
  </form>

  
  <?php if (!!getDataUser($_COOKIE['jwt-tocken'])->admin) { ?>

    <a href="/admin/admin.php">ADMIN</a>

  <?php }  ?>
  
 

</div>
