<nav>
    <ul class="menu_left">
        <li ><a href="http://wegochain.io/?lang=kr"><img src="./img/Logo.png" alt="logo" style="opacity: 1;"></a></li>
        <li class="<?php if($page=='home'){echo 'active';}?>" ><a href="./index.php"><img src="./img/icon/nav/home.png" alt="sub_menu1"></a><p >HOME</p></li>
        <li class="<?php if($page=='gallery'){echo 'active';}?>" ><a href="./gallery.php"><img src="./img/icon/nav/gallery.png" alt="sub_menu2"></a><p style="margin-left: -5px;">GALLERY</p></li>
        <li class="<?php if($page=='store'){echo 'active';}?>" ><a href="./store.php"><img src="./img/icon/nav/store.png" alt="sub_menu3"></a><p style="margin-left: 1px;">STORE</p></li>
        <li class="<?php if($page=='faq'){echo 'active';}?>" ><a href="./faq.php"><img src="./img/icon/nav/faq.png" alt="sub_menu4"></a><p style="margin-left: 6px;">FAQ</p></li>
    </ul>
    
    <ul class="menu_right">
        <!-- <li><?php $pass = $_POST['Password']; ?></li> -->
        <li><a href="#layer2" class="btn-example"><img src="./img/login_button.png" alt="login" style="height:35px; cursor:pointer; opacity:.8;"> </a></li>
        <li><a href="./login.php"><img src="./img/down4.png" alt="download" style="height:35px; cursor:pointer; opacity:.8;"></a> </li>
    </ul>
</nav>

