        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">risma hotel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/home'); ?>">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/pesan_kamar'); ?>">PESAN KAMAR</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/fasilitas'); ?>">FASILITAS</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/promo'); ?>">PROMO</a></li>
                        <?php
                        if ($this->session->userdata('status') == "login"){
                            echo '<li class="nav-item"><a class="nav-link" href="'.base_url('index.php/profile'). '">profile</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="'.base_url('index.php/auth/logout'). '">logout</a></li>';
                        }else{
                            echo '<li class="nav-item"><a class="nav-link" href="'.base_url('index.php/auth/register'). '">Register</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="'.base_url('index.php/auth/'). '">login</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>