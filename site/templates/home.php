<?php
/**
 * Templates render the content of your pages.
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page.
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This home template renders content from others pages, the children of the `photography` page to display a nice gallery grid.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>

    <section id="container">
        <?php
        if($page->image()):?>
            <div class="banner video_banner">
                <div id="feature" class="bghide"><img width="167" height="100" id="featureImg" src="<?=$page->image()->url()?>">
                    <div id="extraContainer11">
                        <div class="videoWrapper">

                        </div>
                    </div>

                    <div id="extraContainer1">
                    </div>

                    <div class="banner-text"></div>

                    <?php if($page->main_text()): ?>
                        <div id="extraContainer9">
                            <div id="myExtraContent9">
                                <?=$page->main_text()->value()?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

        <?php endif; ?>

        <div id="padding">


            <?= $page->text()->blocks() ?>
        </div>
    </section>

<?php snippet('footer') ?>