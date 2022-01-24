<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec51b10e4f             |
    |_______________________________________|
*/
 if (defined("\101\102\123\x50\101\x54\110")) { goto acggikioyeueeowg; } exit; acggikioyeueeowg: if (isset($umwqusowiqmyseom)) { goto cwikoaeqmmoimmso; } return; cwikoaeqmmoimmso: ?>

<div class="container my-5">
        <div class="card mx-auto max-width-1">
            <div class="card-body">
                <table class="order_details table table-borderless mb-0">
                    <?php  foreach (get_wc_order_details($umwqusowiqmyseom) as $uusmaiomayssaecw => $igqsaukqcqscimok) { ?>
                        <tr class="<?php  echo $uusmaiomayssaecw; ?>">
                            <th><?php  echo esc_html($igqsaukqcqscimok["\164\x69\x74\154\x65"]); ?></th>
                            <td><?php  echo $igqsaukqcqscimok["\x76\x61\154\x75\145"]; ?></td>
                        </tr>
                    <?php  kaiesowkgwogqseg: } egaymskkosukqeao: ?>
                </table>
            </div>
            <div class="card-footer">
	            <?php  do_action("\x77\x6f\x6f\x63\x6f\155\155\145\x72\143\145\x5f\x72\x65\143\x65\x69\x70\x74\x5f" . $umwqusowiqmyseom->get_payment_method(), $umwqusowiqmyseom->get_id()); ?>
            </div>
        </div>
</div>
