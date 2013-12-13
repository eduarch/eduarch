<header id="page_header">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="">EduArch</a></h1>
      </li>
      <li class="toggle-topbar menu-icon">
        <a href="#"><span></span></a>
      </li>
    </ul>

    <section class="top-bar-section">
      <ul class="left">
        <li><a href="#">Suggestion Board</a></li>
        <li><a href="#">Getting Started</a></li>
      </ul>

      <!-- Top Bar Right Nav Elements -->
    <ul class="right">
      <!-- Divider -->
      <li class="divider"></li>
      <!-- Dropdown -->
      <li class="has-dropdown">
        <a>Sign in Here!</a>
        <ul class="dropdown">
          <li><label>Sign in</label></li>
          <li><a>
            <?php $this->load->view('landing/sign_in'); ?>
            <div id="login_message"></div>
          </a></li>
          <li class="divider"></li>
          <li><label>or sign in with</label></li>
          <li><a>Facebook</a></li>
          <li><a>Twitter</a></li>
          <li><a>Google</a></li>
          <li class="divider"></li>
          <li><label>Forgot Login Credentials</label></li>
          <li><a href="forgot_email">Forgot Password</a></li>
        </ul>
      </li>
    </ul>
    </ul>
  </section>
  </nav>
</header>
