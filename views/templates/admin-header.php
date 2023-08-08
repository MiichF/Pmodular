<header class="dashboard__header">
    <div class="dashboard__header--grid">
        
        <!-- Logo con enlace a página principal -->
        <a href="/">
            <h2 class="dashboard__logo">
                &#60;StudentWebCamp />
            </h2>          
        </a>

        <!-- Boton Submit para cerrar sesión -->
        <nav class="dashboard__nav">
            <a href="/"> <input type="submit" value="Página principal" class="dashboard__submit--logout"></a>
            <form method="POST" action="/logout" class="dashboard__form">
                <input type="submit" value="Cerrar Sesión" class="dashboard__submit--logout">
            </form>
        </nav>

    </div>
</header>