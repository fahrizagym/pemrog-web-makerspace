<!-- <?php 
$modul = $this->uri->segment(2);
$method = $this->uri->segment(3);
?>

  <!--====== NAVBAR NINE PART START ======-->

  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
						<a class="navbar-brand" href="<?=base_url()?>">
							<img src="<?=home_assets()?>images/logo.svg" alt="Logo">
						</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
								<li class="nav-item <?= (($modul == 'home' or $modul == '') ? 'active' : '') ?>">
									<a class="nav-link" href="<?=base_url('home')?>">Home</a>
								</li>
								<li class="nav-item <?= (($modul == 'service') ? 'active' : '') ?>">
									<a class="nav-link" href="<?=base_url('service')?>">Services</a>
								</li>
								<li class="nav-item <?= (($modul == 'pricing') ? 'active' : '') ?>">
									<a class="nav-link" href="<?=base_url('pricing')?>">Pricing</a>
								</li>
								<li class="nav-item <?= (($modul == 'latestnews') ? 'active' : '') ?>">
									<a class="nav-link" href="<?=base_url('latestnews')?>">Latest News</a>
								</li>
								<li class="nav-item <?= (($modul == 'brand') ? 'active' : '') ?>">
									<a class="nav-link" href="<?=base_url('brand')?>">Brand</a>
								</li>
								<li class="nav-item <?= (($modul == 'contact') ? 'active' : '') ?>">
									<a class="nav-link" href="<?=base_url('contact')?>">Contact</a>
								</li>
              </ul>
            </div>

            <div class="navbar-btn d-none d-lg-inline-block">
              <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
            </div>
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->  
  </section>