<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2>Frequently Asked Questions</h2>
        </div>            
        <div class="col-md-6 col-sm-12 text-right">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator/<?=$userAuthorize->seo_name??""?>"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">FAQ</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid mb-3 text-right">
    <a href="/administrator/<?=$userAuthorize->seo_name??''?>/faq/create" class="btn btn-dark">Create</a>
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
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($listFaq as $key => $faq): ?>
                                    <tr style="cursor: pointer;" data-id="<?=$faq->id??""?>" onclick="window.location='/administrator/<?=$userAuthorize->seo_name??''?>/faq/<?=$faq->id??''?>'">
                                        <td class="text-center"><?=$key + 1?></td>
                                        <td class="text-center"><?=$faq->order_number??""?></td>
                                        <td><?=truncateContent($faq->title??"", 50)?></td>
                                        <td><?=truncateContent($faq->content??"", 50)?></td>
                                        <td class="text-center"><p class="badge <?=$faq->is_active?"badge-primary":"badge-danger"?> mb-0"><?=$faq->is_active?"Active":"Inactive"?></p></td>
                                        <td><?=$faq->create_at??""?></td>
                                        <td><?=$faq->update_at??""?></td>
                                        <td class="text-center" onclick="event.stopPropagation();">
                                            <input type="hidden" name="faq_id" value="<?=$faq->id??''?>">
                                            <button class="btn js-sweetalert" style="box-shadow: none;color:var(--danger);" 
                                                data-type="delete" 
                                                data-url="/administrator/<?=$userAuthorize->seo_name??''?>/faq" 
                                                data-id="<?=$faq->id??''?>"
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