<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2>Seo Page</h2>
        </div>            
        <div class="col-md-6 col-sm-12 text-right">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator/<?=$userAuthorize->seo_name??""?>"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">Seo Page</li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- Masked Input -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Order</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($seoPage as $key => $page): ?>
                                    <tr style="cursor: pointer;" data-id="<?=$page->id??""?>" onclick="window.location='/administrator/<?=$userAuthorize->seo_name??''?>/seo-page/<?=$page->id??''?>'">
                                        <td class="text-center"><?=$key + 1?></td>
                                        <td class="text-center"><?=$page->order_number??""?></td>
                                        <td><?=truncateContent($page->pageName??"", 50)?></td>
                                        <td class="text-center"><p class="badge <?=$page->is_active?"badge-primary":"badge-danger"?> mb-0"><?=$page->is_active?"Active":"Inactive"?></p></td>
                                        <td><?=$page->update_at??""?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>