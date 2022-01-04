<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f0edbe3b             |
    |_______________________________________|
*/
 defined("\x41\102\123\120\x41\124\x48") || exit; $show_shipping = !wc_ship_to_billing_address_only() && $umwqusowiqmyseom->needs_shipping_address(); ?>
<section class="woocommerce-customer-details">
	
	<?php  if (!$show_shipping) { goto qsgqwyqaqiowkmco; } ?>

    <section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
        <div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">
			
			<?php  qsgqwyqaqiowkmco: ?>

            <h2 class="woocommerce-column__title h4"><?php  esc_html_e("\x42\x69\154\x6c\x69\156\x67\40\141\x64\x64\162\x65\x73\x73", PR__THM__PMPR); ?></h2>

            <address>
				<?php  echo wp_kses_post($umwqusowiqmyseom->get_formatted_billing_address(esc_html__("\116\57\101", PR__THM__PMPR))); ?>
				
				<?php  if (!$umwqusowiqmyseom->get_billing_phone()) { goto yqagomygmeoecwey; } ?>
                    <p class="woocommerce-customer-details--phone"><?php  echo esc_html($umwqusowiqmyseom->get_billing_phone()); ?></p>
				<?php  yqagomygmeoecwey: ?>
				
				<?php  if (!$umwqusowiqmyseom->get_billing_email()) { goto qikaewekoecykeou; } ?>
                    <p class="woocommerce-customer-details--email"><?php  echo esc_html($umwqusowiqmyseom->get_billing_email()); ?></p>
				<?php  qikaewekoecykeou: ?>
            </address>
			
			<?php  if (!$show_shipping) { goto eucqomyqykgoiuge; } ?>

        </div>

        <div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
            <h2 class="woocommerce-column__title h4"><?php  esc_html_e("\123\x68\151\x70\160\x69\156\147\40\141\144\x64\x72\145\163\x73", PR__THM__PMPR); ?></h2>
            <address>
				<?php  echo wp_kses_post($umwqusowiqmyseom->get_formatted_shipping_address(esc_html__("\116\x2f\101", PR__THM__PMPR))); ?>
            </address>
        </div><!-- /.col-2 -->

    </section>

<?php  eucqomyqykgoiuge: ?>
	
	<?php  do_action("\167\x6f\157\143\157\155\155\x65\x72\x63\x65\137\x6f\x72\144\145\x72\x5f\x64\x65\x74\141\x69\154\163\137\141\x66\164\x65\162\137\143\x75\x73\164\x6f\x6d\145\x72\x5f\144\x65\164\141\151\x6c\x73", $umwqusowiqmyseom); ?>

</section>
