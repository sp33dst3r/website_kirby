<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

</div>
<?php /*
  <footer class="footer">
    <a href="<?= url() ?>">&copy;
        <?= date('Y') ?> /
            <?= $site->title() ?>
                </a>

                <?php if ($about = page('about')): ?>
                    <nav class="social">
                        <?php foreach ($about->social()->toStructure() as $social): ?>
                            <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
                            <?php endforeach ?>
                    </nav>
                    <?php endif ?>
                        </footer>
                        */?>

    <footer>

        <div id="footer">&copy;2013-2016 BeMo Academic Consulting Inc. All rights reserved.
            <a href="http://www.cdainterview.com/disclaimer-privacy-policy.html" target="_blank">
                <span style="text-decoration:underline;">Disclaimer & Privacy Policy</span>
            </a>
            <a href="#" id="rw_email_contact">
                <span style="text-decoration:underline;">Contact Us</span>
            </a>
            <script type="text/javascript">
                var _rwObsfuscatedHref0 = "mai";
                var _rwObsfuscatedHref1 = "lto";
                var _rwObsfuscatedHref2 = ":in";
                var _rwObsfuscatedHref3 = "fo@";
                var _rwObsfuscatedHref4 = "bem";
                var _rwObsfuscatedHref5 = "oac";
                var _rwObsfuscatedHref6 = "ade";
                var _rwObsfuscatedHref7 = "mic";
                var _rwObsfuscatedHref8 = "con";
                var _rwObsfuscatedHref9 = "sul";
                var _rwObsfuscatedHref10 = "tin";
                var _rwObsfuscatedHref11 = "g.c";
                var _rwObsfuscatedHref12 = "om";
                var _rwObsfuscatedHref = _rwObsfuscatedHref0 + _rwObsfuscatedHref1 + _rwObsfuscatedHref2 + _rwObsfuscatedHref3 + _rwObsfuscatedHref4 + _rwObsfuscatedHref5 + _rwObsfuscatedHref6 + _rwObsfuscatedHref7 + _rwObsfuscatedHref8 + _rwObsfuscatedHref9 + _rwObsfuscatedHref10 + _rwObsfuscatedHref11 + _rwObsfuscatedHref12;
                document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;
            </script>
        </div>

        <div id="socialicons">
            <div id="socialicons1"></div>
            <a class="social" href="https://www.facebook.com/bemoacademicconsulting">F</a>
            <a class="social" href="https://twitter.com/BeMo_AC">L</a>
        </div>

    </footer>

    <a href="#" class="scrollup" style="display: inline;">Scroll</a>

</body>

</html>