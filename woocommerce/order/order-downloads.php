<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f0edbe3b             |
    |_______________________________________|
*/
 if (defined("\101\x42\x53\120\x41\124\110")) { goto suqceasgacskcmkc; } exit; suqceasgacskcmkc: ?>
<section class="woocommerce-order-downloads mb-6">
    <div class="card border-gray-300">
        <div class="card-body table-responsive">
            <?php  if (!isset($show_title)) { goto yykqaowwsqgqysmq; } ?>
                <h2 class="woocommerce-order-downloads__title h4"><?php  esc_html_e("\104\157\x77\x6e\154\157\x61\x64\x73", PR__THM__PMPR); ?></h2>
            <?php  yykqaowwsqgqysmq: ?>
        
            <table class="woocommerce-table woocommerce-table--order-downloads shop_table shop_table_responsive order_details table">
                <thead>
                    <tr>
                        <?php  foreach (wc_get_account_downloads_columns() as $column_id => $column_name) { ?>
                        <th class="<?php  echo esc_attr($column_id); ?>"><span class="nobr"><?php  echo esc_html($column_name); ?></span></th>
                        <?php  uckewycoogsogwiy: } kwiggogcgciwuwqk: ?>
                    </tr>
                </thead>
        
                <?php  foreach ($casweeiuuwgqsykq as $acsweksygkmmgggk) { ?>
                    <tr>
                        <?php  foreach (wc_get_account_downloads_columns() as $column_id => $column_name) { ?>
                            <td class="<?php  echo esc_attr($column_id); ?>" data-title="<?php  echo esc_attr($column_name); ?>">
                                <?php  if (has_action("\167\x6f\x6f\x63\x6f\x6d\155\145\162\143\x65\137\141\x63\143\x6f\x75\x6e\x74\137\x64\157\167\x6e\154\157\141\144\x73\x5f\x63\157\x6c\x75\x6d\x6e\x5f" . $column_id)) { goto esaqcqqwuussiiwo; } switch ($column_id) { case "\x64\157\167\156\154\x6f\x61\x64\x2d\160\162\157\x64\x75\143\164": if ($acsweksygkmmgggk["\160\x72\x6f\x64\x75\143\164\137\x75\162\154"]) { goto iwsmmkqaoksmocok; } echo esc_html($acsweksygkmmgggk["\160\x72\x6f\144\x75\x63\x74\x5f\156\141\x6d\145"]); goto esikeyqyuikmaiek; iwsmmkqaoksmocok: echo "\x3c\141\x20\150\162\145\x66\x3d\x22" . esc_url($acsweksygkmmgggk["\x70\162\x6f\144\165\x63\x74\137\x75\162\x6c"]) . "\42\40\143\x6c\x61\163\x73\x3d\x22\x63\x61\162\144\55\154\151\x6e\153\x22\x3e" . esc_html($acsweksygkmmgggk["\x70\x72\x6f\x64\165\143\x74\137\156\141\x6d\145"]) . "\x3c\x2f\x61\76"; esikeyqyuikmaiek: goto ocywegekakimmwcq; case "\144\157\x77\156\154\157\x61\x64\55\x66\151\x6c\x65": echo "\74\x61\40\x68\162\x65\146\75\x22" . esc_url($acsweksygkmmgggk["\x64\x6f\167\x6e\x6c\x6f\x61\144\x5f\x75\162\x6c"]) . "\42\x20\143\x6c\x61\x73\x73\x3d\x22\x77\157\x6f\x63\157\155\155\145\162\143\145\x2d\x4d\x79\x41\143\x63\x6f\165\x6e\164\x2d\x64\x6f\x77\156\154\157\x61\x64\x73\x2d\x66\151\x6c\x65\40\x62\x75\x74\x74\x6f\x6e\x20\141\x6c\x74\x20\142\x74\x6e\40\142\x74\x6e\x2d\163\155\40\x62\x74\x6e\x2d\x6f\x75\x74\x6c\151\156\145\55\160\x72\x69\155\x61\162\171\40\142\164\156\x2d\142\x6c\x6f\x63\x6b\x20\160\171\x2d\x32\42\76" . esc_html($acsweksygkmmgggk["\144\x6f\167\x6e\x6c\157\x61\x64\137\156\x61\x6d\145"]) . "\74\x2f\x61\x3e"; goto ocywegekakimmwcq; case "\144\x6f\167\x6e\x6c\x6f\141\x64\55\162\145\x6d\141\x69\x6e\151\x6e\147": echo number_format_i18n(is_numeric($acsweksygkmmgggk["\x64\x6f\x77\x6e\x6c\157\x61\x64\x73\x5f\x72\145\x6d\141\x69\156\x69\156\x67"]) ? esc_html($acsweksygkmmgggk["\144\x6f\167\x6e\154\x6f\141\x64\x73\x5f\162\145\x6d\141\151\x6e\x69\156\147"]) : esc_html__("\46\151\156\146\151\156\x3b", PR__THM__PMPR)); goto ocywegekakimmwcq; case "\144\x6f\x77\x6e\x6c\x6f\x61\144\55\145\x78\160\x69\162\x65\163": if (!empty($acsweksygkmmgggk["\x61\143\x63\x65\x73\x73\x5f\x65\170\x70\151\x72\x65\163"])) { goto okkmcocqokkskasy; } esc_html_e("\116\145\x76\145\x72", PR__THM__PMPR); goto qiiigwkqeoewsuwm; okkmcocqokkskasy: echo "\74\x74\x69\x6d\145\x20\144\141\164\145\164\x69\x6d\x65\75\42" . esc_attr(date("\131\x2d\x6d\x2d\x64", strtotime($acsweksygkmmgggk["\x61\143\143\x65\163\x73\137\145\170\160\151\x72\145\163"]))) . "\x22\40\164\151\x74\154\145\x3d\x22" . esc_attr(strtotime($acsweksygkmmgggk["\141\143\143\x65\x73\163\137\145\170\x70\151\162\x65\163"])) . "\42\x3e" . esc_html(date_i18n(get_option("\144\x61\x74\x65\x5f\x66\157\162\x6d\141\164"), strtotime($acsweksygkmmgggk["\141\143\143\145\x73\x73\137\x65\170\x70\x69\162\x65\163"]))) . "\x3c\57\x74\151\x6d\145\76"; qiiigwkqeoewsuwm: goto ocywegekakimmwcq; } emqswoaawgeyosmi: ocywegekakimmwcq: goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: do_action("\167\x6f\157\x63\x6f\x6d\155\145\x72\x63\x65\x5f\x61\x63\x63\157\x75\x6e\x74\137\x64\x6f\x77\x6e\154\x6f\x61\x64\163\137\x63\157\154\165\155\x6e\x5f" . $column_id, $acsweksygkmmgggk); ikqeeaysmqgcgawq: ?>
                            </td>
                        <?php  yuimwyoywaiiqacs: } gswcoeiisamakwii: ?>
                    </tr>
                <?php  yoqakewookqoqacm: } ikuuiauwouuqawuw: ?>
            </table>
        </div>
    </div>
</section>
