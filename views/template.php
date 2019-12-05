<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Loja 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.structure.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.theme.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />

    <link href=<?php echo BASE_URL; ?>assets/css/footer.css type="text/css" rel="stylesheet">

</head>

<body>
    <nav class="navbar topnav">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo BASE_URL; ?>"><?php $this->lang->get('HOME'); ?></a></li>
                <li><a href="<?php echo BASE_URL; ?>contact"><?php $this->lang->get('CONTACT'); ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php $this->lang->get('LANGUAGE'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL; ?>lang/set/en">English</a></li>
                        <li><a href="<?php echo BASE_URL; ?>lang/set/pt-br">Português</a></li>
                    </ul>
                </li>
                <?php
                if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
                ?>
                    <li><a href="<?php echo BASE_URL; ?>perfil">Perfil</a></li>
                    <li><a href="<?php echo BASE_URL; ?>logoff">Sair</a></li>
                <?php
                }else{
                ?>
                    <li><a href="<?php echo BASE_URL; ?>login"><?php $this->lang->get('LOGIN'); ?></a></li>
                    <li><a href="<?php echo BASE_URL; ?>cadastro">Cadastro</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/logo.png" /></a>
                </div>
                <div class="col-sm-7">
                    <div class="head_help">(11) 9999-9999</div>
                    <div class="head_email">contato@<span>loja2.com.br</span></div>

                    <div class="search_area">
                        <form action="<?php echo BASE_URL; ?>busca" method="GET">
                            <input type="text" name="s" value="<?php echo (!empty($viewData['searchTerm']))?$viewData['searchTerm']:''; ?>" required placeholder="<?php $this->lang->get('SEARCHFORANITEM'); ?>" />
                            <select name="category">

                                <option value=""><?php $this->lang->get('ALLCATEGORIES'); ?></option>

                                <?php foreach($viewData['categories'] as $cat): ?>
                                <option <?php echo ($viewData['category']==$cat['id'])?'selected="selected"':''; ?> value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                                <?php
						        	if(count($cat['subs']) > 0) {
						        		$this->loadView('search_subcategory', array(
						        			'subs' => $cat['subs'],
						        			'level' => 1,
						        			'category' => $viewData['category']
						        		));
						        	}
						        	?>
                                <?php endforeach; ?>



                            </select>
                            <input type="submit" value="" />
                        </form>
                    </div>
                </div>
                <div class="col-sm-3">
                    <a href="<?php echo BASE_URL; ?>cart">
                        <div class="cartarea">
                            <div class="carticon">
                                <div class="cartqt"><?php echo $viewData['cart_qt']; ?></div>
                            </div>
                            <div class="carttotal">
                                <?php $this->lang->get('CART'); ?>:<br />
                                <span>R$ <?php echo number_format($viewData['cart_subtotal'], 2, ',', '.'); ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        
        
        <!--slider-->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>Digital</span>Easy</h1>
                                    <h2>Computadores Gamers</h2>
                                    <p>Oferta da semana - Computador gamer por R$1.399,99.</p>
                                    <button type="button" class="btn btn-default get">Veja Já</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="assets/images/slide1.jpg" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Digital</span>Easy</h1>
                                    <h2>Celulares</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Veja Já</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="assets/images/slide2.jpg" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Digital</span>Easy</h1>
                                    <h2>Cadeiras Gamers</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Veja Já</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="assets/images/slide3.jpg" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
      <!--slider-->

        
    </header>
          <div class="categoryarea">
        <nav class="navbar">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php $this->lang->get('SELECTCATEGORY'); ?>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php foreach($viewData['categories'] as $cat): ?>
                            <li>
                                <a href="<?php echo BASE_URL.'categories/enter/'.$cat['id']; ?>">
                                    <?php echo $cat['name']; ?>
                                </a>
                            </li>
                            <?php
					        	if(count($cat['subs']) > 0) {
					        		$this->loadView('menu_subcategory', array(
					        			'subs' => $cat['subs'],
					        			'level' => 1
					        		));
					        	}
					        	?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php if(isset($viewData['category_filter'])): ?>
                    <?php foreach($viewData['category_filter'] as $cf): ?>
                    <li><a href="<?php echo BASE_URL; ?>categories/enter/<?php echo $cf['id']; ?>"><?php echo $cf['name']; ?></a></li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <?php if(isset($viewData['sidebar'])): ?>
                <div class="col-sm-3">
                    <?php $this->loadView('sidebar', array('viewData'=>$viewData)); ?>
                </div>
                <div class="col-sm-9"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
                <?php else: ?>
                <div class="col-sm-12"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <footer id="footer">
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <h3>Site</h3>
                        <ul class="list-unstyled three-column">
                            <li>Local</li>
                            <li>Serviço</li>
                            <li>Sobre</li>
                            <li>Contato</li>
                            <li>Compania</li>
                            <li>Suporte ao Cliente</li>
                        </ul>
                        <h3>Fale conosco</h3>
                        <ul class="list-unstyled socila-list">
                            <img src="https://img.icons8.com/color/48/000000/facebook.png">
                            <img src="https://img.icons8.com/color/50/000000/instagram-new.png">
                            <img src="https://img.icons8.com/color/48/000000/whatsapp.png">
                            <img src="https://img.icons8.com/color/48/000000/gmail.png">
                            <img src="https://img.icons8.com/color/48/000000/twitter.png">
                            <img src="https://img.icons8.com/color/48/000000/linkedin.png"> </ul>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h3>Patrocinios</h3>
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="assets/images/dell.ico" alt="" class="media-object" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Dell</h4>
                                <p>Dell é uma empresa de hardware de computador, colaboradora da Digital Easy.</p>
                            </div>
                        </div>

                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="assets/images/san.ico" alt="" class="media-object" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Samsung</h4>
                                <p>Samsung é uma empresa de eletronicos, colaboradora da Digital Easy.</p>
                            </div>
                        </div>

                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="assets/images/hp.ico" alt="" class="media-object" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">HP</h4>
                                <p>HP a maior empresa de tecnologia no mundo, colaboradora da Digital Easy.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <h3>Nosso trabalho</h3>
                        <img class="img-thumbnail" src="assets/images/fot4.png" alt="" />
                        <img class="img-thumbnail" src="assets/images/fot3.png" alt="" />
                        <img class="img-thumbnail" src="assets/images/fot2.png" alt="" />
                        <img class="img-thumbnail" src="assets/images/fot.png" alt="" />
                    </div>

                </div>
            </div>
            <div class="copyright text-center">
                Copyright &copy; 2019  <span href=>Digital-Easy</span>
            </div>
        </footer>
    </footer>
    <script type="text/javascript">
        var BASE_URL = '<?php echo BASE_URL; ?>';
        <?php if(isset($viewData['filters'])): ?>
        var maxslider = <?php echo $viewData['filters']['maxslider']; ?>;
        <?php endif; ?>

    </script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>

</html>