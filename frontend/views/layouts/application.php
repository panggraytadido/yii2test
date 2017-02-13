<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\ApplicationAsset;
use common\widgets\Alert;
use yii\web\Session;

ApplicationAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="fixed-nav fixed-nav-basic">
        <?php $this->beginBody() ?>

        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">

                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Administrator Admin</strong>
                                        </span> 
                                        <span class="text-muted text-xs block">

                                            Divisi : ADMIN                                        <br>
                                            Lokasi : PARUNG-BOGOR                                                                        <b class="caret"></b>
                                        </span></span></a><a target="_blank" href="/cindygroupserver/erp/public_html/../site/download">Lihat Userguide</a>                              

                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="/cindygroupserver/erp/public_html/user/profile">Profile</a></li>
                                    <li><a href="/cindygroupserver/erp/public_html/user/profile/changepassword">Ubah Password</a></li>
                                    <li><a href="/cindygroupserver/erp/public_html/user/logout">Logout</a></li>
                                </ul>
                            </div>

                            <div class="logo-element">
                                <img alt="image" class="img-circle" src="/cindygroupserver/erp/public_html/img/profile_small.jpg">
                            </div>
                        </li>
                        <!-- COMPONENT MENU -->
                        <?php Yii::$app->Menu->createMenu(); ?>
                        <!-- -->
                        <!-- <li class="active"><a href="#"><i class="fa fa-th-large"></i><span class="nav-label">Data Master</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/kantor">Kantor</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/divisi">Divisi</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/lokasi">Lokasi</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/bagian">Bagian</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/crudbarang">Barang</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/inventaris">Inventaris</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin">Gaji</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/user/admin">User</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/karyawan">Karyawan</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/pelanggan">Pelanggan</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/supplier">Supplier</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/bank">Bank</a></li></ul><ul class="nav nav-second-level collapse in"><li><a href="/cindygroupserver/erp/public_html/admin/keterangan">Keterangan</a></li></ul></li><li><a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Konfigurasi</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/perusahaan">Perusahaan</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/#">Manajemen Menu</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/rights">Manajemen Hak Akses</a></li></ul></li><li><a href="#"><i class="fa fa-database" "=""></i> <span class="nav-label">Data Barang</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/gudang">Divisi Gudang</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/besek">Divisi Besek</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/hygienis">Divisi Hygienis</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/hargabarang">Harga Barang</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/stockkeseluruhan">Stock Keseluruhan </a></li></ul></li><li><a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Data Referensi</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/jabatan">Jabatan</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/propinsi">Propinsi</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/kota">Kota</a></li></ul></li><li><a href="#"><i class="fa fa-dollar"></i> <span class="nav-label">Data Keuangan</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/dataabsensi">Data Absensi</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/databelitunai">Data Beli Tunai</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datajabatan">Data Jabatan</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datatransfer">Data Transfer</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datapendapatan">Data Pendapatan</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datapengeluaran">Data Pengeluaran</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datakasbon">Data Kasbon</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datatransportasi">Data Transportasi</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datapenggajian">Data Penggajian</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datafaktur">Data Faktur</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datadiskon">Data Discount</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/datasetoran">Data Setoran</a></li></ul></li><li><a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">Laporan</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/keuangan/keuanganharian">Keuangan Harian</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/rincianpengeluaran">Rincian Pengeluaran</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/labarugi">Laba Rugi</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/keuangan/slipgajikaryawan">Slip Penggajian</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/rinciansetoran">Rincian Setoran</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/rinciantransfer">Rincian Transfer</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/saldobank">Saldo Bank</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/pembelianbarang">Pembelian Barang</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/rinciancash">Rincian Cash</a></li></ul><ul class="nav nav-second-level collapse"><li><a href="/cindygroupserver/erp/public_html/admin/grafik">Grafik</a></li></ul></li>            </ul>-->
                    </ul>
                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">		
                    <nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                            </li>
                            <li>
                                <div id="clock" class="jamdini"><?php echo date('H:i:s'); ?></div>
                            </li>
                            <li>
                                <?php
                                echo Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                ?>
                                <a href="<?php //echo Yii::app()->baseurl.'/user/logout';  ?>">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>

                    </nav>
                </div>


                <div class="row wrapper border-bottom white-bg page-heading">
                    <br>
                    <div class="col-lg-12">                       
                        <ul class="breadcrumb">                         
                            <li class="active">
                                <?=
                                Breadcrumbs::widget([
                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                ])
                                ?>
                                <?= Alert::widget() ?>

                            </li>
                        </ul>
                    </div>                   
                </div>


                <?php echo $content; ?>

                <div class="footer">
                    <div class="pull-right">
                        <!--10GB of <strong>250GB</strong> Free.-->
                    </div>
                    <div>
                        <strong>Copyright</strong> Application &copy; 2016-2017
                    </div>
                </div>

            </div>
        </div> 
        <?php $this->endBody() ?>    
    </body>
</html>
<?php $this->endPage() ?>