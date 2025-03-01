<!-- <h1>Oops! Something went wrong!</h1> -->
<!-- <p>
  <?php
    htmlspecialchars($errorMessage)
  ?>
</p> -->

<?php if ($isDebug): ?>
  <!-- <h2>Stack Trace:</h2>
  <pre><?php 
    // htmlspecialchars($trace) 
    ?></pre> -->
<?php endif; ?>

<section class="error-page">
    <div class="container">
        <div class="error-page__inner text-center">
            <div class="error-page__img float-bob-y">
                <img src="/assets/general/images/resources/error-page-img1.png" alt="">
            </div>

            <div class="error-page__content">
                <h1>500</h1>
                <h2>Oops! Internal Server Error!</h2>
                <p>The server cannot process the request for an unknown reason.</p>
                <pre><?=htmlspecialchars($errorMessage)?></pre>
                <?php if ($isDebug): ?>
                  <p>Stack Trace:</p>
                  <pre style="text-align:left"><?= 
                    htmlspecialchars($trace) 
                    ?></pre>
                <?php endif; ?>
                <div class="btn-box">
                    <a class="thm-btn" href="/">Back To Home
                        <i class="icon-right-arrow21"></i>
                        <span class="hover-btn hover-bx"></span>
                        <span class="hover-btn hover-bx2"></span>
                        <span class="hover-btn hover-bx3"></span>
                        <span class="hover-btn hover-bx4"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>