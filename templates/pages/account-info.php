<?php
if (is_user_logged_in()) { ?>
  <?php
  global $current_user;
  $currentUser = wp_get_current_user();

  $user_roles = $current_user->roles;

  $userMeta = get_user_meta($current_user->ID);
  // var_dump($userMeta);

  $firstName = $userMeta["first_name"][0];
  $lastName = $userMeta["last_name"][0];
  $nickname = $userMeta["nickname"][0];
  $description = $userMeta["description"][0];
  $user_role = array_shift($user_roles);
  $avatar = get_avatar_url($currentUser->ID)
  ?>
  <section class="page-section">
    <div class="inner-column">

      <h1 class="strong-voice">Account Information</h1>

      <div class="user-card">
        <ul>
          <li>
            <picture class="avatar"><img src="<?= $avatar ?>" alt=""></picture>
          </li>
          <li>Name: <?php echo "$firstName" . " " . "$lastName"; ?></li>
          <li>Role: <?= $user_role; ?></li>
          <li>Bio: <?= $description; ?></li>
          <li></li>
        </ul>

      </div>

    </div>
  </section>
<?php } else {
  include(getFile("templates/pages/page-not-found.php"));
}
