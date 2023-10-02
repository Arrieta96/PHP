# TEMA: PHP embebido y HTML: mostrando texto dinamico

<p>Esto va a ser ignorado por PHP y mostrado por el navegador.</p>
<?php echo 'Mientras que esto va a ser interpretado.'; ?>
<p>Esto tambien sera ignorado por PHP y mostrado pro el navegador</p>



<?php if ($expresion == true): ?>
    Esto se mostrara si la expresion es verdadera.
<?php else: ?>
    En caso contrario se mostrara esto.
<?php endif; ?>

