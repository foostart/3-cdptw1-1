<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1937">
    <div class="container-main">
        <div class="container-fluid">
            <div class="tab">
                <ul class="nav-menu nav nav-tabs justify-content-center pt-0 pb-3" style="border-bottom:none">
                    <li class="nav-item">
                        <a href="#details " data-toggle="tab" class="nav-link active">Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="#information" data-toggle="tab" class="nav-link">More Information</a>
                    </li>
                    <li class="nav-item">
                        <a href="#reviews" data-toggle="tab" class="nav-link">Reviews</a>
                    </li>
                </ul>
                <div class="tab-content pt-4">
                    <div class="container tab-pane active" id="details" style="position: relative; overflow: hidden; transition: height 250ms ease-out 0s;">
                        <div class="col-md-12">
                            <h2>Details Duis lobortis massa imperdiet quam</h2>
                            <p>Fusce a quam. Sed in libero ut nibh placerat accumsan. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Suspendisse potenti.</p>
                            <p>Ut leo. Vivamus euismod mauris. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Etiam sit amet orci eget eros faucibus tincidunt. Fusce egestas elit eget lorem.</p>
                            <p>Phasellus consectetuer vestibulum elit. Praesent nonummy mi in odio. Pellentesque auctor neque nec urna. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Pellentesque dapibus hendrerit tortor.</p>
                            <img src="./images/product-detail.jpg" alt="hinh1">
                        </div>
                    </div>
                    <div class="container tab-pane fade" id="information" style="position: relative; overflow: hidden; height: 200px; transition: height 250ms ease-out 0s;">
                        <table class="table-detail">
                            <tbody>
                                <tr>
                                    <th class="label" scope="col">Manufacturer</th>
                                    <th scope="col" class="data">Blue Stone</th>
                                </tr>
                                <tr class="table-items">
                                    <th class="label" scope="col">Pattern</th>
                                    <th scope="col" class="data">Solid</th>
                                </tr>
                                <tr>
                                    <th class="label" scope="col">Style</th>
                                    <th scope="col" class="data">Modern</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container tab-pane fade" id="reviews" style="position: relative; overflow: hidden; transition: height 250ms ease-out 0s;">
                        <div class="reviews">
                            <div class="review-title">
                                <strong> Great theme</strong>
                                <span>
                                    <span> - Review by</span> 
                                    <strong>Vincent Joson</strong>
                                </span>
                                <span>
                                    <span>Posted on </span> 
                                    <strong>17/09/2019</strong>
                                </span>
                            </div>    
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="review-ratings">
                                        <div class="rating-summary">
                                            <span class="title-rating">Quality</span>
                                            <span class="rating-result">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <div class="rating-summary">
                                            <span class="title-rating">Value</span>
                                            <span class="rating-result" style="padding-left: 13px;">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                        <div class="rating-summary">
                                            <span class="title-rating">Price</span>
                                            <span class="rating-result" style="padding-left: 13px;">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="review-content">
                                        Martfury is a modern and flexible eCommerce Magento 2 theme. 
                                        This theme is suited for marketplace, electronics store, furniture store, clothing store, hitech store and accessories store… 
                                        With the theme, you can create easily and quickly your own store.
                                        -- Creating product reviews programmatically.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row pt-4 pb-3 mgl">
                            <div class="col-12 col-sm-12 col-md-5 col-lg-4">
                                <div class="label">
                                    <span>Your Rating</span>
                                </div>
                                <div class="control">
                                    <div class="review-product">
                                        <div class="review-rating">
                                            <label class="title">Price</label>
                                          <div class="my-rating-8"></div>
                                        </div>
                                        <div class="review-rating">
                                            <label class="title">Value</label>
                                            <div class="my-rating-8"></div>
                                        </div>
                                        <div class="review-rating">
                                            <label class="title">Quality</label>
                                             <div class="my-rating-8"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-7 col-lg-8">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <label class="label">
                                            <span>Nickname</span>
                                        </label>
                                        <form>
                                            <input type="text" class="form-control" id="exampleInputNickname" placeholder="Nickname">
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <label class="label">
                                            <span>Summary</span>
                                        </label>
                                        <form>
                                            <input type="text" class="form-control" id="exampleInputSummary" placeholder="Summary">
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label class="label">
                                            <span>Review</span>
                                        </label>
                                        <form>
                                            <textarea class="form-control" id="exampleInputReview" rows="3"></textarea>
                                        </form>
                                    </div>
                                    <div class="actions-toolbar pt-3 pl-3">
                                        <div class="actions-primary">
                                            <button type="button" class="btn btn-secondary">Secondary</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>