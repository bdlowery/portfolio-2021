<header class="page-header">
  <div class="inner-column">
    <h1 class="title-voice">Sign in</h1>
    <p>Sign in to comment on blog posts</p>
  </div>
</header>

<section class="page-section sign-in-form">
  <div class="inner-column">

    <?php
    if (!is_user_logged_in()) { // Display WordPress login form:
      $parameters = array(
        'redirect' => admin_url(),
        'form_id' => 'loginform',
        'label_username' => __('Username or email'),
        'label_password' => __('Password'),
        'label_remember' => __('Remember Me'),
        'label_log_in' => __('Sign in'),
        'remember' => true
      );
      wp_login_form($parameters);
    } else { // If logged in:
      wp_loginout(home_url()); // Display "Log Out" link.
      echo " | ";
      wp_register('', ''); // Display "Site Admin" link.
    }
    ?>
  </div>
</section>