<?php
/*
Template Name: Sing Up
*/



get_header();
?>

    <div class="wrapper">
        <div class="sign-up__section">
            <div id="globe"></div>
        
            <div class="sign-up__chart-bg" id="chart-bg" style="content: url(<?php the_field('sing_up_animated-chart-bg-1'); ?>)"></div>
        
            <div class="sign-up__lion--bg" id="lion-bg" style="content: url(<?php the_field('sing_up_lion-bg'); ?>)">
            </div>
        
            <div class="sign-up__chart--bg _anim-items" id="animated-chart-bg">
                <svg viewBox="0 0 1440 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.3" clip-path="url(#clip0)">
                        <mask id="path-1-inside-1" fill="white">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M-3.50005 482.081H-3.00005C0.499954 482.081 2.99995 482.081 3.99995 480.108C8.49995 475.176 14 471.23 18 466.297C20.5 464.324 24.4999 463.338 30.9999 463.338C39.4999 463.338 45.9999 462.351 51.4999 460.378C55.4999 458.405 59.4999 457.419 64.4999 456.432C76.4999 454.46 86.4999 451.5 93.4999 446.568C95.4999 445.581 97.4999 444.595 99.9999 443.608C101 443.608 102.5 442.622 104 442.622C118 441.635 126 438.676 131 433.743C133.5 431.77 137 429.797 140 426.838C140.5 426.838 141.5 425.851 143 424.865C149.5 429.797 155.5 434.73 162 439.662C168.5 428.811 175 417.96 181.5 407.108C188.5 411.054 195 415 201.5 417.959C208 415.986 214.5 414.014 221 412.041C227.5 417.959 233.5 423.878 240 429.797C243 424.865 246 419.932 249 415.986C253.5 409.081 256.5 401.189 263 395.27C275.5 383.432 284.5 370.608 289 357.784C291.5 350.878 295.5 329.176 299.5 337.068C305.5 334.108 311 332.135 316 329.176C318.5 328.189 320.5 328.189 324 328.189C329 329.176 334 329.176 339 330.162C346 320.297 352.5 310.432 359.5 299.581C365 304.513 369.5 308.459 374 312.405C375.5 314.378 378 315.365 378.5 317.338C382.5 326.216 386 334.108 389.5 342.986C392 348.905 394.5 354.824 397.5 360.743C404.5 356.797 410.5 353.838 417 349.892C423.5 355.811 430 361.73 436 367.649C447.5 365.676 460 363.703 461 357.784C461.5 356.797 463 354.824 464 353.838C468.5 347.919 475 342 477.5 336.081C483.5 321.284 488.5 307.473 492.5 292.676C494.5 284.784 500 277.878 513.5 271.959C515 270.973 516 269.986 516.5 269C519 265.054 521.5 260.122 524 256.176C527.5 250.257 530.5 244.338 534 238.419H535.5C541.5 253.216 548 268.013 554 282.811C555.5 281.824 556.5 280.838 557.5 280.838C562 277.878 567 274.919 571 271.959C574 269.986 577 269 583 269.986C586.5 270.973 590.5 270.973 595 270.973C601.5 263.081 608 256.176 614 248.284C616.5 245.324 617.5 242.365 619 239.405C627.5 222.635 635 205.865 652 190.081C653 189.095 654 188.108 655.5 188.108C661 187.122 666.5 186.135 672.5 185.149C679.5 192.054 686.5 197.973 693.5 204.878C700 202.905 706 200.932 712 199.946C718.5 197.973 725.5 196.986 732.5 196C739.5 199.946 745.5 202.905 752.5 206.851C757.5 200.932 762 196 767 191.068C772 185.149 772 185.149 787.5 185.149C791 185.149 792.5 185.149 794 183.176C797.5 180.216 802 178.243 805 175.284C809.5 171.338 816.5 169.365 826.5 168.378C830 168.378 832.5 168.378 835 169.365C840 171.338 845.5 173.311 851.5 176.27C854.5 172.324 857 168.378 860 164.432C866 155.554 870.5 145.689 887 137.797C890 136.811 893 134.838 897 133.851C908.5 130.892 914.5 126.946 917.5 122.014C920 118.068 923.5 114.122 927 110.176C928 109.189 929 108.203 930 107.216C942 121.027 952.5 134.838 969.5 148.649C974.5 148.649 979.5 147.662 984.5 147.662C986.5 147.662 989.5 147.662 991 148.649C996 151.608 1000 154.568 1006 157.527C1012.5 160.487 1021 163.446 1029.5 166.405C1030 165.419 1030.5 165.419 1030.5 164.432C1036.5 152.595 1042.5 140.757 1048.5 128.919C1049 127.932 1050.5 126.946 1054 126.946C1063.5 125.959 1073.5 124.973 1083 124.973C1086.5 124.973 1089 124.973 1089.5 123C1090.5 121.027 1092.5 118.068 1094 116.095C1101.5 105.243 1106 94.3919 1120 83.5405C1126 79.5946 1132.5 75.6486 1144 73.6757C1146 73.6757 1148 72.6892 1149 71.7028C1154.5 64.7974 1160 57.892 1165.5 50.9866C1166.5 50.0001 1168 49.0137 1171.5 49.0137C1182.5 49.0137 1192.5 47.0407 1202 45.0677C1204.5 44.0813 1206.5 44.0812 1207.5 43.0947C1213 39.1488 1218.5 34.2164 1224.5 29.2839C1225.5 30.2704 1226.5 31.2569 1227 32.2434C1232.5 38.1623 1237.5 44.0812 1243.5 50.0001C1244 50.9866 1246.5 51.9731 1248.5 51.9731C1259.5 52.9596 1270.5 52.9596 1281.5 51.9731C1283 51.9731 1285 50.9866 1286 50.0001C1290 46.0542 1293.5 43.0947 1297 39.1488C1299.5 37.1758 1302 34.2164 1304.5 32.2434C1309.5 32.2434 1314 33.2299 1318 33.2299C1322 34.2163 1324.5 33.2299 1327 32.2434C1332 29.2839 1338 25.338 1344 22.3785C1345 23.365 1345.5 24.3514 1345.5 24.3514C1351 32.2433 1357 41.1218 1362.5 49.0137C1363 50.0002 1363 50.0001 1364 50.9866C1370.5 51.9731 1377 52.9596 1384 53.946C1390.5 43.0947 1396.5 33.2299 1403.5 23.365C1409.5 29.2839 1415 34.2164 1420.5 39.1488C1421 40.1353 1422 40.1352 1423 41.1217C1427.5 42.1082 1432 43.0948 1436.5 45.0677L1455.5 -588.257V-836.851L1436.5 -1428.74L-15 -1483L-3.50005 482.081Z" />
                        </mask>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M-3.50005 482.081H-3.00005C0.499954 482.081 2.99995 482.081 3.99995 480.108C8.49995 475.176 14 471.23 18 466.297C20.5 464.324 24.4999 463.338 30.9999 463.338C39.4999 463.338 45.9999 462.351 51.4999 460.378C55.4999 458.405 59.4999 457.419 64.4999 456.432C76.4999 454.46 86.4999 451.5 93.4999 446.568C95.4999 445.581 97.4999 444.595 99.9999 443.608C101 443.608 102.5 442.622 104 442.622C118 441.635 126 438.676 131 433.743C133.5 431.77 137 429.797 140 426.838C140.5 426.838 141.5 425.851 143 424.865C149.5 429.797 155.5 434.73 162 439.662C168.5 428.811 175 417.96 181.5 407.108C188.5 411.054 195 415 201.5 417.959C208 415.986 214.5 414.014 221 412.041C227.5 417.959 233.5 423.878 240 429.797C243 424.865 246 419.932 249 415.986C253.5 409.081 256.5 401.189 263 395.27C275.5 383.432 284.5 370.608 289 357.784C291.5 350.878 295.5 329.176 299.5 337.068C305.5 334.108 311 332.135 316 329.176C318.5 328.189 320.5 328.189 324 328.189C329 329.176 334 329.176 339 330.162C346 320.297 352.5 310.432 359.5 299.581C365 304.513 369.5 308.459 374 312.405C375.5 314.378 378 315.365 378.5 317.338C382.5 326.216 386 334.108 389.5 342.986C392 348.905 394.5 354.824 397.5 360.743C404.5 356.797 410.5 353.838 417 349.892C423.5 355.811 430 361.73 436 367.649C447.5 365.676 460 363.703 461 357.784C461.5 356.797 463 354.824 464 353.838C468.5 347.919 475 342 477.5 336.081C483.5 321.284 488.5 307.473 492.5 292.676C494.5 284.784 500 277.878 513.5 271.959C515 270.973 516 269.986 516.5 269C519 265.054 521.5 260.122 524 256.176C527.5 250.257 530.5 244.338 534 238.419H535.5C541.5 253.216 548 268.013 554 282.811C555.5 281.824 556.5 280.838 557.5 280.838C562 277.878 567 274.919 571 271.959C574 269.986 577 269 583 269.986C586.5 270.973 590.5 270.973 595 270.973C601.5 263.081 608 256.176 614 248.284C616.5 245.324 617.5 242.365 619 239.405C627.5 222.635 635 205.865 652 190.081C653 189.095 654 188.108 655.5 188.108C661 187.122 666.5 186.135 672.5 185.149C679.5 192.054 686.5 197.973 693.5 204.878C700 202.905 706 200.932 712 199.946C718.5 197.973 725.5 196.986 732.5 196C739.5 199.946 745.5 202.905 752.5 206.851C757.5 200.932 762 196 767 191.068C772 185.149 772 185.149 787.5 185.149C791 185.149 792.5 185.149 794 183.176C797.5 180.216 802 178.243 805 175.284C809.5 171.338 816.5 169.365 826.5 168.378C830 168.378 832.5 168.378 835 169.365C840 171.338 845.5 173.311 851.5 176.27C854.5 172.324 857 168.378 860 164.432C866 155.554 870.5 145.689 887 137.797C890 136.811 893 134.838 897 133.851C908.5 130.892 914.5 126.946 917.5 122.014C920 118.068 923.5 114.122 927 110.176C928 109.189 929 108.203 930 107.216C942 121.027 952.5 134.838 969.5 148.649C974.5 148.649 979.5 147.662 984.5 147.662C986.5 147.662 989.5 147.662 991 148.649C996 151.608 1000 154.568 1006 157.527C1012.5 160.487 1021 163.446 1029.5 166.405C1030 165.419 1030.5 165.419 1030.5 164.432C1036.5 152.595 1042.5 140.757 1048.5 128.919C1049 127.932 1050.5 126.946 1054 126.946C1063.5 125.959 1073.5 124.973 1083 124.973C1086.5 124.973 1089 124.973 1089.5 123C1090.5 121.027 1092.5 118.068 1094 116.095C1101.5 105.243 1106 94.3919 1120 83.5405C1126 79.5946 1132.5 75.6486 1144 73.6757C1146 73.6757 1148 72.6892 1149 71.7028C1154.5 64.7974 1160 57.892 1165.5 50.9866C1166.5 50.0001 1168 49.0137 1171.5 49.0137C1182.5 49.0137 1192.5 47.0407 1202 45.0677C1204.5 44.0813 1206.5 44.0812 1207.5 43.0947C1213 39.1488 1218.5 34.2164 1224.5 29.2839C1225.5 30.2704 1226.5 31.2569 1227 32.2434C1232.5 38.1623 1237.5 44.0812 1243.5 50.0001C1244 50.9866 1246.5 51.9731 1248.5 51.9731C1259.5 52.9596 1270.5 52.9596 1281.5 51.9731C1283 51.9731 1285 50.9866 1286 50.0001C1290 46.0542 1293.5 43.0947 1297 39.1488C1299.5 37.1758 1302 34.2164 1304.5 32.2434C1309.5 32.2434 1314 33.2299 1318 33.2299C1322 34.2163 1324.5 33.2299 1327 32.2434C1332 29.2839 1338 25.338 1344 22.3785C1345 23.365 1345.5 24.3514 1345.5 24.3514C1351 32.2433 1357 41.1218 1362.5 49.0137C1363 50.0002 1363 50.0001 1364 50.9866C1370.5 51.9731 1377 52.9596 1384 53.946C1390.5 43.0947 1396.5 33.2299 1403.5 23.365C1409.5 29.2839 1415 34.2164 1420.5 39.1488C1421 40.1353 1422 40.1352 1423 41.1217C1427.5 42.1082 1432 43.0948 1436.5 45.0677L1455.5 -588.257V-836.851L1436.5 -1428.74L-15 -1483L-3.50005 482.081Z"
                            stroke="#DAB865" stroke-width="4" mask="url(#path-1-inside-1)" />
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="1440" height="482" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        
            <div class="sign-up__container container">
                <div class="sign-up__title _anim-items _anim-no-hide">
                    <h1><?php the_field('sing_up_create_account'); ?></h1>
                </div>
        
                <form class="sign-up__form" action="#" method="#">
                    <div class="form-items-row _anim-items _anim-no-hide">
                        <div class="form-item">
                            <svg class="form-item__label-icon" width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.7105 12.7099C16.6909 11.9385 17.4065 10.8808 17.7577 9.68382C18.109 8.48684 18.0784 7.21015 17.6703 6.03135C17.2621 4.85255 16.4967 3.83027 15.4806 3.10674C14.4644 2.3832 13.2479 1.99438 12.0005 1.99438C10.753 1.99438 9.5366 2.3832 8.52041 3.10674C7.50423 3.83027 6.73883 4.85255 6.3307 6.03135C5.92257 7.21015 5.892 8.48684 6.24325 9.68382C6.59449 10.8808 7.31009 11.9385 8.29048 12.7099C6.61056 13.3829 5.14477 14.4992 4.04938 15.9398C2.95398 17.3804 2.27005 19.0912 2.07048 20.8899C2.05604 21.0212 2.0676 21.1541 2.10451 21.2809C2.14142 21.4078 2.20295 21.5261 2.2856 21.6292C2.4525 21.8374 2.69527 21.9707 2.96049 21.9999C3.2257 22.0291 3.49164 21.9517 3.69981 21.7848C3.90798 21.6179 4.04131 21.3751 4.07049 21.1099C4.29007 19.1551 5.22217 17.3497 6.6887 16.0387C8.15524 14.7277 10.0534 14.0029 12.0205 14.0029C13.9876 14.0029 15.8857 14.7277 17.3523 16.0387C18.8188 17.3497 19.7509 19.1551 19.9705 21.1099C19.9977 21.3556 20.1149 21.5825 20.2996 21.7469C20.4843 21.9113 20.7233 22.0014 20.9705 21.9999H21.0805C21.3426 21.9697 21.5822 21.8372 21.747 21.6311C21.9119 21.4251 21.9886 21.1622 21.9605 20.8999C21.76 19.0961 21.0724 17.3809 19.9713 15.9381C18.8703 14.4953 17.3974 13.3794 15.7105 12.7099ZM12.0005 11.9999C11.2094 11.9999 10.436 11.7653 9.7782 11.3258C9.12041 10.8862 8.60772 10.2615 8.30497 9.53061C8.00222 8.79971 7.923 7.99544 8.07734 7.21952C8.23168 6.4436 8.61265 5.73086 9.17206 5.17145C9.73147 4.61204 10.4442 4.23108 11.2201 4.07674C11.996 3.9224 12.8003 4.00161 13.5312 4.30436C14.2621 4.60711 14.8868 5.1198 15.3264 5.7776C15.7659 6.4354 16.0005 7.20876 16.0005 7.99988C16.0005 9.06075 15.5791 10.0782 14.8289 10.8283C14.0788 11.5785 13.0614 11.9999 12.0005 11.9999Z" fill="#DAB865"/>
                            </svg>
                            <input type="text" name="name" id="name" value="" onchange="this.setAttribute('value', this.value);" required>
                            <label for="name"><?php the_field('sing_up_name'); ?></label>
                            <div class="after"></div>
                        </div>
        
                        <div class="form-item">
                            <svg class="form-item__label-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.3 12.22C12.8336 11.7581 13.2616 11.1869 13.5549 10.545C13.8482 9.90316 14 9.20571 14 8.5C14 7.17392 13.4732 5.90215 12.5355 4.96447C11.5979 4.02678 10.3261 3.5 9 3.5C7.67392 3.5 6.40215 4.02678 5.46447 4.96447C4.52678 5.90215 4 7.17392 4 8.5C3.99999 9.20571 4.1518 9.90316 4.44513 10.545C4.73845 11.1869 5.16642 11.7581 5.7 12.22C4.30014 12.8539 3.11247 13.8775 2.27898 15.1685C1.4455 16.4596 1.00147 17.9633 1 19.5C1 19.7652 1.10536 20.0196 1.29289 20.2071C1.48043 20.3946 1.73478 20.5 2 20.5C2.26522 20.5 2.51957 20.3946 2.70711 20.2071C2.89464 20.0196 3 19.7652 3 19.5C3 17.9087 3.63214 16.3826 4.75736 15.2574C5.88258 14.1321 7.4087 13.5 9 13.5C10.5913 13.5 12.1174 14.1321 13.2426 15.2574C14.3679 16.3826 15 17.9087 15 19.5C15 19.7652 15.1054 20.0196 15.2929 20.2071C15.4804 20.3946 15.7348 20.5 16 20.5C16.2652 20.5 16.5196 20.3946 16.7071 20.2071C16.8946 20.0196 17 19.7652 17 19.5C16.9985 17.9633 16.5545 16.4596 15.721 15.1685C14.8875 13.8775 13.6999 12.8539 12.3 12.22ZM9 11.5C8.40666 11.5 7.82664 11.3241 7.33329 10.9944C6.83994 10.6648 6.45542 10.1962 6.22836 9.64805C6.0013 9.09987 5.94189 8.49667 6.05764 7.91473C6.1734 7.33279 6.45912 6.79824 6.87868 6.37868C7.29824 5.95912 7.83279 5.6734 8.41473 5.55764C8.99667 5.44189 9.59987 5.5013 10.1481 5.72836C10.6962 5.95542 11.1648 6.33994 11.4944 6.83329C11.8241 7.32664 12 7.90666 12 8.5C12 9.29565 11.6839 10.0587 11.1213 10.6213C10.5587 11.1839 9.79565 11.5 9 11.5ZM18.74 11.82C19.38 11.0993 19.798 10.2091 19.9438 9.25634C20.0896 8.30362 19.9569 7.32907 19.5618 6.45C19.1666 5.57093 18.5258 4.8248 17.7165 4.30142C16.9071 3.77805 15.9638 3.49974 15 3.5C14.7348 3.5 14.4804 3.60536 14.2929 3.79289C14.1054 3.98043 14 4.23478 14 4.5C14 4.76522 14.1054 5.01957 14.2929 5.20711C14.4804 5.39464 14.7348 5.5 15 5.5C15.7956 5.5 16.5587 5.81607 17.1213 6.37868C17.6839 6.94129 18 7.70435 18 8.5C17.9986 9.02524 17.8593 9.5409 17.5961 9.99542C17.3328 10.4499 16.9549 10.8274 16.5 11.09C16.3517 11.1755 16.2279 11.2977 16.1404 11.4447C16.0528 11.5918 16.0045 11.7589 16 11.93C15.9958 12.0998 16.0349 12.2678 16.1137 12.4183C16.1924 12.5687 16.3081 12.6967 16.45 12.79L16.84 13.05L16.97 13.12C18.1754 13.6917 19.1923 14.596 19.901 15.7263C20.6096 16.8566 20.9805 18.1659 20.97 19.5C20.97 19.7652 21.0754 20.0196 21.2629 20.2071C21.4504 20.3946 21.7048 20.5 21.97 20.5C22.2352 20.5 22.4896 20.3946 22.6771 20.2071C22.8646 20.0196 22.97 19.7652 22.97 19.5C22.9782 17.9654 22.5938 16.4543 21.8535 15.1101C21.1131 13.7659 20.0413 12.6333 18.74 11.82Z" fill="#DAB865"/>
                            </svg>
                            <input type="text" name="surname" id="surname" value="" onchange="this.setAttribute('value', this.value);"  required>
                            <label for="surname"><?php the_field('sing_up_surname'); ?></label>
                            <div class="after"></div>
                        </div>
                    </div>
        
                    <div class="form-items-row _anim-items _anim-no-hide">
                        <div class="form-item">
                            <svg class="form-item__label-icon" width="24" height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM18.59 6L12.71 11.88C12.617 11.9737 12.5064 12.0481 12.3846 12.0989C12.2627 12.1497 12.132 12.1758 12 12.1758C11.868 12.1758 11.7373 12.1497 11.6154 12.0989C11.4936 12.0481 11.383 11.9737 11.29 11.88L5.41 6H18.59ZM20 17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7.41L9.88 13.29C10.4425 13.8518 11.205 14.1674 12 14.1674C12.795 14.1674 13.5575 13.8518 14.12 13.29L20 7.41V17Z" fill="white"/>
                            </svg>
        
                            <input type="email" name="email" id="email" value="" onchange="this.setAttribute('value', this.value);" required>
                            <label for="email"><?php the_field('sing_up_email'); ?></label>
                            <div class="after"></div>
                        </div>
        
                        <div class="form-item _anim-items _anim-no-hide">
                            <svg class="form-item__label-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.4604 9.63006C20.32 8.16898 19.8036 6.76915 18.9616 5.56688C18.1195 4.36462 16.9805 3.4009 15.6554 2.76956C14.3303 2.13822 12.8642 1.86079 11.4001 1.96427C9.93592 2.06775 8.5235 2.54863 7.30037 3.36006C6.24957 4.06271 5.36742 4.98936 4.71731 6.07346C4.0672 7.15755 3.66526 8.37217 3.54037 9.63006C3.41785 10.8797 3.57504 12.141 4.00054 13.3223C4.42604 14.5037 5.10917 15.5755 6.00037 16.4601L11.3004 21.7701C11.3933 21.8638 11.5039 21.9382 11.6258 21.989C11.7477 22.0397 11.8784 22.0659 12.0104 22.0659C12.1424 22.0659 12.2731 22.0397 12.3949 21.989C12.5168 21.9382 12.6274 21.8638 12.7204 21.7701L18.0004 16.4601C18.8916 15.5755 19.5747 14.5037 20.0002 13.3223C20.4257 12.141 20.5829 10.8797 20.4604 9.63006ZM16.6004 15.0501L12.0004 19.6501L7.40037 15.0501C6.72246 14.3721 6.20317 13.5524 5.87984 12.6498C5.5565 11.7473 5.43715 10.7843 5.53037 9.83006C5.62419 8.86117 5.93213 7.92522 6.43194 7.08991C6.93175 6.25459 7.61093 5.54077 8.42037 5.00006C9.48131 4.2953 10.7267 3.91936 12.0004 3.91936C13.2741 3.91936 14.5194 4.2953 15.5804 5.00006C16.3874 5.53868 17.065 6.24935 17.5647 7.081C18.0644 7.91266 18.3737 8.84467 18.4704 9.81007C18.5666 10.7675 18.4488 11.7343 18.1254 12.6406C17.8019 13.5469 17.281 14.3699 16.6004 15.0501ZM12.0004 6.00006C11.1104 6.00006 10.2403 6.26399 9.5003 6.75845C8.76028 7.25292 8.18351 7.95572 7.84291 8.77799C7.50232 9.60026 7.4132 10.5051 7.58684 11.378C7.76047 12.2509 8.18905 13.0527 8.81839 13.682C9.44773 14.3114 10.2495 14.74 11.1225 14.9136C11.9954 15.0872 12.9002 14.9981 13.7224 14.6575C14.5447 14.3169 15.2475 13.7402 15.742 13.0001C16.2364 12.2601 16.5004 11.3901 16.5004 10.5001C16.4977 9.3074 16.0228 8.16434 15.1794 7.321C14.3361 6.47766 13.193 6.00271 12.0004 6.00006ZM12.0004 13.0001C11.5059 13.0001 11.0226 12.8534 10.6114 12.5787C10.2003 12.304 9.87989 11.9136 9.69067 11.4568C9.50145 11 9.45194 10.4973 9.54841 10.0123C9.64487 9.52739 9.88297 9.08193 10.2326 8.7323C10.5822 8.38267 11.0277 8.14456 11.5126 8.0481C11.9976 7.95164 12.5003 8.00115 12.9571 8.19037C13.4139 8.37958 13.8043 8.70002 14.079 9.11114C14.3537 9.52226 14.5004 10.0056 14.5004 10.5001C14.5004 11.1631 14.237 11.799 13.7681 12.2678C13.2993 12.7367 12.6634 13.0001 12.0004 13.0001Z" fill="white"/>
                            </svg>
        
                            <select id="country" name="country" class="form-control" value='' onchange="this.setAttribute('value', this.value);" required>
                                <option value="none" selected disabled hidden></option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                            <label for="country"><?php the_field('sing_up_country'); ?></label>
                            <div class="after"></div>
                        </div>
        
                    </div>
        
                    <div class="form-items-row _anim-items _anim-no-hide">
                        <div class="form-item">
                            <svg class="form-item__label-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.4406 13.0001C19.2206 13.0001 18.9906 12.9301 18.7706 12.8801C18.3251 12.7819 17.8873 12.6516 17.4606 12.4901C16.9967 12.3213 16.4867 12.3301 16.0289 12.5147C15.5711 12.6993 15.1977 13.0467 14.9806 13.4901L14.7606 13.9401C13.7866 13.3983 12.8916 12.7253 12.1006 11.9401C11.3154 11.1491 10.6424 10.2541 10.1006 9.28011L10.5206 9.00011C10.964 8.78303 11.3114 8.40964 11.496 7.9518C11.6806 7.49396 11.6894 6.98402 11.5206 6.52011C11.3618 6.09253 11.2315 5.65491 11.1306 5.21011C11.0806 4.99011 11.0406 4.76011 11.0106 4.53011C10.8892 3.82573 10.5202 3.18785 9.97021 2.73135C9.42021 2.27485 8.72529 2.02972 8.01059 2.04011H5.01059C4.57962 2.03607 4.15284 2.12493 3.7593 2.30064C3.36576 2.47636 3.0147 2.73481 2.73002 3.05839C2.44534 3.38198 2.23372 3.76311 2.10958 4.17583C1.98543 4.58855 1.95167 5.02317 2.01059 5.45011C2.54333 9.63949 4.45662 13.532 7.44824 16.5127C10.4399 19.4935 14.3393 21.3926 18.5306 21.9101H18.9106C19.648 21.9112 20.36 21.6406 20.9106 21.1501C21.227 20.8672 21.4797 20.5203 21.6521 20.1324C21.8244 19.7446 21.9126 19.3245 21.9106 18.9001V15.9001C21.8983 15.2055 21.6454 14.5367 21.1949 14.0078C20.7445 13.4789 20.1244 13.1227 19.4406 13.0001ZM19.9406 19.0001C19.9404 19.1421 19.91 19.2824 19.8514 19.4117C19.7927 19.5411 19.7073 19.6564 19.6006 19.7501C19.4889 19.8466 19.3582 19.9187 19.217 19.9617C19.0758 20.0048 18.9271 20.0178 18.7806 20.0001C15.0355 19.5199 11.5568 17.8066 8.89331 15.1304C6.22978 12.4542 4.533 8.96745 4.07059 5.22011C4.05467 5.07363 4.06862 4.92544 4.11159 4.7845C4.15456 4.64356 4.22566 4.5128 4.32059 4.40011C4.4143 4.29344 4.52965 4.20795 4.65897 4.14933C4.78829 4.09071 4.9286 4.06029 5.07059 4.06011H8.07059C8.30314 4.05494 8.53021 4.13099 8.71273 4.27518C8.89525 4.41937 9.0218 4.62268 9.07059 4.85011C9.11059 5.12345 9.16059 5.39345 9.22059 5.66011C9.33611 6.18726 9.48985 6.70529 9.68059 7.21011L8.28059 7.86011C8.16089 7.91503 8.05321 7.99306 7.96375 8.08971C7.87428 8.18636 7.80479 8.29973 7.75926 8.42331C7.71373 8.54689 7.69306 8.67824 7.69844 8.80983C7.70381 8.94142 7.73513 9.07066 7.79059 9.19011C9.22979 12.2729 11.7078 14.7509 14.7906 16.1901C15.0341 16.2901 15.3071 16.2901 15.5506 16.1901C15.6753 16.1455 15.7899 16.0766 15.8878 15.9873C15.9856 15.898 16.0648 15.7902 16.1206 15.6701L16.7406 14.2701C17.2576 14.455 17.7852 14.6086 18.3206 14.7301C18.5873 14.7901 18.8573 14.8401 19.1306 14.8801C19.358 14.9289 19.5613 15.0554 19.7055 15.238C19.8497 15.4205 19.9258 15.6476 19.9206 15.8801L19.9406 19.0001Z" fill="white"/>
                            </svg>
        
                            <input type="tel" name="phone" id="phone" value="" onchange="this.setAttribute('value', this.value);" required>
                            <label for="phone"><?php the_field('sing_up_phone'); ?></label>
                            <div class="after"></div>
                        </div>
        
                        <div class="form-item">
                            <svg class="form-item__label-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75827 10.7578C8.35162 10.7578 8.93164 10.5818 9.42498 10.2522C9.91833 9.92255 10.3028 9.45401 10.5299 8.90583C10.757 8.35766 10.8164 7.75446 10.7006 7.17251C10.5849 6.59057 10.2992 6.05602 9.87959 5.63646C9.46004 5.21691 8.92549 4.93118 8.34354 4.81543C7.7616 4.69967 7.1584 4.75908 6.61022 4.98615C6.06204 5.21321 5.59351 5.59773 5.26386 6.09107C4.93422 6.58442 4.75827 7.16444 4.75827 7.75778C4.75914 8.55317 5.07549 9.31572 5.63791 9.87814C6.20033 10.4406 6.96289 10.7569 7.75827 10.7578ZM7.75827 6.75778C7.95605 6.75778 8.14939 6.81643 8.31384 6.92631C8.47829 7.0362 8.60646 7.19237 8.68215 7.3751C8.75784 7.55783 8.77764 7.75889 8.73906 7.95287C8.70047 8.14686 8.60523 8.32504 8.46538 8.46489C8.32553 8.60474 8.14734 8.69998 7.95336 8.73857C7.75938 8.77715 7.55832 8.75735 7.37559 8.68166C7.19286 8.60598 7.03668 8.4778 6.9268 8.31335C6.81692 8.1489 6.75827 7.95557 6.75827 7.75778C6.75845 7.49262 6.86386 7.23837 7.05136 7.05087C7.23886 6.86337 7.49311 6.75796 7.75827 6.75778ZM16.2427 13.2422C15.6493 13.2422 15.0693 13.4181 14.5759 13.7478C14.0826 14.0774 13.6981 14.5459 13.471 15.0941C13.244 15.6423 13.1845 16.2455 13.3003 16.8274C13.4161 17.4094 13.7018 17.9439 14.1213 18.3635C14.5409 18.783 15.0754 19.0688 15.6574 19.1845C16.2393 19.3003 16.8425 19.2409 17.3907 19.0138C17.9389 18.7867 18.4074 18.4022 18.7371 17.9089C19.0667 17.4155 19.2427 16.8355 19.2427 16.2422C19.2418 15.4468 18.9254 14.6842 18.363 14.1218C17.8006 13.5594 17.038 13.243 16.2427 13.2422ZM16.2427 17.2422C16.0449 17.2422 15.8515 17.1835 15.6871 17.0736C15.5226 16.9638 15.3945 16.8076 15.3188 16.6248C15.2431 16.4421 15.2233 16.2411 15.2619 16.0471C15.3005 15.8531 15.3957 15.6749 15.5355 15.5351C15.6754 15.3952 15.8536 15.3 16.0476 15.2614C16.2415 15.2228 16.4426 15.2426 16.6253 15.3183C16.8081 15.394 16.9642 15.5221 17.0741 15.6866C17.184 15.851 17.2427 16.0444 17.2427 16.2422C17.2425 16.5073 17.1371 16.7616 16.9496 16.9491C16.7621 17.1366 16.5078 17.242 16.2427 17.2422ZM19.7075 4.29297C19.6146 4.20009 19.5044 4.12641 19.3831 4.07614C19.2618 4.02587 19.1318 4 19.0004 4C18.8691 4 18.7391 4.02587 18.6178 4.07614C18.4965 4.12641 18.3862 4.20009 18.2934 4.29297L4.2934 18.293C4.1996 18.3856 4.12504 18.4959 4.07401 18.6174C4.02299 18.739 3.99651 18.8695 3.9961 19.0013C3.99569 19.1331 4.02135 19.2638 4.07161 19.3856C4.12188 19.5075 4.19575 19.6182 4.28897 19.7115C4.38219 19.8047 4.49293 19.8786 4.61482 19.9288C4.7367 19.9791 4.86731 20.0047 4.99915 20.0043C5.13099 20.0039 5.26144 19.9774 5.383 19.9264C5.50456 19.8753 5.61483 19.8008 5.70746 19.707L19.7075 5.70697C19.8003 5.61414 19.874 5.50393 19.9243 5.38262C19.9745 5.26131 20.0004 5.13128 20.0004 4.99997C20.0004 4.86866 19.9745 4.73864 19.9243 4.61733C19.874 4.49602 19.8003 4.3858 19.7075 4.29297Z" fill="white"/>
                            </svg>
        
                            <input type="text" name="code" id="code" value="" onchange="this.setAttribute('value', this.value);">
                            <label for="code"><?php the_field('sing_up_promo_code'); ?></label>
                            <div class="after"></div>
                        </div>
        
                    </div>
        
                    <div class="privacy-block _anim-items _anim-no-hide">
                        <div class="checkbox-block">
                          <input type="checkbox" id="over18" name="over18">
                          <label for="over18" class="checkbox"><img src="./assets/signUpPage/checked-badge.svg" alt=""></label> 
                          <label for="over18"><?php the_field('sing_up_im_over_18'); ?></label>
                        </div>
        
                        <div class="checkbox-block">
                          <input type="checkbox" id="terms" name="terms"> 
                          <label for="terms" class="checkbox"><img src="./assets/signUpPage/checked-badge.svg" alt=""></label>
                          <label for="terms"><?php the_field('sing_up_i_agree_to_the'); ?><a href="./terms.html" class="underline-link">Terms &amp; Conditions</a></label>
                        </div>
                    </div>
        
                    <div class="form-items-btns crtAcc-btn big-btn__wrapper _anim-items _anim-no-hide">
                        <button id='btn-submit' type="submit" class="big-btn"><a><?php the_field('sin_up_create_account'); ?></a></button>
                    </div>
        
                    <div class="form-items__sign-up">
                        <?php the_field('sing_up_already_have_an_account'); ?><a href='./sign-in.html' class="underline-link"><?php the_field('sing_up_sign_in'); ?></a>.
                    </div>
        
                </form>
            </div>
        
            <div id="yellow-break-line" style="content: url(<?php the_field('sing_up_yellow-break-line'); ?>)"></div>
        </div>
    </div>

<?php

get_footer();
