<div class="py-3 mb-5 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-4">
                <h2 class="site-section-heading text-center"><?php _e('Order products','photosBlog') ?></h2>
            </div>



            <div class="col-6 d-flex flex-wrap">
                <?php if( get_locale() == 'fa_IR') dynamic_sidebar('order-form-fa');else dynamic_sidebar('order-form-en') ?>
            </div>

        </div>
    </div>
</div>