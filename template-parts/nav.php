    <header>
      <nav class="nav navbar">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
            if(checkLoged()){
            ?>
            <li><a href="sass.html" data-position="bottom" data-tooltip="Login"><i class="material-icons fa-solid fa-circle-user"></i></a></li>
          <?php
            }
          ?>
          </ul>
        </div>
      </nav>
    </header>