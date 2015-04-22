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
                <span class="sandwiche">
                    <i class="fa fa-bars"></i>
                </span>
                <ul class="nav-mobile">
                    <li><a href="empresa" class="item" accesskey="1">Empresa</a></li>
                    <li><a href="duvidas" class="item" accesskey="3">Dúvidas</a></li>
                    <li><a href="portifolio" class="item" accesskey="4">Portfólio</a></li>
                    <li><a href="blog" class="item" accesskey="5">Blog</a></li>
                    <li><a href="contato" class="item" accesskey="6">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="wrap">
        <!-- Analisar utilidade -->
        <?= $this->fetch('title') ?>

    </div>
