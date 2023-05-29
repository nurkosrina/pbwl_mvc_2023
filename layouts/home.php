<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> bouket flower Shop</title>

      <link rel="shortcut icon" href="layouts/assets/img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="<?=AST ?>/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="<?=AST ?>/img/images.JPG" class="brand">
                  <div class="user">Nurkosrina Aisah</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="<?= URL ?>/Home/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="<?= URL ?>/Kategori/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Kategori
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/User/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> User
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/Produk/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Produk
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/Keranjang/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Keranjang
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/Pemesanan/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Pemesanan
                              </a>
                        </li>
						<li>
                              <a href="<?= URL ?>/DetPemesanan/Index">
                                    <img class="icon" src="<?=AST ?>/img/menu.png" alt=""> Detail Pemesanan
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
				<?php require_once ROOT . "app/views/" . $view. ".php" ?>

    
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Nurkosrina Aisah
            </footer>
      </main>

</body>

</html>