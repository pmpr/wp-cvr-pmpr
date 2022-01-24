<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec51b10e4f             |
    |_______________________________________|
*/
 defined("\x41\x42\x53\120\101\124\110") || exit; $show_shipping = !wc_ship_to_billing_address_only() && $umwqusowiqmyseom->needs_shipping_address(); ?>
<section class="woocommerce-customer-details">
	
	<?php  if (!$show_shipping) { goto sqwuqegeiisoiiuq; } ?>

    <section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
        <div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">
			
			<?php  sqwuqegeiisoiiuq: ?>

            <h2 class="woocommerce-column__title h4"><?php  esc_html_e("\102\151\154\x6c\x69\156\x67\x20\141\x64\x64\162\x65\x73\163", PR__THM__PMPR); ?></h2>

            <address>
				<?php  echo wp_kses_post($umwqusowiqmyseom->get_formatted_billing_address(esc_html__("\x4e\57\101", PR__THM__PMPR))); ?>
				
				<?php  if (!$umwqusowiqmyseom->get_billing_phone()) { goto uscokkmquayiukag; } ?>
                    <p class="woocommerce-customer-details--phone"><?php  echo esc_html($umwqusowiqmyseom->get_billing_phone()); ?></p>
				<?php  uscokkmquayiukag: ?>
				
				<?php  if (!$umwqusowiqmyseom->get_billing_email()) { goto ykqsuiyyosyeyscc; } ?>
                    <p class="woocommerce-customer-details--email"><?php  echo esc_html($umwqusowiqmyseom->get_billing_email()); ?></p>
				<?php  ykqsuiyyosyeyscc: ?>
            </address>
			
			<?php  if (!$show_shipping) { goto ugogoekeckgcmuaw; } ?>

        </div>

        <div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
            <h2 class="woocommerce-column__title h4"><?php  esc_html_e("\123\150\x69\x70\x70\151\x6e\x67\x20\141\x64\x64\x72\x65\x73\x73", PR__THM__PMPR); ?></h2>
            <address>
				<?php  echo wp_kses_post($umwqusowiqmyseom->get_formatted_shipping_address(esc_html__("\x4e\57\101", PR__THM__PMPR))); ?>
            </address>
        </div><!-- /.col-2 -->

    </section>

<?php  ugogoekeckgcmuaw: ?>
	
	<?php  do_action("\x77\x6f\x6f\143\x6f\155\155\x65\162\x63\x65\x5f\157\x72\x64\145\x72\x5f\x64\x65\164\x61\151\x6c\163\x5f\141\146\x74\x65\x72\x5f\x63\165\163\x74\157\x6d\145\x72\137\144\145\164\141\x69\154\x73", $umwqusowiqmyseom); ?>

</section>
