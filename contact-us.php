<?php
   $Title = "Contact Us | Unique IT Solution Ahmedabad | Get in Touch";
   $MetaDescription ="Have a project in mind? Contact Unique IT Solution – a leading software development company in Ahmedabad – for custom IT solutions and expert consultation.";
   $MetaKeywords ="Contact software company Ahmedabad, software development inquiry, get in touch Unique IT Solution, IT consultation Ahmedabad";
   ?>
<?php
   include __DIR__ . '/A_Layout/Header/header.php';
   ?>
<div class="wrapper">
    <main>
        <!-- 1. hero Contact Us -->
        <section class="banner overlyshadow page-banner mb-9" style="background-image: url(./assest/img/hero/contact-us-banner.webp);">
            <div class="MuiContainer-root MuiContainer-maxWidthXl css-k4xlog">
                <div class="banner-content">
                    <h2 class="MuiTypography-root MuiTypography-h2 pb-3 css-17zkhbb" id="hero-title">Contact Us</h2>
                    <p class="MuiTypography-root MuiTypography-body1 css-1b7jm6v" id="hero-text">
                        Learn about our mission, values, and the team dedicated to delivering exceptional technology solutions for your business
                    </p>
                </div>
            </div>
        </section>
        <div class="MuiContainer-root MuiContainer-maxWidthXl css-k4xlog">
            <section class="contact-us-form-wrapper mb-9">
                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-6 css-xgs5wp contact-form-flex">
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-lg-6 css-yzz2ut form-padding pt-5">
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <a href="tel:+917874579457" title="+917874579457">
                                        <img loading="lazy" src="./assest/img/contact-us/ic-call.svg" alt="Call" /><span class="MuiTypography-root MuiTypography-body2 css-1i5tpjv">+917874579457</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+12156027044" title="+917874579457">
                                        <img loading="lazy" src="./assest/img/contact-us/ic-call.svg" alt="Call" /><span class="MuiTypography-root MuiTypography-body2 css-1i5tpjv">+1 (215) 602-7044</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@theuniqueitsolution.com" title="info@theuniqueitsolution.com">
                                        <img loading="lazy" src="./assest/img/contact-us/ic-email.svg" alt="Email" /><span class="MuiTypography-root MuiTypography-body2 css-1i5tpjv">info@theuniqueitsolution.com</span>
                                    </a>
                                </li>
                                <li>
                                    <img loading="lazy" src="./assest/img/contact-us/ic-location.svg" alt="Location" />
                                    <span class="MuiTypography-root MuiTypography-body2 css-1i5tpjv">Titanium Business Park, C-806, Ahemedabad, Gujarat 380051</span>
                                </li>
                                <li><img loading="lazy" src="./assest/img/contact-us/ic-location.svg" alt="Location" /><span class="MuiTypography-root MuiTypography-body2 css-1i5tpjv">2462 Brandon Ct, Bensalem, PA- 19020</span></li>
                            </ul>
                            <img loading="lazy" src="./assest/img/contact-us/contact-us.svg" alt="Contact Us" />
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-lg-6 css-1lo6hd pt-5">
                        <form id="contact-form" action="./Mail/test.php" method="post" enctype="multipart/form-data" class="needs-validation form-padding" novalidate>
                            <h3 class="MuiTypography-root MuiTypography-h3 pb-4 css-8ipg8">Get in Touch</h3>
                            <div class="row g-4">
                                <!-- Name -->
                                <div class="col-md-6 position-relative">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="fullName" placeholder=" " required />
                                        <label for="name">Name</label>
                                        <span class="position-absolute top-50 translate-middle-y ps-3 pe-2">
                                            <img loading="lazy" src="./assest/img/contact-us/ic-user-black.svg" alt="User" />
                                        </span>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6 position-relative">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder=" " required />
                                        <label for="email">Email</label>
                                        <span class="position-absolute top-50 translate-middle-y ps-3 pe-2">
                                            <img loading="lazy" src="./assest/img/contact-us/ic-email-black.svg" alt="Email" />
                                        </span>
                                    </div>
                                </div>
                                <!-- Subject -->
                                <div class="col-md-6 position-relative">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder=" " required />
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <!-- Phone -->
                                <div class="col-md-6 position-relative">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="phone" placeholder=" " required />
                                        <label for="phone">Phone</label>
                                        <span class="position-absolute top-50 translate-middle-y ps-3 pe-2">
                                            <img loading="lazy" src="./assest/img/contact-us/ic-call-black.svg" alt="Phone" />
                                        </span>
                                    </div>
                                </div>
                                <!-- Company Name -->
                                <div class="col-12 position-relative">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="company" placeholder=" " required />
                                        <label for="company">Company Name</label>
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="col-12 position-relative">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder=" " id="description" style="height: 100px;" required></textarea>
                                        <label for="description">Description</label>
                                    </div>
                                </div>
                                <!-- File Upload -->
                                <div class="file-upload" id="drop-area">
                                    <div id="upload-prompt">
                                        <img src="./assest/img/contact-us/ic-upload..svg" alt="Upload Icon" style="width: 48px;" />
                                        <p>
                                            Drag & drop here, or
                                            <label for="fileupload" style="color: blue; cursor: pointer;">choose file</label>
                                        </p>
                                        <span>Max size: 4 MB, Allowed Types: .doc, .pdf, .xls, .txt</span>
                                    </div>
                                    <div id="file-preview" style="display: none;">
                                        <img src="./assest/img/contact-us/ic-file.svg" alt="File Icon" style="width: 32px; vertical-align: middle;" />
                                        <p id="file-name" style="display: inline-block; margin-left: 8px;"></p>
                                        <span id="file-size" style="display: inline-block; margin-left: 8px; color: #666;"></span>
                                        <button id="remove-file" type="button" title="Remove file">
                                            <img src="./assest/img/contact-us/ic-delete.svg" alt="Delete" />
                                        </button>
                                    </div>
                                    <input type="file" id="fileupload" name="resume" />
                                </div>
                                <!-- Submit Button -->
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mfstbn">
                                    <!-- MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary -->
                                    <button class="css-107tsus" type="submit" title="Send Message">
                                        <span class="text">Send Message</span>
                                        <span class="MuiButton-icon MuiButton-endIcon MuiButton-iconSizeMedium css-lkx0br">
                                            <img loading="lazy" src="./assest/img/svg/ic-right-arrow-whit.svg" alt="Right Arrow" />
                                        </span>
                                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                                    </button>
                                    <div></div>
                                </div>
                            </div>
                            <div id="feedback" class="feedback-message"></div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <!-- 10 faq -->
        <section class="faq mb-9 outer-card aos-init" data-aos="fade-in">
            <div class="MuiContainer-root MuiContainer-maxWidthXl css-k4xlog">
                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-5 css-1tz8m30">
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-lg-5 css-1cam9av">
                        <div class="image-wrapper aos-init" data-aos="fade-up" data-aos-delay="100">
                            <img src="./assest/img/svg/FAQ.svg" alt="FAQ" loading="lazy" />
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-lg-7 css-hhx1lr">
                        <h3 class="MuiTypography-root MuiTypography-h3 pb-5 css-8ipg8 aos-init" data-aos="fade-up" data-aos-delay="100">FAQs</h3>
                        <div data-aos="fade-up" data-aos-delay="200" class="aos-init">
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                            How can I get in touch with Unique IT Solution?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body css-bqexvl">
                                            You can reach out to us through the Contact Us page by filling out the contact form with your details. Our team will get back to you promptly. Alternatively, you can also email us directly at
                                            info@uniqueitsolution.com or call us at our provided contact number.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                            What information is required to contact Unique IT Solution?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body css-bqexvl">
                                            You’ll need to provide basic contact information like your name, email address, and phone number. If you're representing a company, be sure to mention your company name. Giving us a detailed
                                            description of your project or concern will help us provide you with tailored solutions quickly.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                            What services can I inquire about through the Contact Us page?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body css-bqexvl">
                                            You can reach out to inquire about a variety of services provided by Unique IT Solution, including but not limited to Custom Software Development, Web Development, Mobile Application Development,
                                            and Workflow Automation. No matter your technical challenge, we're here to help you find the right solution.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                            What should I expect after contacting Unique IT Solution?
                                        </button>
                                    </h2>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body css-bqexvl">
                                            After submitting your inquiry, a representative from Unique IT Solution will reach out to gather more details, clarify your requirements, and discuss the best solution for your project. We aim to
                                            provide clear communication and guidance at every step.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                            Does Unique IT Solution offer support after project completion?
                                        </button>
                                    </h2>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body css-bqexvl">
                                            Absolutely. Unique IT Solution provides ongoing support and maintenance services after project delivery. Whether it’s for Web Development, Mobile App Development, or Custom Software Solutions, we
                                            ensure long-term success for your projects.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 11 Ready to build your custom -->
        <div class="MuiContainer-root MuiContainer-maxWidthXl css-k4xlog">
            <section class="request-proposal aos-init" data-aos="fade-in">
                <img src="./assest/img/svg/oval-left..svg" alt="Oval" class="oval-left aos-init" data-aos="fade-in" style="width: 18%;" />
                <img src="./assest/img/svg/oval-right.svg" alt="Oval" class="oval-right aos-init" data-aos="fade-in" style="width: 18%;" />
                <h3 class="MuiTypography-root MuiTypography-h3 pb-4 css-8ipg8 aos-init" data-aos="fade-up" data-aos-delay="100">Ready to build your custom application solution</h3>
                <span class="MuiTypography-root MuiTypography-subtitle2 css-4s5e1 aos-init" data-aos="fade-up" data-aos-delay="200">Send us your requirements on:</span>
                <ul data-aos="fade-up" data-aos-delay="300" class="aos-init">
                    <li>
                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1bcpry4" href="mailto:info@theuniqueitsolution.com">
                            <img loading="lazy" src="./assest/img/svg/ic-email-white.svg" alt="Email" /><span class="MuiTypography-root MuiTypography-subtitle1 css-3g41r5">info@theuniqueitsolution.com</span>
                        </a>
                    </li>
                    <li><small class="MuiTypography-root MuiTypography-body1 css-1b7jm6v">OR</small></li>
                    <li>
                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1bcpry4" href="tel:+917874579457">
                            <img loading="lazy" src="./assest/img/svg/ic-call-white.svg" alt="Call" /><span class="MuiTypography-root MuiTypography-subtitle1 css-3g41r5">+917874579457</span>
                        </a>
                    </li>
                    <li><small class="MuiTypography-root MuiTypography-body1 css-1b7jm6v">OR</small></li>
                    <li>
                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1bcpry4" href="tel:+12156027044" title="+917874579457">
                            <img loading="lazy" src="./assest/img/svg/ic-call-white.svg" alt="Call" /><span class="MuiTypography-root MuiTypography-subtitle1 css-3g41r5">+1 (215) 602-7044</span>
                        </a>
                    </li>
                </ul>
                <a href="contact-us">
                    <button
                        class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedInherit MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorInherit css-bzz2as aos-init"
                        tabindex="0"
                        type="button"
                        title="Request a Proposal"
                        data-aos="fade-up"
                        data-aos-delay="400"
                    >
                        <span class="text">Request a Proposal</span><span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </button>
                </a>
            </section>
        </div>
    </main>
