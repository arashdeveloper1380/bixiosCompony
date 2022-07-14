<section class="tf-space flat-counter tf-counter style">
  <div class="container">
    <div class="row count-row">
      <?php 
        $group_count_item = myprefix_get_option('group_count_item');
        foreach($group_count_item as $value) :?>
        <div class="col-lg-3 col-md-6">
          <div class="counter-box">
            <div
              class="content wow fadeInUp"
              data-wow-delay="0ms"
              data-wow-duration="1500ms"
            >
              <div
                class="number number-style"
                data-speed="2000"
                data-to="<?= $value['number'] ?>"
                data-inviewport="yes"
              >
                <?= $value['number'] ?>
              </div>
              <h3 class="heading"><?= $value['title'] ?></h3>
              <div class="mark"></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>