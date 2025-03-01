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
        <div class="col-md-12">
            <div class="card">
                <div class="body">
                    <form id="formValidation" method="post" novalidate>
                        <?= csrf_token() ?>
                        <div class="form-group">
                            <label>Order</label>
                            <input name="order" value="<?=$seoPage->order_number??0?>" type="number" class="form-control col-md-3" required>
                        </div>
                        <div class="form-group">
                            <label>Page Name</label>
                            <input name="pageName" value="<?=$seoPage->pageName??""?>" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Located in</label>
                            <br/>
                            <label class="fancy-checkbox">
                                <input <?=(($seoPage->showInNavbar??0) == 1)?"checked":""?> type="checkbox" name="showInNavbar">
                                <span>Navbar</span>
                            </label>
                            <label class="fancy-checkbox">
                                <input <?=(($seoPage->showInFooter??0) == 1)?"checked":""?> type="checkbox" name="showInFooter">
                                <span>Footer</span>
                            </label>
                            <p id="error-checkbox"></p>
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label>Status</label>
                            <br />
                            <label class="fancy-radio">
                                <input <?=(($seoPage->is_active??0) == 1)?"checked":""?> type="radio" name="status" value="1" required data-parsley-errors-container="#error-radio">
                                <span><i></i>Active</span>
                            </label>
                            <label class="fancy-radio">
                                <input <?=(($seoPage->is_active??0) == 0)?"checked":""?> type="radio" name="status" value="0">
                                <span><i></i>Inactive</span>
                            </label>
                            <p id="error-radio"></p>
                        </div>
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input name="metaTitle" value="<?=$seoPage->meta_title??""?>" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea name="metaDesc" rows="4" class="form-control" required><?=$seoPage->meta_desc??""?></textarea>
                        </div>
                        <br>
                        <hr/>
                        <div class="text-right">
                            <button type="submit" class="btn btn-dark">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
