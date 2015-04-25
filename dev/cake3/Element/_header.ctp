<body class="page-" itemscope itemtype="http://schema.org/WebPage">

    <header class="header-principal" role="banner">
        <div class="wrap">
            <h1 class="brand">
                <a href="">
                    <!-- <img height="55" width="123" alt="logo cliente"> -->
                    <?= $this->Html->image('logo-cliente.png', ['alt' => 'logo cliente']); ?>

                </a>
            </h1>
            <nav class="nav-global" role="navigation">
                <span class="bt-sandwiche">
                    <i class="fa fa-bars"></i>
                </span>
                <ul class="nav-mobile">
                    <li><a href="empresa" class="item <?= $this->fetch('empresa') ?>" accesskey="1">Empresa</a></li>
                    <li><a href="produtos" class="item <?= $this->fetch('produtos') ?>" accesskey="2">Produtos</a></li>
                    <li><a href="duvidas" class="item <?= $this->fetch('duvidas') ?>" accesskey="3">Dúvidas</a></li>
                    <li><a href="portfolio" class="item <?= $this->fetch('portfolio') ?>" accesskey="4">Portfólio</a></li>
                    <li><a href="blog" class="item <?= $this->fetch('blog') ?>" accesskey="5">Blog</a></li>
                    <li><a href="contato" class="item <?= $this->fetch('contato') ?>" accesskey="6">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
