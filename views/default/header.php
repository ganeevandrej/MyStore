    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../accets/templats/defualt/css/style.css">
    <link rel="stylesheet" href="../../accets/templats/defualt/css/header.css">
    <script src="../../accets/templats/defualt/js/index.js"></script>
    </head>

    <body>
        <header class="header-block">
            <div class="wrapper">
                <div class="header-inner">
                    <div class="header-logo">
                        <a href="/myshop">
                            <img src="/accets/templats/defualt/photo/images/logo.png" alt=""></img>
                        </a>
                    </div>
                    <div class="header-search">
                        <form class="form-search" action="">
                            <input class="input-search" type="text" placeholder="Поиск">
                            <button type="submit" class="button-search">
                                <span></span>
                            </button>
                        </form>
                    </div>
                    <div class="header-nav">
                        <div><a class="user-nav" href="#">Войти</a></div>
                        <div><a class="regist-nav" href="#">Регистрация</a></div>
                        <div>
                            <a class="like-nav" href="/like/">
                                <span class="like-ikon"></span>
                                <span class="wrapper-count">
                                    <span id="countLike" class="countLike"><?=$countLike?></span>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a class="cart-nav" href="/cart/">
                                <span class="cart-ikon"></span>
                                <span class="wrapper-count">
                                    <span id="countCart" class="countCart"><?=$countCart?></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="header-categories">
                        <?php foreach ($rsCategories as $key => $value) {
                            $name = $value['name'];
                            $id = $value['id'];
                            $subcategories = $value['subcategories'];
                            echo "<div class='categories-item'>";
                            echo "<a class='categories' href='/?controller=categories&categories_id=$id'>$name</a>";
                            echo "<ul class='subcategoties'>";
                            foreach ($subcategories as $key => $value) {
                                $subname = $value['name'];
                                $sub_id = $value['id'];
                                echo "<li><a href='/?controller=categories&categories_id=$id&subcategories_id=$sub_id'>$subname</a></ali>";
                            }
                            echo "</ul>";
                            echo "</div>";
                        } ?>
                    </div>
                </div>
            </div>
        </header>