</div>
<script src="./assest/js/email.js"></script>
<script>
    const contactform = document.getElementById("contact-form");

    contactform.addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(contactform); // collect all fields and file

        fetch("./Mail/test.php", {
            method: "POST",
            body: formData,
        })
            .then((response) => response.text())
            .then((data) => {
                console.log("Server response:", data);
                alert(data);
            })
            .catch((error) => {
                console.error("Upload error:", error);
            });
    });
</script>
<script>
    const dropArea = document.getElementById("drop-area");
    const fileInput = document.getElementById("fileupload");
    const uploadPrompt = document.getElementById("upload-prompt");
    const filePreview = document.getElementById("file-preview");
    const fileNameEl = document.getElementById("file-name");
    const fileSizeEl = document.getElementById("file-size");
    const removeBtn = document.getElementById("remove-file");

    const allowedTypes = [
        "application/pdf",
        "application/msword",
        "application/vnd.ms-excel",
        "text/plain",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document", // docx
        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
    ]; // xlsx

    // Prevent default drag behaviors
    ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Highlight on dragover
    ["dragenter", "dragover"].forEach((eventName) => {
        dropArea.addEventListener(eventName, () => dropArea.classList.add("dragover"), false);
    });

    ["dragleave", "drop"].forEach((eventName) => {
        dropArea.addEventListener(eventName, () => dropArea.classList.remove("dragover"), false);
    });

    // Handle dropped files
    dropArea.addEventListener("drop", (e) => {
        const dt = e.dataTransfer;
        const files = dt.files;
        if (files.length > 0) {
            handleFile(files[0]);
        }
    });

    // Handle file input change
    fileInput.addEventListener("change", () => {
        if (fileInput.files.length > 0) {
            handleFile(fileInput.files[0]);
        }
    });

    // Handle file selection & validation
    function handleFile(file) {
        if (!allowedTypes.includes(file.type)) {
            alert("File type not allowed. Allowed: .doc, .pdf, .xls, .txt");
            resetPreview();
            return;
        }
        if (file.size > 4 * 1024 * 1024) {
            // 4 MB limit
            alert("File is too large. Max size is 4 MB.");
            resetPreview();
            return;
        }
        fileNameEl.textContent = file.name;
        fileSizeEl.textContent = (file.size / 1024).toFixed(2) + " KB";

        uploadPrompt.style.display = "none";
        filePreview.style.display = "block";
    }

    // Remove file and reset UI
    removeBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        resetPreview();
    });

    function resetPreview() {
        fileInput.value = "";
        fileNameEl.textContent = "";
        fileSizeEl.textContent = "";
        filePreview.style.display = "none";
        uploadPrompt.style.display = "block";
    }
</script>
<?php
   include __DIR__ . '/A_Layout/Footer/footer.php';
   ?>
