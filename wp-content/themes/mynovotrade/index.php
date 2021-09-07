<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyNovoTrade
 */

get_header();
?>


    <div class="wrapper">
        <div class="first-screen__section">
            <div id="globe"></div>

            <div class="currencies__elements">

                <div id="yena-badge"></div>

                <div id="dollar-badge"></div>

                <div id="euro-badge"></div>

                <div id="fund-badge"></div>
            </div>

            <div class="first-screen__chart-animated-chart-bg" id="animated-chart-bg-1"></div>

            <div class="first-screen__lion--bg" id="lion-bg">
            </div>

            <div class="first-screen__chart--bg _anim-items" id="chart-bg">
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

            <div class="first-screen__container container">
                <div class="first-screen__title _anim-items _anim-no-hide">
                    <h1>World <span class="allocated">leader in Forex</span></h1>
                    <h1>& the online trading industry</h1>
                </div>

                <div class="first-screen__information _anim-items _anim-no-hide">
                    <p>
                        In just a short period, Novo Trade Group has earned <br class="paragraph">
                        the respect of traders and financial experts.
                    </p>
                </div>

                <div class="first-screen__buttons _anim-items _anim-no-hide">
                    <div class="big-btn__wrapper">
                        <button><a href="./sign-up.html">Open an Account</a></button>
                    </div>

                    <div class="underline-link">
                        <button><a href="./sign-in.html">Log In</a></button>
                    </div>
                </div>

                <div class="first-screen__moreInfo _anim-items _anim-no-hide">
                    <a href='#about-us__section'>
                        <button>
                            <div class="moreInfo-badge">
                                <div class="moreInfo-badge-dot">

                                </div>
                            </div>
                            <p class="moreInfo-text">more info</p>
                        </button>
                    </a>
                </div>
            </div>

            <div id="break-line-1"></div>
        </div>

        <div class="about-us__section" id="about-us__section">
            <div class="about-us__decoration-start">
                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div class="about-us__chart-bg-2 _anim-items" id="chart-bg-2">
                <svg viewBox="0 0 1440 502" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5" clip-path="url(#clip1)">
                        <mask id="path-2-inside-2" fill="white">
                            <path height="502" fill-rule="evenodd" clip-rule="evenodd"
                                d="M-3.00136 502C0.49745 502 10.9938 502 11.9935 500.913C16.492 498.194 21.9901 496.02 25.9887 493.301C28.4879 492.214 32.4865 491.67 38.9843 491.67C47.4814 491.67 53.9792 491.127 59.4773 490.039C63.476 488.952 67.4746 488.408 72.4729 487.865C84.4688 486.777 94.4654 485.146 101.463 482.428C103.462 481.884 105.462 481.34 107.961 480.797C108.96 480.797 110.46 480.253 111.959 480.253C125.955 479.709 133.952 478.078 138.95 475.36C141.449 474.273 144.948 473.185 147.947 471.554C148.447 471.554 149.447 471.011 150.946 470.467C157.444 473.185 163.442 475.904 169.94 478.622C176.438 472.642 182.935 466.661 189.433 460.681C196.431 462.855 202.929 465.03 209.426 466.661C215.924 465.574 222.422 464.486 228.92 463.399C235.417 466.661 241.415 469.923 247.913 473.185C250.912 470.467 253.911 467.749 256.91 465.574C261.409 461.768 264.408 457.419 270.905 454.157C283.401 447.633 292.398 440.565 296.897 433.497C299.396 429.691 303.394 417.73 307.393 422.08C313.391 420.449 318.889 419.361 323.887 417.73C326.387 417.187 328.386 417.187 331.885 417.187C336.883 417.73 341.881 417.73 346.88 418.274C353.877 412.837 360.375 407.401 367.373 401.42C372.871 404.139 377.369 406.313 381.868 408.488C383.367 409.575 385.866 410.119 386.366 411.206C390.365 416.099 393.864 420.449 397.363 425.342C399.862 428.604 402.361 431.866 405.36 435.128C412.357 432.953 418.355 431.322 424.853 429.148C431.351 432.41 437.849 435.672 443.847 438.934C455.343 437.846 467.839 436.759 468.838 433.497C469.338 432.953 470.838 431.866 471.837 431.322C476.336 428.06 482.833 424.798 485.333 421.536C491.331 413.381 496.329 405.77 500.328 397.614C502.327 393.265 507.825 389.459 521.32 386.197C522.82 385.654 523.82 385.11 524.319 384.566C526.819 382.392 529.318 379.673 531.817 377.498C535.316 374.236 538.315 370.974 541.813 367.712H543.313C549.311 375.867 555.809 384.023 561.807 392.178C563.306 391.634 564.306 391.09 565.305 391.09C569.804 389.459 574.802 387.828 578.801 386.197C581.8 385.11 584.799 384.566 590.797 385.11C594.296 385.654 598.294 385.654 602.793 385.654C609.29 381.304 615.788 377.499 621.786 373.149C624.285 371.518 625.285 369.887 626.785 368.256C635.282 359.014 642.779 349.771 659.773 341.072C660.773 340.529 661.773 339.985 663.272 339.985C668.77 339.441 674.268 338.898 680.266 338.354C687.264 342.16 694.262 345.422 701.259 349.227C707.757 348.14 713.755 347.053 719.753 346.509C726.251 345.422 733.248 344.878 740.246 344.334C747.244 346.509 753.242 348.14 760.239 350.315C765.237 347.053 769.736 344.334 774.734 341.616C779.732 338.354 779.732 338.354 795.227 338.354C798.726 338.354 800.226 338.354 801.725 337.267C805.224 335.636 809.722 334.548 812.721 332.917C817.22 330.742 824.217 329.655 834.214 329.112C837.713 329.112 840.212 329.111 842.711 329.655C847.709 330.742 853.207 331.83 859.205 333.461C862.204 331.286 864.703 329.112 867.702 326.937C873.7 322.044 878.199 316.607 894.693 312.258C897.692 311.714 900.691 310.627 904.69 310.083C916.186 308.452 922.184 306.277 925.183 303.559C927.682 301.384 931.181 299.209 934.679 297.035C935.679 296.491 936.679 295.947 937.678 295.404C949.674 303.015 960.171 310.627 977.165 318.238C982.163 318.238 987.162 317.694 992.16 317.694C994.159 317.694 997.158 317.694 998.658 318.238C1003.66 319.869 1007.65 321.5 1013.65 323.131C1020.15 324.762 1028.65 326.393 1037.14 328.024C1037.64 327.48 1038.14 327.48 1038.14 326.937C1044.14 320.413 1050.14 313.889 1056.14 307.365C1056.64 306.821 1058.14 306.277 1061.64 306.277C1071.13 305.733 1081.13 305.19 1090.63 305.19C1094.13 305.19 1096.62 305.19 1097.12 304.102C1098.12 303.015 1100.12 301.384 1101.62 300.297C1109.12 294.316 1113.62 288.336 1127.61 282.355C1133.61 280.181 1140.11 278.006 1151.61 276.919C1153.6 276.919 1155.6 276.375 1156.6 275.831C1162.1 272.026 1167.6 268.22 1173.1 264.414C1174.1 263.871 1175.6 263.327 1179.1 263.327C1190.09 263.327 1200.09 262.24 1209.59 261.152C1212.09 260.609 1214.08 260.609 1215.08 260.065C1220.58 257.89 1226.08 255.172 1232.08 252.453C1233.08 252.997 1234.08 253.541 1234.58 254.084C1240.08 257.346 1245.07 260.609 1251.07 263.871C1251.57 264.414 1254.07 264.958 1256.07 264.958C1267.07 265.502 1278.06 265.502 1289.06 264.958C1290.56 264.958 1292.56 264.414 1293.56 263.871C1297.56 261.696 1301.05 260.065 1304.55 257.89C1307.05 256.803 1309.55 255.172 1312.05 254.084C1317.05 254.084 1321.55 254.628 1325.55 254.628C1329.55 255.172 1332.04 254.628 1334.54 254.084C1339.54 252.453 1345.54 250.279 1351.54 248.648C1352.54 249.191 1353.04 249.735 1353.04 249.735C1358.54 254.084 1364.53 258.978 1370.03 263.327C1370.53 263.871 1370.53 263.871 1371.53 264.414C1378.03 264.958 1384.53 265.502 1391.52 266.045C1398.02 260.065 1404.02 254.628 1411.02 249.191C1417.02 252.453 1422.51 255.172 1428.01 257.89C1428.51 258.434 1429.51 258.434 1430.51 258.977C1435.01 259.521 1439.51 260.065 1444.01 261.152L1463 -87.8871V-224.893L1444.01 -551.098L-7 -581L-3.00136 502Z" />
                        </mask>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M-3.00136 502C0.49745 502 10.9938 502 11.9935 500.913C16.492 498.194 21.9901 496.02 25.9887 493.301C28.4879 492.214 32.4865 491.67 38.9843 491.67C47.4814 491.67 53.9792 491.127 59.4773 490.039C63.476 488.952 67.4746 488.408 72.4729 487.865C84.4688 486.777 94.4654 485.146 101.463 482.428C103.462 481.884 105.462 481.34 107.961 480.797C108.96 480.797 110.46 480.253 111.959 480.253C125.955 479.709 133.952 478.078 138.95 475.36C141.449 474.273 144.948 473.185 147.947 471.554C148.447 471.554 149.447 471.011 150.946 470.467C157.444 473.185 163.442 475.904 169.94 478.622C176.438 472.642 182.935 466.661 189.433 460.681C196.431 462.855 202.929 465.03 209.426 466.661C215.924 465.574 222.422 464.486 228.92 463.399C235.417 466.661 241.415 469.923 247.913 473.185C250.912 470.467 253.911 467.749 256.91 465.574C261.409 461.768 264.408 457.419 270.905 454.157C283.401 447.633 292.398 440.565 296.897 433.497C299.396 429.691 303.394 417.73 307.393 422.08C313.391 420.449 318.889 419.361 323.887 417.73C326.387 417.187 328.386 417.187 331.885 417.187C336.883 417.73 341.881 417.73 346.88 418.274C353.877 412.837 360.375 407.401 367.373 401.42C372.871 404.139 377.369 406.313 381.868 408.488C383.367 409.575 385.866 410.119 386.366 411.206C390.365 416.099 393.864 420.449 397.363 425.342C399.862 428.604 402.361 431.866 405.36 435.128C412.357 432.953 418.355 431.322 424.853 429.148C431.351 432.41 437.849 435.672 443.847 438.934C455.343 437.846 467.839 436.759 468.838 433.497C469.338 432.953 470.838 431.866 471.837 431.322C476.336 428.06 482.833 424.798 485.333 421.536C491.331 413.381 496.329 405.77 500.328 397.614C502.327 393.265 507.825 389.459 521.32 386.197C522.82 385.654 523.82 385.11 524.319 384.566C526.819 382.392 529.318 379.673 531.817 377.498C535.316 374.236 538.315 370.974 541.813 367.712H543.313C549.311 375.867 555.809 384.023 561.807 392.178C563.306 391.634 564.306 391.09 565.305 391.09C569.804 389.459 574.802 387.828 578.801 386.197C581.8 385.11 584.799 384.566 590.797 385.11C594.296 385.654 598.294 385.654 602.793 385.654C609.29 381.304 615.788 377.499 621.786 373.149C624.285 371.518 625.285 369.887 626.785 368.256C635.282 359.014 642.779 349.771 659.773 341.072C660.773 340.529 661.773 339.985 663.272 339.985C668.77 339.441 674.268 338.898 680.266 338.354C687.264 342.16 694.262 345.422 701.259 349.227C707.757 348.14 713.755 347.053 719.753 346.509C726.251 345.422 733.248 344.878 740.246 344.334C747.244 346.509 753.242 348.14 760.239 350.315C765.237 347.053 769.736 344.334 774.734 341.616C779.732 338.354 779.732 338.354 795.227 338.354C798.726 338.354 800.226 338.354 801.725 337.267C805.224 335.636 809.722 334.548 812.721 332.917C817.22 330.742 824.217 329.655 834.214 329.112C837.713 329.112 840.212 329.111 842.711 329.655C847.709 330.742 853.207 331.83 859.205 333.461C862.204 331.286 864.703 329.112 867.702 326.937C873.7 322.044 878.199 316.607 894.693 312.258C897.692 311.714 900.691 310.627 904.69 310.083C916.186 308.452 922.184 306.277 925.183 303.559C927.682 301.384 931.181 299.209 934.679 297.035C935.679 296.491 936.679 295.947 937.678 295.404C949.674 303.015 960.171 310.627 977.165 318.238C982.163 318.238 987.162 317.694 992.16 317.694C994.159 317.694 997.158 317.694 998.658 318.238C1003.66 319.869 1007.65 321.5 1013.65 323.131C1020.15 324.762 1028.65 326.393 1037.14 328.024C1037.64 327.48 1038.14 327.48 1038.14 326.937C1044.14 320.413 1050.14 313.889 1056.14 307.365C1056.64 306.821 1058.14 306.277 1061.64 306.277C1071.13 305.733 1081.13 305.19 1090.63 305.19C1094.13 305.19 1096.62 305.19 1097.12 304.102C1098.12 303.015 1100.12 301.384 1101.62 300.297C1109.12 294.316 1113.62 288.336 1127.61 282.355C1133.61 280.181 1140.11 278.006 1151.61 276.919C1153.6 276.919 1155.6 276.375 1156.6 275.831C1162.1 272.026 1167.6 268.22 1173.1 264.414C1174.1 263.871 1175.6 263.327 1179.1 263.327C1190.09 263.327 1200.09 262.24 1209.59 261.152C1212.09 260.609 1214.08 260.609 1215.08 260.065C1220.58 257.89 1226.08 255.172 1232.08 252.453C1233.08 252.997 1234.08 253.541 1234.58 254.084C1240.08 257.346 1245.07 260.609 1251.07 263.871C1251.57 264.414 1254.07 264.958 1256.07 264.958C1267.07 265.502 1278.06 265.502 1289.06 264.958C1290.56 264.958 1292.56 264.414 1293.56 263.871C1297.56 261.696 1301.05 260.065 1304.55 257.89C1307.05 256.803 1309.55 255.172 1312.05 254.084C1317.05 254.084 1321.55 254.628 1325.55 254.628C1329.55 255.172 1332.04 254.628 1334.54 254.084C1339.54 252.453 1345.54 250.279 1351.54 248.648C1352.54 249.191 1353.04 249.735 1353.04 249.735C1358.54 254.084 1364.53 258.978 1370.03 263.327C1370.53 263.871 1370.53 263.871 1371.53 264.414C1378.03 264.958 1384.53 265.502 1391.52 266.045C1398.02 260.065 1404.02 254.628 1411.02 249.191C1417.02 252.453 1422.51 255.172 1428.01 257.89C1428.51 258.434 1429.51 258.434 1430.51 258.977C1435.01 259.521 1439.51 260.065 1444.01 261.152L1463 -87.8871V-224.893L1444.01 -551.098L-7 -581L-3.00136 502Z"
                            stroke="#DAB865" stroke-width="6" mask="url(#path-2-inside-2)" />
                    </g>
                    <defs>
                        <clipPath id="clip1">
                            <rect width="1470" height="502" fill="white" transform="translate(-11)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="about-us__chart-animated-chart-bg" id="animated-chart-bg-2"></div>

            <div class="about-us__container container">
                <div class="about-us__title">
                    <div id="lion-sm-bg"></div>
                    <h1 class="_anim-items _anim-no-hide">What is</h1>
                    <h2 class="_anim-items _anim-no-hide">Novo Trade Group?</h2>
                </div>

                <div id="chart-sm-1"></div>

                <div class="about-us__image _anim-items _anim-no-hide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutUs-image.svg">
                </div>

                <div class="about-us__information">
                    <div class="about-us__informaton--image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutUs-image.svg">
                    </div>

                    <div class="about-us__animated-currencies">
                        <div class="animated-currencie _anim-items" id="yena-animated"></div>

                        <div class="animated-currencie _anim-items" id="funt-animated"></div>

                        <div class="animated-currencie _anim-items" id="dollar-animated"></div>

                        <div class="animated-currencie _anim-items" id="euro-animated"></div>

                    </div>

                    <div class="about-us__information--title _anim-items _anim-no-hide">
                        <h3>About Us</h3>
                    </div>

                    <div class="about-us__information--text _anim-items _anim-no-hide">
                        <p>
                            At Novo Trade Group, we are committed to providing
                            a unique trading experience based on fair and transparent
                            prices, excellent and readily available customer service,
                            with specialist learning and training tools. We are
                            an award-winning and fast-growing; multi-asset broker,
                            and our key aim is to meet all of our clients’ trading needs.
                        </p>
                    </div>

                    <div class="about-us__information--buttons _anim-items _anim-no-hide">
                        <div class="big-btn__wrapper">
                            <button><a href="./sign-up.html">Open an account</a></button>
                        </div>

                        <div class="underline-link">
                            <button><a href="./about-us.html">More about us</a></button>
                        </div>
                    </div>
                </div>

                <div id="chart-sm-2"></div>
            </div>

            <div class="about-us__decoration-end">
                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="choose-us__section">
            <div id="break-line-2"></div>

            <div class="choose-us__decoration-line-1">
                <div class="choose-us__decoration-item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div class="choose-us__decoration-line-2">
                <div class="choose-us__decoration-item-reverse">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item-reverse">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item-reverse">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div class="choose-us__decoration-line-3">
                <div class="choose-us__decoration-item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div class="choose-us__decoration-line-4">
                <div class="choose-us__decoration-item-reverse">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item-reverse">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item-reverse">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div class="choose-us__decoration-line-5">
                <div class="choose-us__decoration-item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="choose-us__decoration-item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div class="choose-us__container container">
                <div class="choose-us__title _anim-items _anim-no-hide">
                    <h1>Why choose us?</h1>
                </div>

                <div class="choose-us__benefits">

                    <div class="choose-us__benefits-item _anim-items _anim-no-hide">
                        <div class="benefits-item__badge">
                            <div class="square"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg__files/services-icon.svg">
                        </div>

                        <div class="benefits-item__text">
                            <h3>Award-Winning <br> Client Services</h3>
                        </div>
                    </div>


                    <div class="choose-us__benefits-item _anim-items _anim-no-hide">
                        <div class="benefits-item__badge">
                            <div class="square"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg__files/withdrawals-icon.svg">
                        </div>

                        <div class="benefits-item__text">
                            <h3>Automated Deposits<br> & Withdrawals</h3>
                        </div>
                    </div>

                    <div class="choose-us__benefits-item _anim-items _anim-no-hide">
                        <div class="benefits-item__badge">
                            <div class="square"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg__files/transparency-icon.svg">
                        </div>

                        <div class="benefits-item__text">
                            <h3>Complete <br> Transparency</h3>
                        </div>
                    </div>

                    <div class="choose-us__benefits-item _anim-items _anim-no-hide">
                        <div class="benefits-item__badge">
                            <div class="square"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg__files/security-icon.svg">
                        </div>

                        <div class="benefits-item__text">
                            <h3>Dynamic Advanced <br> Safety & Security</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div id="globe-bg"></div>
        </div>

        <div class="best-trader__section">
            <div id="break-line-3"></div>

            <div class="best-trader__decoration-start">
                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div class="best-trader__chart-animated-chart-bg" id="animated-chart-bg-3"></div>

            <div class="best-trader__bg-wrapper">
                <div class="best-trader__container container">
                    <div class="best-trader__title _anim-items _anim-no-hide">
                        <h3 class="best-trader__title-1">If you want to be the <br class="paragraph"><span
                                class="big-text">best trader</span>,</h3>
                        <h3 class="best-trader__title-2">you need to trade with the <br class="paragraph"><span
                                class="big-text">best broker</span></h3>
                    </div>

                    <div class="best-trader__content">
                        <div class="best-trader__content--widget _anim-items _anim-no-hide">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container" style="width: 100%; height: 100%;">
                                <div class="tradingview-widget-container__widget"></div>
                                <div #tradingview style="width: 100%; height: 100%;"></div>
                                <script type="text/javascript"
                                    src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js"
                                    async>
                                        {
                                            "colorTheme": "light",
                                                "dateRange": "12M",
                                                    "showChart": true,
                                                        "locale": "en",
                                                            "width": "100%",
                                                                "height": "100%",
                                                                    "largeChartUrl": "",
                                                                        "isTransparent": false,
                                                                            "showSymbolLogo": true,
                                                                                "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
                                                                                    "plotLineColorFalling": "rgba(33, 150, 243, 1)",
                                                                                        "gridLineColor": "rgba(240, 243, 250, 1)",
                                                                                            "scaleFontColor": "rgba(120, 123, 134, 1)",
                                                                                                "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                                                                                    "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                                                                                        "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                                                                                            "tabs": [
                                                                                                                {
                                                                                                                    "title": "Indices",
                                                                                                                    "symbols": [
                                                                                                                        {
                                                                                                                            "s": "FOREXCOM:SPXUSD",
                                                                                                                            "d": "S&P 500"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "FOREXCOM:NSXUSD",
                                                                                                                            "d": "Nasdaq 100"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "FOREXCOM:DJI",
                                                                                                                            "d": "Dow 30"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "INDEX:NKY",
                                                                                                                            "d": "Nikkei 225"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "INDEX:DEU30",
                                                                                                                            "d": "DAX Index"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "FOREXCOM:UKXGBP",
                                                                                                                            "d": "UK 100"
                                                                                                                        }
                                                                                                                    ],
                                                                                                                    "originalTitle": "Indices"
                                                                                                                },
                                                                                                                {
                                                                                                                    "title": "Commodities",
                                                                                                                    "symbols": [
                                                                                                                        {
                                                                                                                            "s": "CME_MINI:ES1!",
                                                                                                                            "d": "S&P 500"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "CME:6E1!",
                                                                                                                            "d": "Euro"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "COMEX:GC1!",
                                                                                                                            "d": "Gold"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "NYMEX:CL1!",
                                                                                                                            "d": "Crude Oil"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "NYMEX:NG1!",
                                                                                                                            "d": "Natural Gas"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "CBOT:ZC1!",
                                                                                                                            "d": "Corn"
                                                                                                                        }
                                                                                                                    ],
                                                                                                                    "originalTitle": "Commodities"
                                                                                                                },
                                                                                                                {
                                                                                                                    "title": "Bonds",
                                                                                                                    "symbols": [
                                                                                                                        {
                                                                                                                            "s": "CME:GE1!",
                                                                                                                            "d": "Eurodollar"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "CBOT:ZB1!",
                                                                                                                            "d": "T-Bond"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "CBOT:UB1!",
                                                                                                                            "d": "Ultra T-Bond"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "EUREX:FGBL1!",
                                                                                                                            "d": "Euro Bund"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "EUREX:FBTP1!",
                                                                                                                            "d": "Euro BTP"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "EUREX:FGBM1!",
                                                                                                                            "d": "Euro BOBL"
                                                                                                                        }
                                                                                                                    ],
                                                                                                                    "originalTitle": "Bonds"
                                                                                                                },
                                                                                                                {
                                                                                                                    "title": "Forex",
                                                                                                                    "symbols": [
                                                                                                                        {
                                                                                                                            "s": "FX:EURUSD"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "FX:GBPUSD"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "FX:USDJPY"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "FX:USDCHF"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "FX:AUDUSD"
                                                                                                                        },
                                                                                                                        {
                                                                                                                            "s": "FX:USDCAD"
                                                                                                                        }
                                                                                                                    ],
                                                                                                                    "originalTitle": "Forex"
                                                                                                                }
                                                                                                            ]
                                        }
                                    </script>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>

                        <div id="chart-sm-3"></div>

                        <div id="chart-sm-4"></div>


                        <div class="best-trader__content--information">
                            <div class="best-trader__content--information--text _anim-items _anim-no-hide">
                                <p>
                                    Our teams are located globally and bring a wealth
                                    of industry experience and knowledge. We recognize
                                    that providing outstanding customer service and support,
                                    together with state-of-the-art technology, our core values
                                    which contribute to our success.
                                </p>
                            </div>

                            <div class="best-trader__content--information--buttons _anim-items _anim-no-hide">
                                <div class="big-btn__wrapper">
                                    <button><a href="./sign-up.index">Get Started</a></button>
                                </div>

                                <div class="underline-link">
                                    <button><a href="./sign-in.index">Log In</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="best-trader__decoration-end">
                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div id="break-line-4"></div>
        </div>

        <div class="platforms__section">
            <div class="animated-circle-1 _anim-items _anim-no-hide">
                <div class="animated-circle-border-1">
                    <div class="animated-circle-border-2">
                        <div class="animated-circle-dot"></div>
                    </div>
                </div>
            </div>

            <div class="animated-circle-2 _anim-items _anim-no-hide">
                <div class="animated-circle-border-1">
                    <div class="animated-circle-border-2">
                        <div class="animated-circle-dot"></div>
                    </div>
                </div>
            </div>

            <div class="animated-circle-3 _anim-items _anim-no-hide">
                <div class="animated-circle-border-1">
                    <div class="animated-circle-border-2">
                        <div class="animated-circle-dot"></div>
                    </div>
                </div>
            </div>

            <div class="platforms__container container">
                <div class="platforms__title _anim-items _anim-no-hide">
                    <h2>Novo Trade Group<br>
                        provides their traders with the renown</h2>
                    <h1>MT4 Platforms</h1>
                </div>

                <div class="platforms__listOfPlaforms">
                    <div class="listOfPlaforms-item _anim-items _anim-no-hide">
                        <div class="listOfPlaforms-item__badge">
                            <div class="square"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg__files/webtrader-icon.svg">
                        </div>

                        <div class="listOfPlaforms-item__information">
                            <div class="listOfPlaforms-item__information-title">
                                <h3>Webtrader</h3>
                            </div>

                            <div class="listOfPlaforms-item__information-text">
                                <p>
                                    Our WebTrader is a unique platform where you can access
                                    a wide range of data and market news. Our platform
                                    is trader-oriented, offering help on understanding
                                    the nature of the financial market, trading strategies,
                                    advanced trading tools, and technical indicators that
                                    you can take advantage of them.
                                </p>
                            </div>

                            <div class="listOfPlaforms-item__information-link">
                                <a class="vector-icon" href="#">Open the <span style="font-weight: bold;">Web
                                        Version</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="listOfPlaforms-item _anim-items _anim-no-hide">
                        <div class="listOfPlaforms-item__badge">
                            <div class="square"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg__files/downloadable-icon.svg">
                        </div>

                        <div class="listOfPlaforms-item__information">
                            <div class="listOfPlaforms-item__information-title">
                                <h3>MT4 Downloadable</h3>
                            </div>

                            <div class="listOfPlaforms-item__information-text">
                                <p>
                                    MT4 is an advanced trading platform that gives you access
                                    to various tools and features to help you carry out analysis
                                    and customize your trading experience. These tools can also help
                                    you to use and build trading algorithms that can automate your trading.
                                    You can add EAs and indicators and develop your trading system.
                                </p>
                            </div>

                            <div class="listOfPlaforms-item__information-link">
                                <a class="downloadable-icon" href="#">Download the <span
                                        style="font-weight: bold;">Windows App</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="listOfPlaforms-item _anim-items _anim-no-hide">
                        <div class="listOfPlaforms-item__badge">
                            <div class="square"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg__files/mobile-icon.svg">
                        </div>

                        <div class="listOfPlaforms-item__information">
                            <div class="listOfPlaforms-item__information-title">
                                <h3>Mobile & macOS</h3>
                            </div>

                            <div class="listOfPlaforms-item__information-text">
                                <p>
                                    The MT4 mobile and macOS versions of the outstanding MT4 platform
                                    allow you to trade on all of your devices and anywhere that you
                                    might be. You can trade easily across the entire scope of the MT4 platforms.
                                    Just install the app for your mobile or download the macOS version.
                                </p>
                            </div>

                            <div class="listOfPlaforms-item__information-links">
                                <div class="listOfPlaforms-item__information-link">
                                    <a class="downloadable-icon" href="#">Download on the <span
                                            style="font-weight: bold;">App Store</span></a>
                                </div>

                                <div class="listOfPlaforms-item__information-link">
                                    <a class="downloadable-icon" href="#">Get it on <span
                                            style="font-weight: bold;">Google Pay</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="getStart__section">
            <div id="break-line-5"></div>

            <div class="best-trader__chart-animated-chart-bg" id="animated-chart-bg-4"></div>

            <div class="getStart__decoration-start">
                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-start__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div class="getStart__bg-wrapper">
                <div class="getStart__container container">
                    <div class="getStart__content">
                        <div class="getStart__content--information">
                            <div id="chart-sm-5"></div>

                            <div id="chart-sm-6"></div>

                            <div class="getStart__content--information--title">
                                <h1 class="_anim-items _anim-no-hide">Ready</h1>
                                <h2 class="_anim-items _anim-no-hide">to get started?</h2>
                            </div>

                            <div class="getStart__content--information--buttons _anim-items _anim-no-hide">
                                <div class="big-btn__wrapper">
                                    <button><a href="./sign-up.index">Registration</a></button>
                                </div>

                                <div class="underline-link">
                                    <button><a href="./sign-in.index">Log In</a></button>
                                </div>
                            </div>
                        </div>

                        <div class="getStart__content--widget _anim-items _anim-no-hide">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container" style="width: 100%; height: 100%;">
                                <div class="tradingview-widget-container__widget"></div>
                                <div #tradingview style="width: 100%; height: 100%;"></div>
                                <script type="text/javascript"
                                    src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js"
                                    async>
                                        {
                                            "width": "100%",
                                                "height": "100%",
                                                    "currencies": [
                                                        "EUR",
                                                        "USD",
                                                        "JPY",
                                                        "GBP",
                                                        "CHF",
                                                        "AUD",
                                                        "CAD",
                                                        "NZD",
                                                        "CNY"
                                                    ],
                                                        "isTransparent": false,
                                                            "colorTheme": "light",
                                                                "locale": "en"
                                        }
                                    </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="getStart__decoration-end">
                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>

                <div class="decoration-end__item">
                    <div class="decoration__dot">
                        <div class="dot-circle"></div>
                    </div>
                </div>
            </div>

            <div id="break-line-6"></div>
        </div>


    </div>

   

    


	
<?php
get_footer();
