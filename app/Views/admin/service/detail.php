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

<div class="container-fluid">
    <!-- Masked Input -->
    <div class="row clearfix">
        <div class="col-md-12">
            <form id="formValidation" method="post" novalidate enctype="multipart/form-data">
                <?= csrf_token() ?>
                <div class="card">
                    <div class="body">
                        <div class="form-group">
                            <label>Order</label>
                            <input name="order" value="<?=$service->order_number??0?>" type="number" class="form-control col-md-3" required>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" value="<?=$service->title??""?>" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Synopsys</label>
                            <textarea name="synopsis" class="form-control" required><?=$service->synopsys??""?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea id="ckeditor"><?=$service->content??""?></textarea> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div class="form-group" style="width: 200px;height: 200px">
                            <label>Icon</label>
                            <input required name="icon" type="file" class="dropify" data-height="200" data-allowed-file-extensions="png" data-default-file="/file/service/<?=isset ($service->banner) && $service->banner !== ""  ? $service->banner : "default/default.jpg"?>" >
                        </div>
                        <div class="d-lg-flex">
                            <div class="form-group col">
                                <label>Banner</label>
                                <input required name="banner" type="file" class="dropify" data-height="300" data-allowed-file-extensions="jpg png jpeg gif webp" data-default-file="/file/service/<?=isset ($service->banner) && $service->banner !== ""  ? $service->banner : "default/default.jpg"?>" >
                            </div>
                            <div class="form-group col">
                                <label>Thumbnail Square</label>
                                <div class="justify-content-center">
                                    <input required name="thumbnail" type="file" class="dropify" data-height="300" data-allowed-file-extensions="jpg png jpeg gif webp" data-default-file="/file/service/<?=isset ($service->squereBanner) && $service->squereBanner !== ""  ? $service->squereBanner : "default/default.jpg"?>" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label>File</label>
                            <input required type="file" class="filepond" name="filepond[]" multiple/>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div class="form-group">
                            <label>Status</label>
                            <br />
                            <label class="fancy-radio">
                                <input <?=(($service->is_active??0) == 1)?"checked":""?> type="radio" name="status" value="1" required data-parsley-errors-container="#error-radio">
                                <span><i></i>Active</span>
                            </label>
                            <label class="fancy-radio">
                                <input <?=(($service->is_active??0) == 0)?"checked":""?> type="radio" name="status" value="0">
                                <span><i></i>Inactive</span>
                            </label>
                            <p id="error-radio"></p>
                        </div>
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input name="metaTitle" value="<?=$service->meta_title??""?>" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea name="metaDesc" class="form-control" required><?=$service->meta_desc??""?></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-right mb-4">
                    <button type="submit" class="btn btn-dark">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
