<?php
/*
Template Name: Terminal
*/



get_header();
//  Git test
$x = 1;
$text = 'Test 2'

?>
<div class="wrapper">
        <div class="templatePage__section">
            <div class="templatePage__container container">
                <div class="templatePage__router _anim-items _anim-no-hide">
                    <div class="templatePage__router-item"><a href="http://localhost:8888/"><?php the_field('terminal_text_1'); ?></a></div>
        
                    <div class="templatePage__router-item"><?php the_field('terminal_text_2'); ?></div>
                </div>
        
                <div class="templatePage__chart-animated-chart-bg" id="chart-bg" style="content: url(<?php the_field('terminal_image_1'); ?>)"></div>
        
                <div class="templatePage__chart--bg _anim-items" id="animated-chart-bg">
                    <svg  viewBox="0 0 1440 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.3" clip-path="url(#clip0)">
                        <mask id="path-1-inside-1" fill="white">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M-3.50005 482.081H-3.00005C0.499954 482.081 2.99995 482.081 3.99995 480.108C8.49995 475.176 14 471.23 18 466.297C20.5 464.324 24.4999 463.338 30.9999 463.338C39.4999 463.338 45.9999 462.351 51.4999 460.378C55.4999 458.405 59.4999 457.419 64.4999 456.432C76.4999 454.46 86.4999 451.5 93.4999 446.568C95.4999 445.581 97.4999 444.595 99.9999 443.608C101 443.608 102.5 442.622 104 442.622C118 441.635 126 438.676 131 433.743C133.5 431.77 137 429.797 140 426.838C140.5 426.838 141.5 425.851 143 424.865C149.5 429.797 155.5 434.73 162 439.662C168.5 428.811 175 417.96 181.5 407.108C188.5 411.054 195 415 201.5 417.959C208 415.986 214.5 414.014 221 412.041C227.5 417.959 233.5 423.878 240 429.797C243 424.865 246 419.932 249 415.986C253.5 409.081 256.5 401.189 263 395.27C275.5 383.432 284.5 370.608 289 357.784C291.5 350.878 295.5 329.176 299.5 337.068C305.5 334.108 311 332.135 316 329.176C318.5 328.189 320.5 328.189 324 328.189C329 329.176 334 329.176 339 330.162C346 320.297 352.5 310.432 359.5 299.581C365 304.513 369.5 308.459 374 312.405C375.5 314.378 378 315.365 378.5 317.338C382.5 326.216 386 334.108 389.5 342.986C392 348.905 394.5 354.824 397.5 360.743C404.5 356.797 410.5 353.838 417 349.892C423.5 355.811 430 361.73 436 367.649C447.5 365.676 460 363.703 461 357.784C461.5 356.797 463 354.824 464 353.838C468.5 347.919 475 342 477.5 336.081C483.5 321.284 488.5 307.473 492.5 292.676C494.5 284.784 500 277.878 513.5 271.959C515 270.973 516 269.986 516.5 269C519 265.054 521.5 260.122 524 256.176C527.5 250.257 530.5 244.338 534 238.419H535.5C541.5 253.216 548 268.013 554 282.811C555.5 281.824 556.5 280.838 557.5 280.838C562 277.878 567 274.919 571 271.959C574 269.986 577 269 583 269.986C586.5 270.973 590.5 270.973 595 270.973C601.5 263.081 608 256.176 614 248.284C616.5 245.324 617.5 242.365 619 239.405C627.5 222.635 635 205.865 652 190.081C653 189.095 654 188.108 655.5 188.108C661 187.122 666.5 186.135 672.5 185.149C679.5 192.054 686.5 197.973 693.5 204.878C700 202.905 706 200.932 712 199.946C718.5 197.973 725.5 196.986 732.5 196C739.5 199.946 745.5 202.905 752.5 206.851C757.5 200.932 762 196 767 191.068C772 185.149 772 185.149 787.5 185.149C791 185.149 792.5 185.149 794 183.176C797.5 180.216 802 178.243 805 175.284C809.5 171.338 816.5 169.365 826.5 168.378C830 168.378 832.5 168.378 835 169.365C840 171.338 845.5 173.311 851.5 176.27C854.5 172.324 857 168.378 860 164.432C866 155.554 870.5 145.689 887 137.797C890 136.811 893 134.838 897 133.851C908.5 130.892 914.5 126.946 917.5 122.014C920 118.068 923.5 114.122 927 110.176C928 109.189 929 108.203 930 107.216C942 121.027 952.5 134.838 969.5 148.649C974.5 148.649 979.5 147.662 984.5 147.662C986.5 147.662 989.5 147.662 991 148.649C996 151.608 1000 154.568 1006 157.527C1012.5 160.487 1021 163.446 1029.5 166.405C1030 165.419 1030.5 165.419 1030.5 164.432C1036.5 152.595 1042.5 140.757 1048.5 128.919C1049 127.932 1050.5 126.946 1054 126.946C1063.5 125.959 1073.5 124.973 1083 124.973C1086.5 124.973 1089 124.973 1089.5 123C1090.5 121.027 1092.5 118.068 1094 116.095C1101.5 105.243 1106 94.3919 1120 83.5405C1126 79.5946 1132.5 75.6486 1144 73.6757C1146 73.6757 1148 72.6892 1149 71.7028C1154.5 64.7974 1160 57.892 1165.5 50.9866C1166.5 50.0001 1168 49.0137 1171.5 49.0137C1182.5 49.0137 1192.5 47.0407 1202 45.0677C1204.5 44.0813 1206.5 44.0812 1207.5 43.0947C1213 39.1488 1218.5 34.2164 1224.5 29.2839C1225.5 30.2704 1226.5 31.2569 1227 32.2434C1232.5 38.1623 1237.5 44.0812 1243.5 50.0001C1244 50.9866 1246.5 51.9731 1248.5 51.9731C1259.5 52.9596 1270.5 52.9596 1281.5 51.9731C1283 51.9731 1285 50.9866 1286 50.0001C1290 46.0542 1293.5 43.0947 1297 39.1488C1299.5 37.1758 1302 34.2164 1304.5 32.2434C1309.5 32.2434 1314 33.2299 1318 33.2299C1322 34.2163 1324.5 33.2299 1327 32.2434C1332 29.2839 1338 25.338 1344 22.3785C1345 23.365 1345.5 24.3514 1345.5 24.3514C1351 32.2433 1357 41.1218 1362.5 49.0137C1363 50.0002 1363 50.0001 1364 50.9866C1370.5 51.9731 1377 52.9596 1384 53.946C1390.5 43.0947 1396.5 33.2299 1403.5 23.365C1409.5 29.2839 1415 34.2164 1420.5 39.1488C1421 40.1353 1422 40.1352 1423 41.1217C1427.5 42.1082 1432 43.0948 1436.5 45.0677L1455.5 -588.257V-836.851L1436.5 -1428.74L-15 -1483L-3.50005 482.081Z"/>
                        </mask>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M-3.50005 482.081H-3.00005C0.499954 482.081 2.99995 482.081 3.99995 480.108C8.49995 475.176 14 471.23 18 466.297C20.5 464.324 24.4999 463.338 30.9999 463.338C39.4999 463.338 45.9999 462.351 51.4999 460.378C55.4999 458.405 59.4999 457.419 64.4999 456.432C76.4999 454.46 86.4999 451.5 93.4999 446.568C95.4999 445.581 97.4999 444.595 99.9999 443.608C101 443.608 102.5 442.622 104 442.622C118 441.635 126 438.676 131 433.743C133.5 431.77 137 429.797 140 426.838C140.5 426.838 141.5 425.851 143 424.865C149.5 429.797 155.5 434.73 162 439.662C168.5 428.811 175 417.96 181.5 407.108C188.5 411.054 195 415 201.5 417.959C208 415.986 214.5 414.014 221 412.041C227.5 417.959 233.5 423.878 240 429.797C243 424.865 246 419.932 249 415.986C253.5 409.081 256.5 401.189 263 395.27C275.5 383.432 284.5 370.608 289 357.784C291.5 350.878 295.5 329.176 299.5 337.068C305.5 334.108 311 332.135 316 329.176C318.5 328.189 320.5 328.189 324 328.189C329 329.176 334 329.176 339 330.162C346 320.297 352.5 310.432 359.5 299.581C365 304.513 369.5 308.459 374 312.405C375.5 314.378 378 315.365 378.5 317.338C382.5 326.216 386 334.108 389.5 342.986C392 348.905 394.5 354.824 397.5 360.743C404.5 356.797 410.5 353.838 417 349.892C423.5 355.811 430 361.73 436 367.649C447.5 365.676 460 363.703 461 357.784C461.5 356.797 463 354.824 464 353.838C468.5 347.919 475 342 477.5 336.081C483.5 321.284 488.5 307.473 492.5 292.676C494.5 284.784 500 277.878 513.5 271.959C515 270.973 516 269.986 516.5 269C519 265.054 521.5 260.122 524 256.176C527.5 250.257 530.5 244.338 534 238.419H535.5C541.5 253.216 548 268.013 554 282.811C555.5 281.824 556.5 280.838 557.5 280.838C562 277.878 567 274.919 571 271.959C574 269.986 577 269 583 269.986C586.5 270.973 590.5 270.973 595 270.973C601.5 263.081 608 256.176 614 248.284C616.5 245.324 617.5 242.365 619 239.405C627.5 222.635 635 205.865 652 190.081C653 189.095 654 188.108 655.5 188.108C661 187.122 666.5 186.135 672.5 185.149C679.5 192.054 686.5 197.973 693.5 204.878C700 202.905 706 200.932 712 199.946C718.5 197.973 725.5 196.986 732.5 196C739.5 199.946 745.5 202.905 752.5 206.851C757.5 200.932 762 196 767 191.068C772 185.149 772 185.149 787.5 185.149C791 185.149 792.5 185.149 794 183.176C797.5 180.216 802 178.243 805 175.284C809.5 171.338 816.5 169.365 826.5 168.378C830 168.378 832.5 168.378 835 169.365C840 171.338 845.5 173.311 851.5 176.27C854.5 172.324 857 168.378 860 164.432C866 155.554 870.5 145.689 887 137.797C890 136.811 893 134.838 897 133.851C908.5 130.892 914.5 126.946 917.5 122.014C920 118.068 923.5 114.122 927 110.176C928 109.189 929 108.203 930 107.216C942 121.027 952.5 134.838 969.5 148.649C974.5 148.649 979.5 147.662 984.5 147.662C986.5 147.662 989.5 147.662 991 148.649C996 151.608 1000 154.568 1006 157.527C1012.5 160.487 1021 163.446 1029.5 166.405C1030 165.419 1030.5 165.419 1030.5 164.432C1036.5 152.595 1042.5 140.757 1048.5 128.919C1049 127.932 1050.5 126.946 1054 126.946C1063.5 125.959 1073.5 124.973 1083 124.973C1086.5 124.973 1089 124.973 1089.5 123C1090.5 121.027 1092.5 118.068 1094 116.095C1101.5 105.243 1106 94.3919 1120 83.5405C1126 79.5946 1132.5 75.6486 1144 73.6757C1146 73.6757 1148 72.6892 1149 71.7028C1154.5 64.7974 1160 57.892 1165.5 50.9866C1166.5 50.0001 1168 49.0137 1171.5 49.0137C1182.5 49.0137 1192.5 47.0407 1202 45.0677C1204.5 44.0813 1206.5 44.0812 1207.5 43.0947C1213 39.1488 1218.5 34.2164 1224.5 29.2839C1225.5 30.2704 1226.5 31.2569 1227 32.2434C1232.5 38.1623 1237.5 44.0812 1243.5 50.0001C1244 50.9866 1246.5 51.9731 1248.5 51.9731C1259.5 52.9596 1270.5 52.9596 1281.5 51.9731C1283 51.9731 1285 50.9866 1286 50.0001C1290 46.0542 1293.5 43.0947 1297 39.1488C1299.5 37.1758 1302 34.2164 1304.5 32.2434C1309.5 32.2434 1314 33.2299 1318 33.2299C1322 34.2163 1324.5 33.2299 1327 32.2434C1332 29.2839 1338 25.338 1344 22.3785C1345 23.365 1345.5 24.3514 1345.5 24.3514C1351 32.2433 1357 41.1218 1362.5 49.0137C1363 50.0002 1363 50.0001 1364 50.9866C1370.5 51.9731 1377 52.9596 1384 53.946C1390.5 43.0947 1396.5 33.2299 1403.5 23.365C1409.5 29.2839 1415 34.2164 1420.5 39.1488C1421 40.1353 1422 40.1352 1423 41.1217C1427.5 42.1082 1432 43.0948 1436.5 45.0677L1455.5 -588.257V-836.851L1436.5 -1428.74L-15 -1483L-3.50005 482.081Z" stroke="#DAB865" stroke-width="4" mask="url(#path-1-inside-1)"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="1440" height="482" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>
        
                <div class="templatePage__title _anim-items _anim-no-hide">
                    <?php the_field('terminal_wysiwyg_1'); ?>
                </div>
        
                <div class="templaPage__text _anim-items _anim-no-hide">
                    <?php the_field('terminal_wysiwyg_2'); ?>
                </div>
        
                <div class="templatePage__buttons _anim-items _anim-no-hide">
                    <div class="big-btn__wrapper">
                        <button><a href='http://localhost:8888/sing-up/'><?php the_field('terminal_text_4'); ?></a></button>
                    </div>
        
                    <div class="underline-link">
                        <button><a href='http://localhost:8888/sing-in/'><?php the_field('terminal_text_3'); ?></a></button>
                    </div>
                </div>
        
                <div class="templatePage__information">
                    <?php the_field('terminal_wysiwyg_3'); ?>

                </div>
            </div>
        
            <div id="break-line-7" style="content: url(<?php the_field('terminal_image_2'); ?>)"></div>
        </div>
        
    </div>
    
<?php

get_footer();
