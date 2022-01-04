<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f0edbe3b             |
    |_______________________________________|
*/
 defined("\x41\102\123\120\101\124\x48") || exit; $page_name = is_cart() ? "\143\x61\162\164" : "\x63\150\145\143\x6b\x6f\165\x74"; ?>

<div class="card border-gray-300 mb-6">
    <div class="card-body">
	    <?php  do_action("\x77\x6f\157\143\x6f\155\x6d\x65\x72\x63\x65\137\x62\145\146\157\x72\x65\137\x63\x6f\x75\160\x6f\x6e"); ?>
        <span><?php  echo apply_filters("\x77\x6f\157\143\157\155\x6d\145\162\143\x65\137{$page_name}\137\x63\x6f\165\x70\157\156\x5f\x6d\145\x73\163\141\x67\145", esc_html__("\x43\157\x75\160\157\x6e", PR__THM__PMPR)); ?></span>
        <div class="input-group mb-2">
            <input type="text" name="coupon_code" class="input-text form-control" id="coupon_code" value="" />
            <div class="input-group-append">
                <button type="submit" class="button btn btn-outline-primary" name="apply_coupon" value="<?php  esc_attr_e("\101\x70\160\x6c\x79\40\x63\x6f\x75\x70\x6f\156", PR__THM__PMPR); ?>">
				    <?php  esc_html_e("\101\x70\160\154\x79\x20\143\x6f\165\160\157\156", PR__THM__PMPR); ?>
                </button>
            </div>
        </div>
        <p class="mb-0 font-13 text-muted"><?php  esc_html_e("\111\x66\x20\171\157\165\x20\x68\141\x76\145\x20\141\x20\x63\x6f\x75\x70\157\x6e\40\143\x6f\x64\x65\x2c\40\x70\154\x65\x61\163\145\x20\x61\x70\160\x6c\171\40\x69\x74\x20\141\x62\x6f\x76\x65\56", PR__THM__PMPR); ?></p>
	    <?php  do_action("\x77\157\x6f\x63\157\155\155\x65\x72\x63\145\137\x61\x66\x74\x65\162\137\143\x6f\x75\160\157\156"); ?>
    </div>
</div>
