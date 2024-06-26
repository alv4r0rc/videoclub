<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#9820;</span> Videoclub</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php if( true || Auth::check() ): ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo e(Request::is('catalogo') && ! Request::is('catalogo/create')? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('/catalogo')); ?>">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Catálogo
                        </a>
                    </li>
                    <li class="nav-item <?php echo e(Request::is('catalogo/create') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('/catalogo/create')); ?>">
                            <span>&#10010</span> Nueva película
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="<?php echo e(url('/logout')); ?>" method="POST" style="display:inline">
                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</nav><?php /**PATH C:\Users\rodri\videoclub-alvaro\resources\views/partials/navbar.blade.php ENDPATH**/ ?>