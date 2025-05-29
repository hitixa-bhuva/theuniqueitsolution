<?php
   $Title = "Blog | Insights & Updates from The Unique IT Solution";
   $MetaDescription = "Explore expert insights, IT trends, and case studies across various industries. Stay updated with the latest from The Unique IT Solution.";
   $MetaKeywords = "IT blog, software development articles, industry insights, technology trends, case studies";
   ?>
<?php
   include __DIR__ . '/A_Layout/Header/header.php';
   ?>
<div class="wrapper">
    <main>
        <!-- 1. Blog hero -->
        <section class="banner overlyshadow technologies-banner page-banner" style="margin-bottom: 80px; background-image: url(./assest/img/hero/blog-banner.jpg) !important;">
            <div class="MuiContainer-root MuiContainer-maxWidthXl css-k4xlog">
                <div class="banner-content">
                    <h2 class="MuiTypography-root MuiTypography-h2 pb-3 css-17zkhbb" id="hero-title">Blog</h2>
                    <p class="MuiTypography-root MuiTypography-body1 css-1b7jm6v" id="hero-text">Explore how Unique IT Solution empowers diverse industries with innovative, tech-driven solutions tailored for real-world impact.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div id="blog-badges" class="article-tags d-flex flex-wrap gap-2 justify-content-center blog-badge mt-0 aos-init" data-aos="fade-up">
                        <span class="badge filter-badge  active"  data-category="all">All</span>
                        <span class="badge filter-badge "  data-category="react">React</span>
                        <span class="badge filter-badge "  data-category="angular">Angular</span>
                        <span class="badge filter-badge "  data-category="frontend">Frontend Development</span>
                        <span class="badge filter-badge "  data-category="js-frameworks">JavaScript Frameworks</span>
                        <span class="badge filter-badge "  data-category="web-dev">Web Development</span>
                    </div>
                    <!-- Blog Listings -->
                    <div class="col-lg-8">
                        <div class="row" id="blog-list">
                            <!-- Blog Card 1 -->
                            <div id="blog-1" class="aos-init col-md-6 mb-4 blog-item react frontend js-frameworks" data-aos="fade-up">
                                <a href="blog-details">
                                    <div class="blog-card card h-100">
                                        <div class="premium-badge badge bg-primary me-2">BUSINESS</div>
                                        <img src="./assest/img/blog-page/blog-1.png" class="card-img-top" alt="Blog Image" />
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-2">
                                                <!-- <span class="badge bg-primary me-2">BUSINESS</span> -->
                                                <small class="text-muted">May 15, 2025</small>
                                            </div>
                                            <h5 class="card-title">How to Build a Successful Remote Team</h5>
                                            <p class="card-text">Discover the secrets to building and managing high-performing remote teams in today's digital workplace.</p>
                                            <div class="blog-meta">
                                                <span><i class="far fa-user"></i> John Smith</span>
                                                <span><i class="far fa-eye"></i> 1.2K Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Blog Card 3 -->
                            <div id="blog-2" class="aos-init col-md-6 mb-4 blog-item angular frontend js-frameworks web-dev" data-aos="fade-up">
                                <div class="blog-card card h-100">
                                    <div class="premium-badge badge bg-primary me-2">FINANCE</div>
                                    <img src="./assest/img/blog-page/blog-2.png" class="card-img-top" alt="Blog Image" />
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <small class="text-muted">May 10, 2025</small>
                                        </div>
                                        <h5 class="card-title">Investment Strategies for Economic Uncertainty</h5>
                                        <p class="card-text">Learn proven investment approaches that can help protect and grow your wealth during volatile times.</p>
                                        <div class="blog-meta">
                                            <span><i class="far fa-user"></i> David Wilson</span>
                                            <span><i class="far fa-eye"></i> 1.5K Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Card 4 -->
                            <div id="blog-3" class="aos-init col-md-6 mb-4 blog-item frontend web-dev" data-aos="fade-up">
                                <div class="blog-card card h-100">
                                    <div class="premium-badge badge bg-primary me-2">HEALTH</div>
                                    <img src="./assest/img/blog-page/blog-3.png" class="card-img-top" alt="Blog Image" />
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <small class="text-muted">May 8, 2025</small>
                                        </div>
                                        <h5 class="card-title">The Science Behind Effective Mindfulness</h5>
                                        <p class="card-text">Discover the research-backed benefits of mindfulness practices and how to implement them in your daily routine.</p>
                                        <div class="blog-meta">
                                            <span><i class="far fa-user"></i> Lisa Parker</span>
                                            <span><i class="far fa-eye"></i> 920 Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Card 5 -->
                            <div id="blog-4" class="aos-init col-md-6 mb-4 blog-item js-frameworks web-dev" data-aos="fade-up">
                                <div class="blog-card card h-100">
                                    <div class="premium-badge badge bg-primary me-2">MARKETING</div>
                                    <img src="./assest/img/blog-page/blog-4.png" class="card-img-top" alt="Blog Image" />
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <small class="text-muted">May 5, 2025</small>
                                        </div>
                                        <h5 class="card-title">Content Marketing Strategies That Convert</h5>
                                        <p class="card-text">Learn how to create content that not only engages your audience but also drives measurable conversions.</p>
                                        <div class="blog-meta">
                                            <span><i class="far fa-user"></i> Michael Brown</span>
                                            <span><i class="far fa-eye"></i> 1.3K Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Card 6 -->
                            <div id="blog-5" class="aos-init col-md-6 mb-4 blog-item js-frameworks web-dev" data-aos="fade-up">
                                <div class="blog-card card h-100">
                                    <div class="premium-badge badge bg-primary me-2">LEADERSHIP</div>
                                    <img src="./assest/img/blog-page/blog-5.png" class="card-img-top" alt="Blog Image" />
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <small class="text-muted">May 3, 2025</small>
                                        </div>
                                        <h5 class="card-title">Leadership Principles for the Modern Workplace</h5>
                                        <p class="card-text">Explore the evolving nature of leadership and the principles that drive success in today's business environment.</p>
                                        <div class="blog-meta">
                                            <span><i class="far fa-user"></i> Rachel Green</span>
                                            <span><i class="far fa-eye"></i> 780 Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="sticky-sidebar">
                            <div class="category-filter aos-init" data-aos="fade-up">
                                <h5 class="filter-title">Categories</h5>
                                <div class="category-item">
                                    <a href="#">Business</a>
                                    <span>(12)</span>
                                </div>
                                <div class="category-item">
                                    <a href="#">Technology</a>
                                    <span>(8)</span>
                                </div>
                                <div class="category-item">
                                    <a href="#">Finance</a>
                                    <span>(7)</span>
                                </div>
                                <div class="category-item">
                                    <a href="#">Marketing</a>
                                    <span>(10)</span>
                                </div>
                                <div class="category-item">
                                    <a href="#">Leadership</a>
                                    <span>(5)</span>
                                </div>
                                <div class="category-item">
                                    <a href="#">Health</a>
                                    <span>(6)</span>
                                </div>
                            </div>
                            <div class="category-filter  aos-init" data-aos="fade-up">
                                <h5 class="filter-title">Popular Posts</h5>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <img src="./assest/img/blog-page/side-blog-1.png" alt="Popular Post" class="img-fluid rounded" />
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-1">7 Effective Negotiation Tactics</h6>
                                        <small class="text-muted">May 1, 2025</small>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <img src="./assest/img/blog-page/side-blog-2.png" alt="Popular Post" class="img-fluid rounded" />
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-1">Digital Transformation Guide</h6>
                                        <small class="text-muted">April 28, 2025</small>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <img src="./assest/img/blog-page/side-blog-3.png" alt="Popular Post" class="img-fluid rounded" />
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-1">Customer Retention Strategies</h6>
                                        <small class="text-muted">April 25, 2025</small>
                                    </div>
                                </div>
                            </div>
                            <div class="category-filter text-center"  style="background-color: var(--primary-light);">
                                <div class="py-3">
                                    <h5 class="filter-title mb-3 aos-init" data-aos="fade-up">Need Help or Have Questions?</h5>
                                    <p class="mb-4 aos-init" data-aos="fade-up">Get in touch with us for any inquiries or assistance.</p>
                                    <a href="/contact" class="btn btn-primary rounded-pill px-4 py-2 aos-init" data-aos="fade-up">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </main>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const badges = document.querySelectorAll("#blog-badges .filter-badge");
        const blogItems = document.querySelectorAll("#blog-list .blog-item");

        badges.forEach((badge) => {
            badge.addEventListener("click", function () {
                const category = this.getAttribute("data-category");

                // Highlight active badge
                badges.forEach((b) => b.classList.remove("active"));
                this.classList.add("active");

                // Show/Hide blogs based on category
                blogItems.forEach((item) => {
                    if (category === "all" || item.classList.contains(category)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });
    });
</script>
<?php
   include __DIR__ . '/A_Layout/Footer/footer.php';
   ?>
