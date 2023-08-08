<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">

        <!-- boton de enlace dashboard -->
        <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? 'dashboard__enlace--actual' : '' ?>">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Inicio
            </span>
        </a>

        <!-- boton de enlace cursos  -->
        <a href="/admin/cursos" class="dashboard__enlace <?php echo pagina_actual('/cursos') ? 'dashboard__enlace--actual' : ''  ?>">
            <i class="fa-solid fa-book dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Cursos
            </span>
        </a>

        <!-- boton de enlace de eventos -->
        <a href="/admin/eventos" class="dashboard__enlace">
            <i class="fa-solid fa-suitcase-rolling"></i>
            <span class="dashboard__menu-texto">
                Categorias
            </span>
        </a>

        <!-- boton de enlace a etiquetas -->
        <a href="/admin/regalo" class="dashboard__enlace">
            <i class="fa-solid fa-tag"></i>
            <span class="dashboard__menu-texto">
                Etiquetas
            </span>
        </a>

        
        <!-- boton de enlace a registrados (Pueden ser todos los usuarios) -->
        <a href="/admin/registrados" class="dashboard__enlace">
            <i class="fa-solid fa-users"></i>
            <span class="dashboard__menu-texto">
                Registrados
            </span>
        </a>

        <!-- boton de enlace a ver mis cursos -->
        <a href="/admin/registrados" class="dashboard__enlace">
            <i class="fa-solid fa-users"></i>
            <span class="dashboard__menu-texto">
                Mis cursos
            </span>
        </a>

        <!-- boton de enlace a crear curso -->
        <a href="/admin/registrados" class="dashboard__enlace">
            <i class="fa-solid fa-users"></i>
            <span class="dashboard__menu-texto">
                Crear curso
            </span>
        </a>
    </nav>
</aside>