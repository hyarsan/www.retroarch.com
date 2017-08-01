 <?php $version = "1.6.3"; ?>

<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Cross Platform</h1>
                <p>RetroArch can run on the usual platforms like Windows, Mac OS X and Linux.</p>
                <p>It also runs on iOS and Android for tablets and phones, as well as on game consoles like PS3, PSP, PS Vita, Wii, Wii U and more!</p>
                <p>The current stable version is: <?php echo $version; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
        <h2>List of supported platforms</h2>

        <div class="row platforms">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/linux.png">
                    <h4>Linux</h4>
                    <a href="https://www.libretro.com/index.php/retroarch-with-flatpak/">Install with Flatpak</a>
                    <a href="index.php?page=linux-instructions">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/ubuntu/">Compilation instructions (Ubuntu)</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windows.png">
                    <h4>Windows 10 / 8 / 7 / Vista</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86_64/RetroArch-1.6.3-x64-setup.exe" title="If you are unsure which version to install for your Windows computer, chances are you will want to pick this one. Use this if you are running a 64bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation.">Installer (64bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86/RetroArch-1.6.3-x86-setup.exe" title="If you are unsure which version to install for your Windows computer, chances are you will want to pick this one. Use this if you are running a 32bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation.">Installer (32bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86_64/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a 64bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer.">Download (64bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a 32bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer.">Download (32bit)</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/windows/">Compilation instructions (Windows Vista and later - MinGW-W64 MSYS2)</a>
                </div>
            </div>
                    <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windowsxp.png">
                    <h4>Windows XP and later</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86/RetroArch-1.6.3-msvc2010-x86-setup.exe" title="Use this is if you are running a computer with Windows XP. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Installer (32bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows XP. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Download (32bit)</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/windowsXP/">Compilation instructions (Windows XP - Visual Studio 2010)</a>
                </div>
            </div>
                         <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windows98.png">
                    <h4>Windows 98 SE / ME / 2000</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2005/x86/RetroArch-1.6.3-msvc2005-x86-setup.exe" title="Use this is if you are running a computer with Windows XP. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Installer (32bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2005/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows XP. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Download (32bit)</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/windows98/">Compilation instructions (Windows 98/2000 - Visual Studio 2005)</a>
                </div>
            </div>
     </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/apple.png">
                    <h4>Apple macOS / OSX</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86_64/RetroArch.dmg" title="Use this if you are using a Mac with at least MacOS X 10.7 installed or later. This build does not come with Nvidia Cg support.">Download (Intel)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86_64/RetroArchCg.dmg" title="Use this if you are using a Mac with at least MacOS X 10.7 installed or later. This build comes with additional Nvidia Cg support.">Download (Intel) (with Cg support)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/ppc/RetroArch.zip" title="Use this if you are using a PowerMac/Powerbook with MacOS X 10.5 installed.">Download (PowerPC)</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/osx/">Compilation instructions (Intel)</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/osxppc/">Compilation instructions (PowerPC)</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/web.png">
                    <h4>Web Browsers</h4>
                    <a href="https://buildbot.libretro.com/web/">Try it online</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/android.png">
                    <h4>Android</h4>
                    <a href="https://play.google.com/store/apps/details?id=com.retroarch">Google Play</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/android/RetroArch.apk">Download</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/ios.png">
                    <h4>iOS</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/ios/RetroArch.zip">Download</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/ios9/RetroArch.zip">Download (iOS9)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/ios/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/bb.png">
                    <h4>Blackberry</h4>
                    <a href="#">Download (10/Playbook)</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
     </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/ps3.png">
                    <h4>PlayStation 3</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/playstation/ps3/RetroArch.PS3.DEX.PS3.pkg">Download (DEX)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/playstation/ps3/RetroArch.PS3.CEX.PS3.pkg">Download (CEX) (Not available yet)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/ps3/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/psp.png">
                    <h4>PlayStation Portable</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/playstation/psp/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/psp/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/psvita.png">
                    <h4>PlayStation Vita / TV</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/playstation/vita/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/psvita/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/xbox.png">
                    <h4>Xbox</h4>
                    <a href="http://xbins.org/">Download (XDK)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/xbox/">Compilation instructions</a>
                </div>
            </div>
             </div>
            <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/xbox360.png">
                    <h4>Xbox 360</h4>
                    <a href="http://xbins.org/">Download (XeXDK)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/xbox360/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/gc.png">
                    <h4>Gamecube</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/ngc/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/gamecube/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/wii.png">
                    <h4>Wii</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/wii/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/wii/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/wiiu.png">
                    <h4>Wii U</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/wiiu/RetroArch.7z">Download</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/wiiu/RetroArch_rpx.7z">Download (rpx)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/wiiu/">Compilation instructions</a>
                </div>
            </div>
     </div>
     
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/3ds.png">
                    <h4>3DS</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/3ds/RetroArch_3dsx.7z">Download (3dsx)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/3ds/RetroArch_cia.7z">Download (cia)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/3ds/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/rpi.png">
                    <h4>Raspberry Pi</h4>
                    <a href="#">Download</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/pandora.png">
                    <h4>Open Pandora</h4>
                    <a href="#">Download</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/gcw0.png">
                    <h4>GCW Zero</h4>
                    <a href="#">Download</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
        </div>
        <h2>App Store</h2>
        <a href="https://play.google.com/store/apps/details?id=com.retroarch"><img src="images/en_badge_web_generic.png" /></a>
        <h2>Other downloads</h2>
        <ul>
            <li><a href="http://buildbot.libretro.com/stable">Stable builds</a></li>
            <li><a href="http://buildbot.libretro.com/nightly">Nightly builds</a></li>
        </ul>
    </div>
</div>
