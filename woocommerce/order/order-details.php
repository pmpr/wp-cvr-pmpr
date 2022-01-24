<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec51b10e4f             |
    |_______________________________________|
*/
 defined("\101\102\123\120\x41\x54\x48") || exit; $umwqusowiqmyseom = wc_get_order($order_id); if ($umwqusowiqmyseom) { goto isewysikysqewkis; } return; isewysikysqewkis: $order_items = $umwqusowiqmyseom->get_items(apply_filters("\x77\x6f\157\143\157\155\x6d\x65\162\x63\x65\137\x70\165\162\143\x68\x61\163\145\x5f\157\162\x64\145\x72\x5f\151\164\x65\155\x5f\x74\x79\160\145\163", "\x6c\x69\156\x65\x5f\x69\164\145\155")); $show_purchase_note = $umwqusowiqmyseom->has_status(apply_filters("\x77\157\157\x63\157\x6d\x6d\145\x72\143\x65\x5f\160\165\x72\x63\x68\x61\x73\145\137\156\x6f\x74\x65\137\157\162\x64\x65\x72\x5f\x73\x74\141\x74\165\x73\145\163", array("\x63\157\x6d\x70\154\x65\164\x65\144", "\x70\162\x6f\x63\x65\x73\x73\151\x6e\147"))); $casweeiuuwgqsykq = $umwqusowiqmyseom->get_downloadable_items(); $show_downloads = $umwqusowiqmyseom->has_downloadable_item() && $umwqusowiqmyseom->is_download_permitted(); if (!$show_downloads) { goto wiwoiyoakywqyaiy; } wc_get_template("\157\162\144\145\x72\x2f\x6f\x72\x64\x65\162\x2d\144\x6f\x77\156\x6c\157\x61\x64\x73\56\160\150\x70", array("\x64\x6f\x77\x6e\154\157\x61\x64\163" => $casweeiuuwgqsykq, "\x73\x68\157\x77\x5f\x74\151\x74\x6c\x65" => true)); wiwoiyoakywqyaiy: ?>
<section class="woocommerce-order-details mb-6">
	<?php  do_action("\x77\x6f\157\x63\x6f\x6d\155\x65\x72\143\145\137\157\162\144\x65\x72\x5f\x64\x65\x74\x61\151\154\163\137\142\145\146\x6f\162\145\137\x6f\x72\144\145\162\x5f\x74\x61\x62\154\x65", $umwqusowiqmyseom); ?>

    <div class="card border-gray-300">
        <div class="card-body border-gray-300">
            <h2 class="woocommerce-order-details__title h4 mb-4"><?php  esc_html_e("\x4f\x72\x64\145\162\x20\144\145\x74\141\151\x6c\163", PR__THM__PMPR); ?></h2>
	        <?php  do_action("\167\x6f\x6f\143\157\155\x6d\145\x72\x63\145\137\x6f\x72\144\145\162\x5f\x64\x65\164\x61\151\x6c\x73\137\142\x65\146\x6f\162\145\137\157\x72\144\145\162\137\x74\x61\x62\154\145\137\x69\x74\x65\x6d\163", $umwqusowiqmyseom); ?>
            <ul class="woocommerce-table woocommerce-table--order-details shop_table order_details list-group list-group-flush list-group-compact">
	            <?php  foreach ($order_items as $item_id => $igqsaukqcqscimok) { $product = $igqsaukqcqscimok->get_product(); wc_get_template("\x6f\162\x64\145\162\x2f\157\x72\144\x65\x72\x2d\144\x65\164\x61\x69\x6c\x73\x2d\x69\x74\145\155\56\160\x68\160", array("\x69\x74\x65\x6d" => $igqsaukqcqscimok, "\x6f\x72\144\x65\162" => $umwqusowiqmyseom, "\x70\162\x6f\144\165\x63\164" => $product, "\151\x74\145\x6d\x5f\x69\x64" => $item_id, "\160\165\162\x63\150\x61\163\145\137\156\x6f\x74\x65" => $product ? $product->get_purchase_note() : '', "\x73\150\157\167\x5f\160\165\162\143\x68\x61\x73\145\x5f\156\157\164\x65" => $show_purchase_note)); eouwacqiommmeaqc: } igmmqwyawcuuckkq: ?>
            </ul>
	        <?php  do_action("\167\157\x6f\x63\157\x6d\155\x65\x72\143\145\x5f\x6f\x72\144\x65\162\x5f\x64\145\x74\141\151\x6c\x73\137\141\x66\164\145\x72\x5f\157\162\144\145\x72\x5f\164\x61\x62\154\x65\x5f\x69\x74\145\x6d\163", $umwqusowiqmyseom); ?>
         
        </div>
    </div>
	<?php  do_action("\x77\x6f\157\x63\x6f\155\155\145\x72\x63\145\x5f\157\162\144\x65\162\x5f\144\145\164\141\x69\154\163\137\x61\x66\x74\x65\162\x5f\x6f\162\x64\x65\x72\x5f\164\x61\x62\154\x65", $umwqusowiqmyseom); ?>
</section>

<?php  do_action("\x77\x6f\x6f\x63\157\x6d\155\145\162\x63\145\x5f\141\146\164\x65\162\x5f\157\162\144\145\162\137\144\145\x74\x61\x69\x6c\163", $umwqusowiqmyseom);
