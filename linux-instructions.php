<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Installing on Linux</h1>
                <p>To install RetroArch on Linux, we recommand using your distribution default package manager.</p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
        <h2>Ubuntu</h2>
        <p>Stable version:</p>
        <pre>sudo add-apt-repository ppa:libretro/stable && sudo apt-get update && sudo apt-get install retroarch</pre>
        <p>Testing version:</p>
        <pre>sudo add-apt-repository ppa:libretro/testing && sudo apt-get update && sudo apt-get install retroarch</pre>
        <h2>Arch Linux</h2>
        <p>Stable version:</p>
        <pre>sudo pacman -Sy retroarch</pre>
        <p>Git version:</p>
        <pre>yaourt -Sy retroarch-git</pre>
        <h2><a href="http://flatpak.org">Flatpak</a></h2>
        <p>Stable version, hosted by <a href="https://flathub.org">Flathub</a>:</p>
        <pre>flatpak remote-add --if-not-exists flathub https://flathub.org/repo/flathub.flatpakrepo</pre>
        <pre>flatpak install flathub org.libretro.RetroArch</pre>
    </div>
</div>
