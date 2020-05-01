<?php snippet('header') ?>
    <main class="main">
        <div class="banner video_banner">
            <div id="feature" class="bghide"><img id="featureImg" src="<?=$page->image()->url()?>">
                <div id="extraContainer11">
                    <div class="videoWrapper">

                    </div>
                </div>
                <div id="extraContainer1">
                </div>

                <div class="banner-text">

                </div>
            </div>

        </div>

        </div>

        <section id="container">
            <div id="padding">

                <div class="clear"></div>


                <?php if($success): ?>
                    <div class="alert success custom-alert">
                        <p>
                            <?= $success ?>
                        </p>
                    </div>
                <?php else: ?>
                    <?php if (isset($alert['error'])): ?>
                        <div class="custom-alert error">
                            <?= $alert['error'] ?>
                        </div>
                    <?php else: ?>
                        <div class="message-text2">
                            <?= $page->text()->blocks() ?>

                        </div>

                    <?php endif; ?>

                    <form method="post" action="<?= $page->url() ?>" class="centralization">


                        <label for="name">
                            Name *
                            <br>
                        </label>

                        <input type="text" class="form-input-field" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
                        <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>

                        <br>
                        <br>

                        <label for="email">
                            EMAIL ADDRESS *
                            <br>
                        </label>

                        <input type="email" class="form-input-field" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
                        <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>

                        <br>
                        <br>

                        <label for="text">
                            HOW CAN WE HELP YOU? *
                            <br>
                        </label>
                        <div>
                                                        <textarea id="text" cols="38" rows="8" class="form-input-field" name="text" required>
                                                            <?= $data['text']?? '' ?>
                                                        </textarea>
                            <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
                        </div>
                        <div class="centralization form-buttons">
                            <input class="form-input-button" type="reset" name="resetButton" value="Reset">
                            <input class="form-input-button" type="submit" name="submit" name="submitButton" value="Submit">
                        </div>
                    </form>
                <?php endif ?>

                <div class="centralization contact-bottom">
                    <?= $page->text2()->blocks() ?>

                </div>
            </div>
        </section>
    </main>

<?php snippet('footer') ?>