</main>
    <!-- PIE DE PÁGINA -->
<footer class="text-center">
    <div class="container">
    <p>&copy; <?= date('Y') ?> <?= htmlspecialchars(APP_NAME) ?>. Todos los derechos reservados.</p>

    <?php if (SUPPORT_EMAIL !== ''): ?>
        <p>
            Contacto:
            <a href="mailto:<?= htmlspecialchars(SUPPORT_EMAIL) ?>">
                <?= htmlspecialchars(SUPPORT_EMAIL) ?>
            </a>
        </p>
    <?php endif; ?>
</div>

</footer>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript del proyecto -->
<script src="js/main.js"></script>

</body>
</html>
