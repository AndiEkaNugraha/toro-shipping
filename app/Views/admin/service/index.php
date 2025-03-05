<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2>Service</h2>
        </div>            
        <div class="col-md-6 col-sm-12 text-right">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator/<?=$userAuthorize->seo_name??""?>"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">Service</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid mb-3 text-right">
    <a href="/administrator/<?=$userAuthorize->seo_name??''?>/services/create" class="btn btn-dark">Create</a>
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
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($listServices as $key => $service): ?>
                                    <tr style="cursor: pointer;" data-id="<?=$service->id??""?>" onclick="window.location='/administrator/<?=$userAuthorize->seo_name??''?>/faq/<?=$service->id??''?>'">
                                        <td class="text-center"><?=$key + 1?></td>
                                        <td class="text-center"><?=$service->order_number??""?></td>
                                        <td><?=truncateContent($service->title??"", 50)?></td>
                                        <td class="text-center"><p class="badge <?=$service->is_active?"badge-primary":"badge-danger"?> mb-0"><?=$service->is_active?"Active":"Inactive"?></p></td>
                                        <td><?=$service->create_at??""?></td>
                                        <td><?=$service->update_at??""?></td>
                                        <td class="text-center" onclick="event.stopPropagation();">
                                            <input type="hidden" name="service_id" value="<?=$service->id??''?>">
                                            <button class="btn js-sweetalert" style="box-shadow: none;color:var(--danger);" 
                                                data-type="delete" 
                                                data-url="/administrator/<?=$userAuthorize->seo_name??''?>/faq" 
                                                data-id="<?=$service->id??''?>"
                                                data-csrf = "<?= csrf_token_value() ?>">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </td>
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