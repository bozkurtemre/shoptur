<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigasyon
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html"
            data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <!-- Home -->
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Anasayfa</span>
                        </a>
                    </li>

                    <!-- Orders -->
                    <li class="nav-parent">
                        <a class="nav-link parent-tab" href="javascript:void(0)">
                            <i class="bx bxs-cart-download" aria-hidden="true"></i>
                            <span>Siparişler</span>
                            <span class="badge badge-primary">0</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="javascript:void(0)">
                                    Tüm Siparişler
                                    <!-- <span class="badge badge-primary" style="margin-bottom: 5px;">0</span> -->
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="javascript:void(0)">
                                    Onay Bekleyen Siparişler
                                    <!-- <span class="badge badge-primary" style="margin-bottom: 5px;">0</span> -->
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="javascript:void(0)">
                                    İade Edilen Siparişler
                                    <!-- <span class="badge badge-primary" style="margin-bottom: 5px;">0</span> -->
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="javascript:void(0)">
                                    Tamamlanan Siparişler
                                    <!-- <span class="badge badge-primary" style="margin-bottom: 5px;">0</span> -->
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Store -->
                    <li class="nav-parent">
                        <a class="nav-link parent-tab" href="javascript:void(0)">
                            <i class="bx bx-store" aria-hidden="true"></i>
                            <span>Mağaza</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="javascript:void(0)">
                                    Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="javascript:void(0)">
                                    Markalar
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin.categories') }}">
                                    Kategoriler
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Shipping -->
                    <li class="nav-parent">
                        <a class="nav-link parent-tab" href="javascript:void(0)">
                            <i class="bx bx-package" aria-hidden="true"></i>
                            <span>Kargo</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="javascript::void(0)">
                                    Firmalar
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="javascript::void(0)">
                                    Entegrasyonlar
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Customize -->
                    <li class="nav-parent">
                        <a class="nav-link parent-tab" href="javascript:void(0)">
                            <i class="bx bx-customize" aria-hidden="true"></i>
                            <span>Özelleştir</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="javascript::void(0)">
                                    Temalar
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Payment -->
                    <li class="nav-parent">
                        <a class="nav-link parent-tab" href="javascript:void(0)">
                            <i class="bx bx-credit-card" aria-hidden="true"></i>
                            <span>Ödeme</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="javascript::void(0)">
                                    Entegrasyonlar
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Users -->
                    <li class="nav-parent">
                        <a class="nav-link parent-tab" href="javascript:void(0)">
                            <i class="bx bx-user" aria-hidden="true"></i>
                            <span>Kullanıcılar</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="javascript::void(0)">
                                    Listele
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="javascript::void(0)">
                                    Gruplar
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Reports -->
                    <li class="nav-parent">
                        <a class="nav-link parent-tab" href="javascript:void(0)">
                            <i class="bx bxs-report" aria-hidden="true"></i>
                            <span>Raporlar</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="javascript::void(0)">
                                    Siparişler
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Settings -->
                    <li class="nav-parent">
                        <a class="nav-link parent-tab" href="javascript:void(0)">
                            <i class="bx bx-cog" aria-hidden="true"></i>
                            <span>Ayarlar</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('admin.logs') }}">
                                    Sistem Log
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </nav>

            <hr class="separator" />

            <div class="sidebar-widget widget-stats">
                <div class="widget-header">
                    <h6>Özet</h6>
                </div>
                <div class="widget-content">
                    <ul>
                        <li>
                            <span class="stats-title">Tamamlanan Sipariş</span>
                            <span class="stats-complete">0%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-without-number"
                                    role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 0%;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="stats-title">Onay Bekleyen Sipariş</span>
                            <span class="stats-complete">0%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-without-number"
                                    role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 0%;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="stats-title">İptal Edilen Sipariş</span>
                            <span class="stats-complete">0%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-without-number"
                                    role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 0%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-widget widget-stats">
                <div class="widget-header">
                    <h6>Yazılım</h6>
                </div>
                <div class="widget-content">
                    <ul>
                        <li>
                            <span class="stats-title">Versiyon</span>
                            <span class="stats-complete">{{ config('app.version') }}</span>
                        </li>
                        <li>
                            <span class="stats-title">PHP</span>
                            <span class="stats-complete">{{ phpversion() }}</span>
                        </li>
                        <li>
                            <span class="stats-title">Framework</span>
                            <span class="stats-complete">{{ app()->version() }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            // Maintain Scroll Position
                if (typeof localStorage !== 'undefined') {
                    if (localStorage.getItem('sidebar-left-position') !== null) {
                        var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                        sidebarLeft.scrollTop = initialPosition;
                    }
                }
        </script>

    </div>

</aside>
