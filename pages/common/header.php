<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index"><img class="rounded-circle" src="assets/img/eirtis.png" alt="Eirtis"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">
                    <a class="nav-link hvrcenter" href="index">ANASAYFA</a>
                </li>
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'sponsor.php') echo 'active'; ?>">
                    <a class="nav-link hvrcenter" href="sponsor">SPONSOR</a>
                </li>
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active'; ?>">
                    <a class="nav-link hvrcenter" href="about">HAKKIMIZDA</a>
                </li>
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'commands.php') echo 'active'; ?>">
                    <a class="nav-link hvrcenter" href="commands">KOMUTLAR</a>
                </li>
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'team.php') echo 'active'; ?>">
                    <a class="nav-link hvrcenter" href="team">EKİP</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle services <?php if (basename($_SERVER['PHP_SELF']) == 'bot.php' || basename($_SERVER['PHP_SELF']) == 'web.php' || basename($_SERVER['PHP_SELF']) == 'design.php') echo 'active'; ?>" role="button" data-bs-toggle="dropdown" href="services">SERVİSLER</a>
                    <ul class="dropdown-content">
                        <li><a class="dropdown-item" href="bot">DİSCORD BOT</a></li>
                        <li><a class="dropdown-item" href="web">WEB SİTE</a></li>
                        <li><a class="dropdown-item" href="design">TASARIM</a></li>
                    </ul>
                </li>
                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>">
                    <a class="nav-link hvrcenter" href="contact">İLETİŞİM</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-button">
                <button class="bg-transparent bg-ds"><a class="nav-link text-ds" target="_blank" href="https://discord.gg/KXNebFVhTU">Destek Sunucusu</a></button>
                <button class="bg-se"><a class="nav-link text-se" target="_blank" href="https://discord.com/api/oauth2/authorize?client_id=1081356911141736468&permissions=8&scope=bot%20applications.commands"><i class="fa-brands fa-discord"></i> Sunucuya Ekle</a></button>
            </ul>
            <div class="theme-switch-wrapper">
                <input type="checkbox" class="checkbox" id="checkbox">
                <label for="checkbox" class="checkbox-label">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <span class="ball"></span>
                </label>
            </div>
        </div>
    </div>
</nav>