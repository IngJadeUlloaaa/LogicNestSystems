<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogicNestSystem</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        /* Estilos para el botón activo */
        :root {
            --lightPurpleColor: #EB00FF;
        }

        .active {
            background-color: var(--lightPurpleColor);
            border-radius: 50px;
            color: white;
        }

        /* Estilos para ocultar el contenido */
        .tabcontent {
            display: none;
        }

        /* Estilos para los botones */
        .tablinks {
            cursor: pointer;
            padding: 10px;
            border: none;
            outline: none;
        }

        /* Estilo inicial para el primer tab activo */
        #pcGamingBtn {
            display: block;
        }
    </style>
</head>

<body>
    <nav class='navMenu-principal'>
        <h1 class='title-navMenu-principal'>LogicNest System</h1>
        <ul class='keyNavMenu-navMenu-principal'>
            <li class='key-navMenu-principal' onclick="scrollToSection('shop')">Shop</li>
            <li class='key-navMenu-principal' onclick="scrollToSection('accessories')">Accessories</li>
            <li class='key-navMenu-principal' onclick="scrollToSection('shipping')">Shipping</li>
            <li class='key-navMenu-principal' onclick="scrollToSection('about')">About</li>
            <li class='key-navMenu-principal' onclick="scrollToSection('contact')">Contact</li>
        </ul>

        <script>
            function scrollToSection(sectionId) {
                const section = document.getElementById(sectionId);
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            }
        </script>

        <ul class='icnNavMenu-navMenu-principal'>
            <li class='icn-navMenu-principal'>
                <i class="uil uil-shopping-cart-alt" id="carrito-contador">Carrito (0)</i>
            </li>
            <li class='icn-navMenu-principal'>
                <img id="signIn-btn" src="./principalWebsite/1frame/signIn.png" alt=""/>
            </li>
        </ul>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var signInBtn = document.getElementById('signIn-btn');
                
                signInBtn.addEventListener('click', function() {
                    window.location.href = 'login.php';
                });
            });
        </script>

    </nav>

    <!-- main -->
    <main class='main-principal'>
        <div class='ghostPc-container-main-principal'>
            <img class='ghostPc-main-principal' src="./principalWebsite/1frame/kratos.png" alt="" />
        </div>

        <div class='welcome-principal'>
            <p class='p1'>
                <span class='title1-p-welcome-principal'>Our</span> <span class='title2-p-welcome-principal'>Best</span>
            </p>
            <p class='p2'>
                <span class='title3-p-welcome-principal'>Collections</span> <span
                    class='title4-p-welcome-principal'>For</span> <span class='title5-p-welcome-principal'>You</span>
            </p>
            <p class='subtitle-p-welcome-principal'>Transforming Ideas into Technologies, Uniting Ingenuity in the Nest
                of Logic</p>
            <button class='getStarted-main-principal'>Get started</button>
        </div>

        <div class='ghost-container-main-principal'>
            <img class='ghost-main-principal' src="./principalWebsite/1frame/ghost.png" alt="" />
        </div>
    </main>

    <!-- about -->
    <section class="body-2frame" id="about">
        <div class="information-container-about-principal">
            <p class="p1-about">
                <span class="title1-p-about-principal">Take our Technical</span>
            </p>
            <p class="p2-about">
                <span class="title2-p-about-principal">Service</span> <span class="title3-p-about-principal">to</span>
            </p>
            <p class="p3-about">
                <span class="title4-p-about-principal">Another</span> <span
                    class="title5-p-about-principal">Level</span>
            </p>
            <p class="description-p-about-principal">We are a company with the most avant-garde tools and technology in
                Nicaragua, bringing excellent quality of products and services to our clients, taking into account their
                needs, requirements and expectations.</p>
            <div class="btns-container-p-about-principal">
                <button class="btn1-p-about-principal">View More</button>
                <button class="btn2-p-about-principal">Contact Us</button>
            </div>
        </div>

        <div class="video-container-about-principal">
            <video class="video-about-principal" src="./principalWebsite/2frame/videoFrame2.mp4" loop muted
                autoplay></video>
        </div>
    </section>

    <!-- shop -->
    <section class='body-3frame' id="shop">
        <div class='container-top-shop-principal'>
            <p class='p-shop'>
                <span class='title1-p-shop-principal'>Powering</span> <span class='title2-p-shop-principal'>the</span>
                <span class='title3-p-shop-principal'>Best
                    in</span>
            </p>
            <p class='p-shop'>
                <span class='title4-p-shop-principal'>Both Work</span> <span class='title5-p-shop-principal'>and</span>
                <span class='title6-p-shop-principal'>Play</span>
            </p>

            <div class='btns-container-shop-principal'>
                <button class='btn-shop-principal tablinks active' onclick="openCategory(event, 'pcGamingBtn')">PC
                    Gaming</button>
                <button class='btn-shop-principal tablinks'
                    onclick="openCategory(event, 'monitorsBtn')">Monitors</button>
                <button class='btn-shop-principal tablinks' onclick="openCategory(event, 'gamingChairBtn')">Gaming
                    Chairs</button>
            </div>
        </div>

        <!-- pc gaming -->
        <section class="pc-container-shop-principal tabcontent" id="pcGamingBtn">
            <article class='products-container-shop-principal'>
                <div class='feature-products-container-shop-principal'>
                    <p class='pt-shop'>
                        <span class='title1-feature-container-shop-principal'>BOLD</span>
                    </p>
                    <p class='pt2-shop'>
                        <span class='title2-feature-container-shop-principal'>GATE</span>
                    </p>

                    <p class='performance-shop-principal'>OPTIMAL PERFORMANCE</p>
                    <ul class='ul-container-shop-principal'>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Ultimate Value</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Ready for Sports Gaming</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Low noise</span>
                        </li>
                    </ul>

                    <h3 class='from'>from</h3>
                    <p class='p-shop'>
                        <span class='cost-shop-principal'>$33,999</span> <span class='stock-shop-principal'>In
                            stock</span>
                    </p>

                    <div class='buy-btns-container-shop-principal'>
                        <button class='add-btn-container-shop-principal btn-agregar' data-price="33999"
                            data-name="BOLD GATE" data-img="./principalWebsite/3frame/pcGaming/pc1-shop.png">Add to
                            Cart</button>
                        <button class='buy-btn-container-shop-principal'>Buy it</button>
                    </div>
                </div>

                <div class='margin-container-shop-principal'>
                    <div class='img-container-shop-principal'>
                        <img class='pc1-shop-principal' src="./principalWebsite/3frame/pcGaming/pc1-shop.png" alt="" />
                    </div>

                    <div class='characteristics-container-shop-principal'>
                        <ul class='characteristics-shop-principal'>
                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/pcGaming/icn-processor-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>PROCESSOR</span>
                            </li>
                            <p class='namesProduct-shop'>AMD Ryzen 9 5900X 12-core, 24-Thread</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn'
                                    src="./principalWebsite/3frame/pcGaming/icn-graphicsCard-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>GRAPHICS CARD</span>
                            </li>
                            <p class='namesProduct-shop'>Asus ROG STRIX WHITE OC GeForce RTX 3080 10GB 10 GB Video Card
                            </p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/pcGaming/icn-ram-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>RAM MEMORY</span>
                            </li>
                            <p class='namesProduct-shop'>TEAMGROUP T-Force Xtreem ARGB 16 GB (2 x 8 GB) DDR4-3600 CL18
                                Memory</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/pcGaming/icn-mothrboard-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>MOTHERBOARD</span>
                            </li>
                            <p class='namesProduct-shop'>Asus ROG STRIX B550-A GAMING ATX AM4 Motherboard</p>
                        </ul>
                    </div>
                </div>
            </article>

            <article class='products-container-shop-principal'>
                <div class='feature-products-container-shop-principal'>
                    <p class='pt-shop'>
                        <span class='secondPc-feature-container-shop-principal'>MEDIUM</span>
                    </p>
                    <p class='pt2-shop'>
                        <span class='title2-feature-container-shop-principal'>GATE</span>
                    </p>

                    <p class='secondPc-performance-shop-principal'>OPTIMAL PERFORMANCE</p>
                    <ul class='ul-container-shop-principal'>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Premium Custom PC</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Ready for High - Performance</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Premium Full Steel Chassis</span>
                        </li>
                    </ul>

                    <h3 class='from'>from</h3>
                    <p class='p-shop'>
                        <span class='cost-shop-principal'>$36,999</span> <span class='stock-shop-principal'>In
                            stock</span>
                    </p>

                    <div class='buy-btns-container-shop-principal'>
                        <button class='secondPc-add-btn-container-shop-principal btn-agregar' data-price="36999"
                            data-name="MEDIUM GATE" data-img="./principalWebsite/3frame/pcGaming/pc2-shop.png">Add to
                            Cart</button>
                        <button class='secondPc-buy-btn-container-shop-principal'>Buy it</button>
                    </div>
                </div>

                <div class='margin-container-shop-principal'>
                    <div class='img-container-shop-principal'>
                        <img class='pc1-shop-principal' src="./principalWebsite/3frame/pcGaming/pc2-shop.png" alt="" />
                    </div>

                    <div class='characteristics-container-shop-principal'>
                        <ul class='characteristics-shop-principal'>
                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/pcGaming/icn-processor-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>PROCESSOR</span>
                            </li>
                            <p class='namesProduct-shop'>Intel Core i9-13900K Desktop Processor 24 (8 P-cores + 16
                                E-cores) with Integrated Graphics</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn'
                                    src="./principalWebsite/3frame/pcGaming/icn-graphicsCard-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>GRAPHICS CARD</span>
                            </li>
                            <p class='namesProduct-shop'>Asus ROG STRIX WHITE OC GeForce RTX 3080 10GB 10 GB Video Card
                            </p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/pcGaming/icn-ram-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>RAM MEMORY</span>
                            </li>
                            <p class='namesProduct-shop'>G.SKILL Trident Z5 RGB Series (Intel XMP 3.0) DDR5 RAM de 32 GB
                                (2 x 16 GB) 6000MT/s CL36-36-36-96 1.35Vg</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/pcGaming/icn-mothrboard-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>MOTHERBOARD</span>
                            </li>
                            <p class='namesProduct-shop'>Asus ROG Maximus Z790 Dark Hero</p>
                        </ul>
                    </div>
                </div>
            </article>

            <article class='products-container-shop-principal'>
                <div class='feature-products-container-shop-principal'>
                    <p class='pt-shop'>
                        <span class='thirdPc-feature-container-shop-principal'>HYPER</span>
                    </p>
                    <p class='pt2-shop'>
                        <span class='title2-feature-container-shop-principal'>GATE</span>
                    </p>

                    <p class='thirdPc-performance-shop-principal'>ADVANCE PERFORMANCE</p>
                    <ul class='ul-container-shop-principal'>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>NZXT Extreme PC</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Ready for Extreme - Performance</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Premium Full Steel Chassis</span>
                        </li>
                    </ul>

                    <h3 class='from'>from</h3>
                    <p class='p-shop'>
                        <span class='cost-shop-principal'>$39,999</span> <span class='stock-shop-principal'>In
                            stock</span>
                    </p>

                    <div class='buy-btns-container-shop-principal'>
                        <button class='thirdPc-add-btn-container-shop-principal btn-agregar' data-price="39999"
                            data-name="HYPER GATE" data-img="./principalWebsite/3frame/pcGaming/pc3-shop.png">Add to
                            Cart</button>
                        <button class='thirdPc-buy-btn-container-shop-principal'>Buy it</button>
                    </div>
                </div>

                <div class='margin-container-shop-principal'>
                    <div class='img-container-shop-principal'>
                        <img class='pc1-shop-principal' src="./principalWebsite/3frame/pcGaming/pc3-shop.png" alt="" />
                    </div>

                    <div class='characteristics-container-shop-principal'>
                        <ul class='characteristics-shop-principal'>
                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/pcGaming/icn-processor-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>PROCESSOR</span>
                            </li>
                            <p class='namesProduct-shop'>Intel Core i9-13900K Desktop Processor 24 (8 P-cores + 16
                                E-cores) with Integrated Graphics</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn'
                                    src="./principalWebsite/3frame/pcGaming/icn-graphicsCard-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>GRAPHICS CARD</span>
                            </li>
                            <p class='namesProduct-shop'>Asus ROG STRIX WHITE OC GeForce RTX 3080 10GB 10 GB Video Card
                            </p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/pcGaming/icn-ram-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>RAM MEMORY</span>
                            </li>
                            <p class='namesProduct-shop'>TEAMGROUP T-Force Xtreme ARGB 16GB (2 x 8GB) DDR4-3600 CL18
                                Memory</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/pcGaming/icn-mothrboard-shop.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>MOTHERBOARD</span>
                            </li>
                            <p class='namesProduct-shop'>Asus ROG Maximus Z790 Dark Hero</p>
                        </ul>
                    </div>
                </div>
            </article>
        </section>

        <!-- monitors -->
        <section class="pc-container-shop-principal tabcontent" id="monitorsBtn">
            <article class='products-container-shop-principal'>
                <div class='feature-products-container-shop-principal'>
                    <p class='pt-shop'>
                        <span class='title1-feature-container-shop-principal'>BOLD</span>
                    </p>
                    <p class='pt2-shop'>
                        <span class='title2-feature-container-shop-principal'>GATE</span>
                    </p>

                    <p class='performance-shop-principal'>OPTIMAL PERFORMANCE</p>
                    <ul class='ul-container-shop-principal'>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Ultimate Value</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Ready for Sports Gaming</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Low noise</span>
                        </li>
                    </ul>

                    <h3 class='from'>from</h3>
                    <p class='p-shop'>
                        <span class='cost-shop-principal'>$2,999</span> <span class='stock-shop-principal'>In
                            stock</span>
                    </p>

                    <div class='buy-btns-container-shop-principal'>
                        <button class='add-btn-container-shop-principal btn-agregar' data-price="2999"
                            data-name="MAG401QR MSI 40'' (101.6 cm)"
                            data-img="./principalWebsite/3frame/monitors/m1.png">Add to Cart</button>
                        <button class='buy-btn-container-shop-principal'>Buy it</button>
                    </div>
                </div>

                <div class='margin-container-shop-principal'>
                    <div class='img-container-shop-principal'>
                        <img class='pc1-shop-principal' src="./principalWebsite/3frame/monitors/m1.png" alt="" />
                    </div>

                    <div class='characteristics-container-shop-principal'>
                        <ul class='characteristics-shop-principal'>
                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-size.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>SIZE</span>
                            </li>
                            <p class='namesProduct-shop'>MAG401QR MSI 40" (101.6 cm)</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-resolution.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>RESOLUTION</span>
                            </li>
                            <p class='namesProduct-shop'>2K Resolution PS5™ Optimization
                                FHD @ 120Hz3440x1440 (UWQHD)
                            </p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-time.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>REPONSE TIME</span>
                            </li>
                            <p class='namesProduct-shop'>1ms (MPRT) Adaptive Sync compatible 155Hz</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-weight.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>WEIGHT</span>
                            </li>
                            <p class='namesProduct-shop'>10.3 kg / 12.4 kg
                                8 kg (Without stand)</p>
                        </ul>
                    </div>
                </div>
            </article>

            <article class='products-container-shop-principal'>
                <div class='feature-products-container-shop-principal'>
                    <p class='pt-shop'>
                        <span class='secondPc-feature-container-shop-principal'>BOLD</span>
                    </p>
                    <p class='pt2-shop'>
                        <span class='title2-feature-container-shop-principal'>GATE</span>
                    </p>

                    <p class='secondPc-performance-shop-principal'>OPTIMAL PERFORMANCE</p>
                    <ul class='ul-container-shop-principal'>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Premium Custom PC</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Ready for High - Performance</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Premium Full Steel Chassis</span>
                        </li>
                    </ul>

                    <h3 class='from'>from</h3>
                    <p class='p-shop'>
                        <span class='cost-shop-principal'>$4,999</span> <span class='stock-shop-principal'>In
                            stock</span>
                    </p>

                    <div class='buy-btns-container-shop-principal'>
                        <button class='secondPc-add-btn-container-shop-principal btn-agregar' data-price="4999"
                            data-name="RYZEN CG32UQ" data-img="./principalWebsite/3frame/monitors/m2.png">Add to
                            Cart</button>
                        <button class='secondPc-buy-btn-container-shop-principal'>Buy it</button>
                    </div>
                </div>

                <div class='margin-container-shop-principal'>
                    <div class='img-container-shop-principal'>
                        <img class='pc1-shop-principal' src="./principalWebsite/3frame/monitors/m2.png" alt="" />
                    </div>

                    <div class='characteristics-container-shop-principal'>
                        <ul class='characteristics-shop-principal'>
                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-size.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>SIZE</span>
                            </li>
                            <p class='namesProduct-shop'>
                                CG32UQ Panel Size (inch) : 31.5Aspect Ratio : 16:9
                                Display Viewing Area (H x V) : 698.43 x 92.85 mm</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-resolution.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>RESOLUTION</span>
                            </li>
                            <p class='namesProduct-shop'>Resolution : 3840x2160 HDR (High Dynamic Range) Support : HDR10
                            </p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-time.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>REPONSE TIME</span>
                            </li>
                            <p class='namesProduct-shop'>Response Time : 5ms(GTG)
                                Refresh Rate (Max) : 60Hz</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-weight.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>WEIGHT</span>
                            </li>
                            <p class='namesProduct-shop'>
                                Net Weight : 9.1 kg (20.06 lbs)
                                Net Weight without Stand : 7.1 kg (15.65 lbs)
                                Gross Weight : 13.4 kg (29.54 lbs)</p>
                        </ul>
                    </div>
                </div>
            </article>

            <article class='products-container-shop-principal'>
                <div class='feature-products-container-shop-principal'>
                    <p class='pt-shop'>
                        <span class='thirdPc-feature-container-shop-principal'>HYPER</span>
                    </p>
                    <p class='pt2-shop'>
                        <span class='title2-feature-container-shop-principal'>GATE</span>
                    </p>

                    <p class='thirdPc-performance-shop-principal'>ADVANCE PERFORMANCE</p>
                    <ul class='ul-container-shop-principal'>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>NZXT Extreme PC</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Ready for Extreme - Performance</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Premium Full Steel Chassis</span>
                        </li>
                    </ul>

                    <h3 class='from'>from</h3>
                    <p class='p-shop'>
                        <span class='cost-shop-principal'>$7,999</span> <span class='stock-shop-principal'>In
                            stock</span>
                    </p>

                    <div class='buy-btns-container-shop-principal'>
                        <button class='thirdPc-add-btn-container-shop-principal btn-agregar' data-price="7999"
                            data-name="SAMSUNG 49'' Odyssey G9 G95C 240Hz"
                            data-img="./principalWebsite/3frame/monitors/m3.png">Add to Cart</button>
                        <button class='thirdPc-buy-btn-container-shop-principal'>Buy it</button>
                    </div>
                </div>

                <div class='margin-container-shop-principal'>
                    <div class='img-container-shop-principal'>
                        <img class='pc1-shop-principal' src="./principalWebsite/3frame/monitors/m3.png" alt="" />
                    </div>

                    <div class='characteristics-container-shop-principal'>
                        <ul class='characteristics-shop-principal'>
                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-size.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>SIZE</span>
                            </li>
                            <p class='namesProduct-shop'> SAMSUNG 49" Odyssey G9 G95C 240Hz</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-resolution.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>RESOLUTION</span>
                            </li>
                            <p class='namesProduct-shop'>DQHD (5120 x 1440) Resolution for an Immersive Visual
                                Experience
                            </p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-time.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>REPONSE TIME</span>
                            </li>
                            <p class='namesProduct-shop'>240Hz refresh rate and 1µs (GtG) response time for smooth
                                gaming</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/monitors/icn-weight.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>WEIGHT</span>
                            </li>
                            <p class='namesProduct-shop'>Net Weight : 9.1 kg (20.06 lbs) Net Weight without Stand : 7.1
                                kg (15.65 lbs) Gross Weight : 13.4 kg (29.54 lbs)</p>
                        </ul>
                    </div>
                </div>
            </article>
        </section>

        <!-- gaming chairs -->
        <section class="pc-container-shop-principal tabcontent" id="gamingChairBtn">
            <article class='products-container-shop-principal'>
                <div class='feature-products-container-shop-principal'>
                    <p class='pt-shop'>
                        <span class='secondPc-feature-container-shop-principal'>BOLD</span>
                    </p>
                    <p class='pt2-shop'>
                        <span class='title2-feature-container-shop-principal'>GATE</span>
                    </p>

                    <p class='secondPc-performance-shop-principal'>OPTIMAL PERFORMANCE</p>
                    <ul class='ul-container-shop-principal'>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Premium Custom PC</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Ready for High - Performance</span>
                        </li>
                        <li class='offer-ul-container-shop-principal'>
                            <i class="uil uil-check-circle icon"></i>
                            <span class='span-li-shop-principal'>Premium Full Steel Chassis</span>
                        </li>
                    </ul>

                    <h3 class='from'>from</h3>
                    <p class='p-shop'>
                        <span class='cost-shop-principal'>$11,999</span> <span class='stock-shop-principal'>In
                            stock</span>
                    </p>

                    <div class='buy-btns-container-shop-principal'>
                        <button class='secondPc-add-btn-container-shop-principal btn-agregar' data-price="11999"
                            data-name="MSI Chair Gaming"
                            data-img="./principalWebsite/3frame/gamingChairs/chair-1.png">Add to Cart</button>
                        <button class='secondPc-buy-btn-container-shop-principal'>Buy it</button>
                    </div>
                </div>

                <div class='margin-container-shop-principal'>
                    <div class='img-container-shop-principal'>
                        <img class='pc1-shop-principal' src="./principalWebsite/3frame/gamingChairs/chair-1.png"
                            alt="" />
                    </div>

                    <div class='characteristics-container-shop-principal'>
                        <ul class='characteristics-shop-principal'>
                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/gamingChairs/ic-weight.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>RECOMMENDED WEIGHT</span>
                            </li>
                            <p class='namesProduct-shop'>
                                136 kg / 299 lbs</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/gamingChairs/ic-height.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>RECOMMENDED HEIGHT</span>
                            </li>
                            <p class='namesProduct-shop'>156.5cm - 194cm
                            </p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/gamingChairs/ic-color.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>CHAIR COVER COLOR</span>
                            </li>
                            <p class='namesProduct-shop'>Black and Green</p>

                            <li class='li-characteristics-shop-principal'>
                                <img class='featureIcn' src="./principalWebsite/3frame/gamingChairs/ic-cover.png"
                                    alt='Processor Icon' />
                                <span class='span-li-characteristic-shop-principal'>CHAIR COVER MATERIAL</span>
                            </li>
                            <p class='namesProduct-shop'>
                                Solvent-Free Leatherette</p>
                        </ul>
                    </div>
                </div>
            </article>
        </section>
    </section>

    <!-- support -->
    <section class='father-container-support-principal' id="support">
        <article class='son-container-support-principal'>
            <div class='container-support-principal'>
                <img class='img-support-principal' src="./principalWebsite/4frame/notepad.png" alt="" />
                <div class='normal-div'>
                    <span class='first-title-support-principal'>5 Year</span><span
                        class='first-title2-support-principal'>Warranty</span>
                </div>
                <p class='description-support-principal'>We offer a warranty of up to 5 for labor & up to 10 years for
                    parts replacement</p>
            </div>

            <div class='container-support-principal'>
                <img class='img-support-principal' src="./principalWebsite/4frame/diamond.png" alt="" />
                <div class='normal-div'>
                    <span class='second-title-support-principal'>Lifetime</span><span
                        class='second-title2-support-principal'>Support</span>
                </div>
                <p class='description-support-principal'>Our technical support staff is highly knowledgeable deep
                    learning frameworks</p>
            </div>
        </article>
    </section>

    <!-- accessories -->
    <section class='father-container-accessories-principal' id="accessories">
        <article class='titles-container-accessoris-principal'>
            <h4 class='title-accessories-principal'>Heavy On Power</h4>
            <div class='normal-div'>
                <span class='subTitle-accessories-principal'>GAMING</span><span
                    class='subTitle2-accessories-principal'>SETUP</span>
            </div>
            <div class='simple-div'>
                <p class='description-accessories-principal'>There are many variations of passages of Lorem Ipsum
                    available, but the
                    majority have suffered altration in some form, by injected
                </p>
            </div>
        </article>

        <div class='imgs-container-accessories-principal'>
            <img class="img-pc-accessories" src="./principalWebsite/5frame/ac1.png" alt="" />
            <img class="img-pc-accessories" src="./principalWebsite/5frame/ac2.png" alt="" />
            <img class="img-pc-accessories" src="./principalWebsite/5frame/ac3.png" alt="" />
            <img class="img-pc-accessories" src="./principalWebsite/5frame/ac4.png" alt="" />
            <img class="img-pc-accessories" src="./principalWebsite/5frame/ac5.png" alt="" />
            <img class="img-pc-accessories" src="./principalWebsite/5frame/ac6.png" alt="" />
            <img class="img-pc-accessories" src="./principalWebsite/5frame/ac7.png" alt="" />
            <img class="img-pc-accessories" src="./principalWebsite/5frame/ac8.png" alt="" />
        </div>
    </section>

    <!-- shipping -->
    <section class='father-container-shipping-principal' id="shipping">
        <article class='son-container-shipping-principal'>
            <div class='imgs-container-shipping-principal'>
                <div class='son-img-container-shipping-principal'>
                    <img class='img-shipping-principal' src="./principalWebsite/6frame/sh1.png" alt="" />
                </div>
                <div class='son-img-container-shipping-principal'>
                    <img class='img2-shipping-principal' src="./principalWebsite/6frame/sh2.png" alt="" />
                    <img class='img3-shipping-principal' src="./principalWebsite/6frame/sh3.png" alt="" />
                </div>
            </div>

            <div class='info-container-shipping-principal'>
                <p class='title-container-shipping-principal'>
                    <span class='title-shipping-principal'>POWER</span><span class='title2-shipping-principal'>AND
                        BEAUTY</span>
                </p>
                <h4 class='subtitle-shipping-principal'>IN ONE CASE</h4>
                <p class='description-shipping-principal'>
                    Welcome to our premier destination for computing essentials, where power meets beauty in every
                    product we offer and service we provide. Our carefully curated selection of computing goods isn't
                    just about fulfilling your technical needs; it's about delivering performance that exceeds
                    expectations, housed within designs that are nothing short of stunning. From high-demand computing
                    devices that boast unparalleled efficiency and speed, to technical and maintenance services that
                    ensure your setup is always in prime condition, we ensure that every interaction with our products
                    and services adds a touch of elegance to your digital experience. Discover the perfect blend of
                    power and beauty with us, where your computing desires are met with sophistication and prowess.
                </p>
            </div>
        </article>
    </section>

    <!-- brands -->
    <section class='slider'>
        <article class='slide-track'>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b1.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b2.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b3.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b4.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b5.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b6.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b7.png" alt="" />
            </div>

            <!-- Repetidos para simular un loop infinito, según el diseño original -->
            <div class='slide'>
                <img src="./principalWebsite/7frame/b1.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b2.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b3.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b4.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b5.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b6.png" alt="" />
            </div>
            <div class='slide'>
                <img src="./principalWebsite/7frame/b7.png" alt="" />
            </div>
        </article>
    </section>

    <!-- footer -->
    <footer class='pie-pagina' id="contact">
        <div class='grupo-1'>
            <div class='box'>
                <figure>
                    <a href="#">
                        <img src="./principalWebsite/8frame/lgNest.png" alt="" />
                    </a>
                </figure>
            </div>
            <div class='box'>
                <h2>ABOUT US</h2>
                <p>We are a company with the most avant-garde tools and technology in Nicaragua, bringing excellent
                    quality of products and services to our clients, taking into account their needs, requirements and
                    expectations.</p>
            </div>
            <div class='box'>
                <h2>FOLLOW US</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com" class="icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.twitter.com" class="icon twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com" class="icon youtube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class='grupo-2'>
            <small>&copy; 2024 <b>LogicNest System</b> - All Rights Reserved</small>
        </div>
    </footer>

</body>
<script src="shop.js"></script>
<script src="main.js"></script>

</html>