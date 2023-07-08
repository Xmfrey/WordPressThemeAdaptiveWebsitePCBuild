<footer class="footer" id="footer">
  <div class="footer__wrapper">
    <div class="footer__body">
      <div class="footer__header-block">
        <h2 class="footer__section-name section-name section-name--center">
          <?= CFS()->get('footer_head'); ?>
        </h2>
        <p class="footer__section-description section-description section-description--center">
          <?= CFS()->get('footer_desc'); ?>
        </p>
      </div>
      <form class="footer__form" action="#">
        <div class="footer__form-body">
          <input class="footer__form-input" type="email" name="email" placeholder="E-mail" maxlength="60" required />
          <button class="footer__form-button button button--subscribe">
            <?= CFS()->get('footer_button-text'); ?>
          </button>
        </div>
      </form>
      <div class="footer__social-items">
        <?php
        $loop = CFS()->get('footer_contacts');
        foreach ($loop as $row) {
          ?>
          <a class="footer__social-item" href="<?= $row['footer_contacts_link']['url'] ?>"
            target="<?= $row['footer_contacts_link']['target'] ?>"><img class="footer__social-icon"
              src="<?= $row['footer_contacts_image'] ?>" alt="<?= $row['footer_contacts_image-name'] ?>" /></a>
          <?php
        }
        ?>
      </div>
      <p class="footer__copy">
        <?= CFS()->get('footer_ending'); ?>
      </p>
    </div>
  </div>
</footer>

<div class="top" title="Наверх">
  <div class="triangle-top"></div>
</div>

<?php wp_footer(); ?>
</body>

</html>