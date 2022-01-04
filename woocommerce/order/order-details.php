<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f0edbe3b             |
    |_______________________________________|
*/
 defined("\x41\x42\123\120\x41\124\110") || exit; $umwqusowiqmyseom = wc_get_order($order_id); if ($umwqusowiqmyseom) { goto mscgewkcqcoowweg; } return; mscgewkcqcoowweg: $order_items = $umwqusowiqmyseom->get_items(apply_filters("\x77\x6f\157\143\x6f\155\155\x65\x72\x63\x65\x5f\160\165\162\x63\x68\141\x73\x65\x5f\157\162\x64\145\x72\x5f\151\164\145\x6d\x5f\164\x79\x70\145\163", "\154\151\x6e\145\x5f\151\164\x65\155")); $show_purchase_note = $umwqusowiqmyseom->has_status(apply_filters("\167\157\157\x63\x6f\155\x6d\x65\162\x63\x65\137\x70\165\162\143\150\x61\x73\145\x5f\x6e\157\x74\x65\137\x6f\x72\144\145\162\x5f\x73\x74\141\x74\x75\163\145\x73", array("\x63\x6f\x6d\160\154\145\164\145\x64", "\x70\x72\157\143\145\x73\x73\x69\x6e\x67"))); $casweeiuuwgqsykq = $umwqusowiqmyseom->get_downloadable_items(); $show_downloads = $umwqusowiqmyseom->has_downloadable_item() && $umwqusowiqmyseom->is_download_permitted(); if (!$show_downloads) { goto suqcsgaosywaauuu; } wc_get_template("\x6f\162\144\145\x72\x2f\157\x72\x64\145\162\x2d\144\x6f\167\156\x6c\157\141\x64\x73\x2e\160\x68\160", array("\x64\157\167\x6e\x6c\157\141\144\163" => $casweeiuuwgqsykq, "\x73\150\157\x77\x5f\x74\x69\x74\154\145" => true)); suqcsgaosywaauuu: ?>
<section class="woocommerce-order-details mb-6">
	<?php  do_action("\167\157\157\143\157\x6d\155\145\x72\143\145\x5f\x6f\x72\x64\145\x72\137\144\x65\164\141\x69\154\163\x5f\142\145\x66\157\x72\x65\x5f\x6f\x72\144\145\x72\x5f\164\141\142\154\145", $umwqusowiqmyseom); ?>

    <div class="card border-gray-300">
        <div class="card-body border-gray-300">
            <h2 class="woocommerce-order-details__title h4 mb-4"><?php  esc_html_e("\117\x72\144\145\162\x20\144\145\164\141\x69\x6c\x73", PR__THM__PMPR); ?></h2>
	        <?php  do_action("\167\x6f\157\x63\157\155\x6d\x65\162\143\x65\137\157\x72\144\145\x72\137\144\x65\164\x61\x69\154\x73\x5f\142\x65\146\157\x72\145\x5f\157\x72\x64\x65\x72\137\164\x61\142\154\145\x5f\x69\164\x65\x6d\163", $umwqusowiqmyseom); ?>
            <ul class="woocommerce-table woocommerce-table--order-details shop_table order_details list-group list-group-flush list-group-compact">
	            <?php  foreach ($order_items as $item_id => $igqsaukqcqscimok) { $product = $igqsaukqcqscimok->get_product(); wc_get_template("\157\x72\144\145\162\57\x6f\162\x64\145\x72\x2d\144\145\x74\141\x69\x6c\163\x2d\151\164\x65\155\x2e\160\x68\160", array("\151\164\x65\x6d" => $igqsaukqcqscimok, "\157\162\144\x65\x72" => $umwqusowiqmyseom, "\160\162\157\x64\x75\x63\164" => $product, "\x69\164\145\x6d\137\x69\x64" => $item_id, "\x70\x75\162\143\x68\141\163\x65\x5f\x6e\157\164\145" => $product ? $product->get_purchase_note() : '', "\x73\x68\x6f\167\137\160\x75\x72\x63\150\x61\163\145\x5f\x6e\157\x74\x65" => $show_purchase_note)); gsygwgsiawgmqiyi: } wwukgaquuyoissgy: ?>
            </ul>
	        <?php  do_action("\x77\x6f\157\x63\157\x6d\x6d\145\x72\x63\x65\137\157\x72\144\145\162\137\x64\145\x74\x61\151\154\x73\137\x61\146\x74\145\x72\137\x6f\x72\144\x65\x72\x5f\x74\x61\x62\154\145\x5f\x69\x74\x65\x6d\163", $umwqusowiqmyseom); ?>
         
        </div>
    </div>
	<?php  do_action("\167\x6f\157\143\x6f\x6d\155\145\x72\x63\x65\x5f\x6f\162\x64\145\x72\x5f\x64\145\164\141\151\x6c\x73\137\x61\146\x74\x65\x72\x5f\x6f\162\144\145\162\x5f\164\x61\142\154\x65", $umwqusowiqmyseom); ?>
</section>

<?php  do_action("\x77\x6f\157\x63\x6f\x6d\155\x65\x72\x63\145\137\x61\x66\164\x65\x72\x5f\157\x72\144\145\x72\x5f\x64\145\164\141\x69\x6c\x73", $umwqusowiqmyseom);
