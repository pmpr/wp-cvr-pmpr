<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec51b10e4f             |
    |_______________________________________|
*/
 defined("\101\x42\123\120\x41\x54\x48") || exit; $page_name = is_cart() ? "\143\141\162\164" : "\x63\x68\x65\143\x6b\x6f\165\164"; ?>

<div class="card border-gray-300 mb-6">
    <div class="card-body">
	    <?php  do_action("\x77\157\157\143\157\x6d\155\145\162\143\x65\x5f\x62\145\146\x6f\x72\x65\x5f\x63\157\165\x70\157\x6e"); ?>
        <span><?php  echo apply_filters("\167\157\x6f\x63\x6f\x6d\x6d\x65\162\143\x65\x5f{$page_name}\x5f\143\157\165\160\157\156\x5f\x6d\145\163\163\x61\x67\145", esc_html__("\x43\x6f\x75\x70\x6f\x6e", PR__THM__PMPR)); ?></span>
        <div class="input-group mb-2">
            <input type="text" name="coupon_code" class="input-text form-control" id="coupon_code" value="" />
            <div class="input-group-append">
                <button type="submit" class="button btn btn-outline-primary" name="apply_coupon" value="<?php  esc_attr_e("\101\x70\x70\154\171\x20\x63\x6f\165\x70\x6f\156", PR__THM__PMPR); ?>">
				    <?php  esc_html_e("\101\160\x70\154\171\40\143\x6f\165\x70\157\156", PR__THM__PMPR); ?>
                </button>
            </div>
        </div>
        <p class="mb-0 font-13 text-muted"><?php  esc_html_e("\111\x66\x20\x79\x6f\x75\x20\x68\x61\x76\145\x20\141\x20\143\157\x75\160\x6f\x6e\x20\x63\157\x64\x65\x2c\x20\x70\x6c\145\x61\163\145\40\141\x70\x70\x6c\x79\40\x69\164\x20\x61\x62\157\x76\x65\x2e", PR__THM__PMPR); ?></p>
	    <?php  do_action("\x77\157\x6f\143\x6f\155\155\145\162\143\145\x5f\x61\x66\x74\x65\x72\137\x63\x6f\165\160\x6f\156"); ?>
    </div>
</div>
