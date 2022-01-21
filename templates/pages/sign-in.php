<header class="page-header">
  <div class="inner-column">
    <h1 class="title-voice">Sign in</h1>
    <p>Sign in to comment on blog posts</p>
  </div>
</header>

<section class="page-section sign-in-form">
  <div class="inner-column">
    <div class="login-form">
      <?php
      // Display WordPress login form:
      $parameters = array(
        'redirect' => admin_url(),
        'form_id' => 'loginform',
        'label_username' => __('Username or Email Address'),
        'label_password' => __('Password'),
        'label_remember' => __('Remember Me'),
        'label_log_in' => __('Sign in'),
        'remember' => true,
        "value_remember" => true,
      );
      wp_login_form($parameters);
      ?>
    </div>
  </div>
</section>