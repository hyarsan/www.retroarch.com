<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 description">
                <p>RetroArch is a frontend for emulators, game engines and media players.</p>

                <p>It enables you to run classic games on a wide range of computers and consoles through its slick graphical interface. Settings are also unified so configuration is done once and for all.</p>

                <p>People like it for its advanced features like shaders, netplay or rewinding.</p>

                <a id="get-ra" href="index.php?page=platforms" class="btn btn-ra btn-lg">Get RetroArch</a>
            </div>
            <div class="col-md-7 col-sm-6">
                <img id="bg" src="images/bg.png">
            </div>
        </div>
    </div>
</div>

<div id="features">
    <div class="container">
        <h1>Features</h1>

        <div id="features-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#features-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#features-carousel" data-slide-to="1"></li>
                <li data-target="#features-carousel" data-slide-to="2"></li>
                <li data-target="#features-carousel" data-slide-to="3"></li>
                <li data-target="#features-carousel" data-slide-to="4"></li>
                <li data-target="#features-carousel" data-slide-to="5"></li>
                <li data-target="#features-carousel" data-slide-to="6"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item interface active">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <h2>A Polished Interface</h2>
                            <p>Browse your game collection through a beautiful clone of the PS3 XMB.</p>
                            <p>After scanning your collection, games will be sorted by system.</p>
                            <p>The menu supports thumbnails and features nice animated backgrounds. </p>
                            <a class="btn btn-ra pull-right" href="index.php?page=interface">Learn more about the interface</a>
                        </div>
                    </div>
                </div>
                <div class="item cross-platform">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <h2>Cross platform</h2>
                            <p>RetroArch can run on the usual platforms like Windows, Mac OS X and Linux.</p>
                            <p>It also runs on Apple and Android for tablets and phones, as well as on game consoles like PS3, PSP, PS Vita, Wii, Wii U and more!</p>
                            <a class="btn btn-ra pull-right" href="index.php?page=platforms">See the list of all supported platforms</a>
                        </div>
                    </div>
                </div>
                <div class="item customizable">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <h2>Highly Configurable</h2>
                            <p>Our advanced settings interface lets you tweak every possible option about how the games are run and displayed.</p>
                            <p>Of course every setting has a sane default so you can get started fast.</p>
                            <a class="btn btn-ra pull-right" href="#">Learn how to configure RetroArch</a>
                        </div>
                    </div>
                </div>
                <div class="item joypad-autoconfig">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <h2>Joypad Auto Configuration</h2>
                            <p>Common joypads are automatically configured when plugged, just like on a real game console.</p>
                            <p>Ideal to start a multiplayer game when a friend visit with his own joypad.</p>
                            <p>You can also configure everything manually to assign special actions to combos.</p>
                            <a class="btn btn-ra pull-right" href="index.php?page=joypad-autoconfig">Learn more about joypad configuration</a>
                        </div>
                    </div>
                </div>
                <div class="item shaders">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <h2>Shaders</h2>
                            <p>Shaders are efficient graphical filters that can greatly improve the rendering of old games.</p>
                            <p>They can also be used to replicate the look and feel of old CRT monitors.</p>
                            <p>You can even stack them to create your own effect. The possibilities are infinite.</p>
                            <a class="btn btn-ra pull-right" href="index.php?page=shaders">Learn more about shaders</a>
                        </div>
                    </div>
                </div>
                <div class="item achievements">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <h2>Achievements</h2>
                            <p>Unlock achievements on your favorite classic games!</p>
                            <p>RetroArch integrates with the RetroAchievements service to provide a trophees unlocking mechanism similar to modern web consoles.</p>
                            <a class="btn btn-ra pull-right" href="index.php?page=achievements">Learn more about achievements</a>
                        </div>
                    </div>
                </div>
                 <div class="item netplay">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <h2>Netplay</h2>
                            <p>Host or join a network gaming session.</p>
                            <p>Rediscover the joy of multiplayer games using RetroArch builtin netplay lobby.</p>
                            <p>You can also use the spectator mode to watch others play.</p>
                            <a class="btn btn-ra pull-right" href="#">Learn more about netplay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="news">
    <div class="container">
        <h1>News</h1>

        <div class="row">
            <?php $x = simplexml_load_file("https://www.libretro.com/index.php/feed/"); ?>
            <?php foreach(range(0, 3) as $i): ?>
                 <?php $item = $x->channel->item[$i]; ?>
                 <article class="col-md-6 clearfix">
                     <?php $dc = $item->children('http://purl.org/dc/elements/1.1/'); ?>
                     <h2><?=$item->title?></h2>
                     <p class="metadata">
                         <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?=$item->pubDate?> &nbsp;&nbsp;&nbsp;
                         <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?=$dc->creator?>
                     </p>
                     <p><?=strip_tags($item->description)?></p>
                     <a class="btn btn-more pull-right" href="<?=$item->link?>">Continue reading <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></a>
                 </article>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div id="tutorial">
    <div class="container">

        <h1>Tutorial Videos</h1>

        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="embed-responsive embed-responsive-16by9 video">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iJbsp-ri2Gs" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="embed-responsive embed-responsive-16by9 video">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n6aF0wNcm7E" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="embed-responsive embed-responsive-16by9 video">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_0rw36mA9mM" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="embed-responsive embed-responsive-16by9 video">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oh7hhoOBg54" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="embed-responsive embed-responsive-16by9 video">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LWiyzXWL4sg" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>
</div>
