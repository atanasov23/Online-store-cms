<?php
require_once 'cms/config/db-config/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cms/templates/main/css/main.css" />
    <title>
        <?php
        $query_select = 'select * from shop_title';
        $result = mysqli_query($conn, $query_select);
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['shop_title'];
            print $title;
        }
        ?>
    </title>
</head>

<body>
    <div class="main">
        <?php
        require_once 'cms\templates\main\header.php';
        ?>
        <div class="gs-grid-wrap gs-anim-block animated">
						<div class="gs-grid-item with-hover gs-elem done" data-pid="31">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-zvezda.html" class="gs-item-view gs-single-view">
										<img src="/media/8/43.png" alt="Гердан Звезда">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="31">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-zvezda.html">
										Гердан Звезда
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-zvezda.html">
											<span class="gs-new-price">22,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="32">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-detelina-2.html" class="gs-item-view gs-single-view">
										<img src="/media/8/44.png" alt="Гердан Детелина ">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="32">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-detelina-2.html">
										Гердан Детелина 
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-detelina-2.html">
											<span class="gs-new-price">22,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="33">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-balgariia.html" class="gs-item-view gs-single-view">
										<img src="/media/8/45.png" alt="Гердан България">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="33">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-balgariia.html">
										Гердан България
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-balgariia.html">
											<span class="gs-new-price">12,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="34">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-levski.html" class="gs-item-view gs-single-view">
										<img src="/media/8/46.png" alt="Гердан Левски">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="34">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-levski.html">
										Гердан Левски
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-levski.html">
											<span class="gs-new-price">18,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="35">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-bukva-e.html" class="gs-item-view gs-single-view">
										<img src="/media/8/47.png" alt="Гердан буква Е">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="35">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-bukva-e.html">
										Гердан буква Е
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-bukva-e.html">
											<span class="gs-new-price">15,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="36">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-detelina-3.html" class="gs-item-view gs-single-view">
										<img src="/media/8/48.png" alt="Гердан Детелина">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="36">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-detelina-3.html">
										Гердан Детелина
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-detelina-3.html">
											<span class="gs-new-price">15,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="37">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-luna.html" class="gs-item-view gs-single-view">
										<img src="/media/8/49.png" alt="Гердан Луна">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="37">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-luna.html">
										Гердан Луна
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-luna.html">
											<span class="gs-new-price">15,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="38">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-tzvete-5.html" class="gs-item-view gs-single-view">
										<img src="/media/8/50.png" alt="Гердан Цвете">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="38">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-tzvete-5.html">
										Гердан Цвете
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-tzvete-5.html">
											<span class="gs-new-price">12,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="39">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-tzvete-6.html" class="gs-item-view gs-single-view">
										<img src="/media/8/52.png" alt="Гердан Цвете">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="39">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-tzvete-6.html">
										Гердан Цвете
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-tzvete-6.html">
											<span class="gs-new-price">12,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="40">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/darven-gerdan.html" class="gs-item-view gs-single-view">
										<img src="/media/8/56.png" alt="Дървен гердан ">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="40">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/darven-gerdan.html">
										Дървен гердан 
									</a>
									<div class="gs-item-price">
										<a href="/darven-gerdan.html">
											<span class="gs-new-price">12,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="42">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-tzska.html" class="gs-item-view gs-single-view">
										<img src="/media/8/58.png" alt="Гердан ЦСКА">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="42">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-tzska.html">
										Гердан ЦСКА
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-tzska.html">
											<span class="gs-new-price">18,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="43">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/gerdan-kanatitza.html" class="gs-item-view gs-single-view">
										<img src="/media/8/59.png" alt="Гердан Канатица">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="43">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/gerdan-kanatitza.html">
										Гердан Канатица
									</a>
									<div class="gs-item-price">
										<a href="/gerdan-kanatitza.html">
											<span class="gs-new-price">22,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="44">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/rachno-napraven-gerdan.html" class="gs-item-view gs-single-view">
										<img src="/media/8/60.png" alt="Ръчно направен гердан">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="44">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/rachno-napraven-gerdan.html">
										Ръчно направен гердан
									</a>
									<div class="gs-item-price">
										<a href="/rachno-napraven-gerdan.html">
											<span class="gs-new-price">18,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="gs-grid-item with-hover gs-elem done" data-pid="45">
							<div class="gs-item-data">
								<div class="gs-item-image">
									<span class="gs-tags">
									</span>
									<a href="/rachno-napraven-gerdan-1.html" class="gs-item-view gs-single-view">
										<img src="/media/8/61.png" alt="Ръчно направен гердан ">
									</a>
									<a data-quick-view-btn="" href="#" onclick="QuickView.showInfo(event, this)" class="gs-qw-button" data-id="45">
										<span class="icon-ico_search"></span>
										<em>Бърз преглед</em>
									</a>
								</div>
								<div class="gs-item-text">
									<a href="/rachno-napraven-gerdan-1.html">
										Ръчно направен гердан 
									</a>
									<div class="gs-item-price">
										<a href="/rachno-napraven-gerdan-1.html">
											<span class="gs-new-price">18,00 лв.</span>
										</a>
									</div>
								</div>
							</div>
						</div>
  
				</div>
        <?php
        require_once 'cms\templates\main\footer.php';
        ?>
    </div>
</body>

</html>