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
                            <input name="order" value="<?=$faq->order_number??0?>" type="number" class="form-control col-md-3" required>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" value="<?=$faq->title??""?>" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <div class="summernote"><?=$faq->content??""?></div>
                            <input type="hidden" value="<?=$faq->content??""?>" name="content" id="content" required>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label>Status</label>
                            <br />
                            <label class="fancy-radio">
                                <input <?=(($faq->is_active??0) == 1)?"checked":""?> type="radio" name="status" value="1" required data-parsley-errors-container="#error-radio">
                                <span><i></i>Active</span>
                            </label>
                            <label class="fancy-radio">
                                <input <?=(($faq->is_active??0) == 0)?"checked":""?> type="radio" name="status" value="0">
                                <span><i></i>Inactive</span>
                            </label>
                            <p id="error-radio"></p>
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
