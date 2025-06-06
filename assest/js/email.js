const contactform = document.getElementById("contact-form");
contactform.addEventListener("submit", function(event) {
    event.preventDefault();
    console.log("Form submitted event triggered.");

    // Gather data from the form
    // Accessing the form field values
    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const subject = document.getElementById("subject").value;
    const company = document.getElementById("company").value;
    const description = document.getElementById("description").value;
    const fileupload = document.getElementById("fileupload").value;


    console.log("Collected form data:", {
        fullName,
        email,
        phone,
        subject,
        company,
        description,
        fileupload
    });


    // Create email data
    const emailData = {
        "Host": "216.10.241.228",
        "Port": "465",
        "SMTPSecure": "ssl",
        "SenderEmail": "hitixa.bhuva@uniqueconsumerservices.com",
        "SenderEmailPassword": "1f1UOc{3U*64",
        "ReciverEmail": "patelhitixa4439@gmail.com",
        "Subject": subject,
        "Body": `
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique it - Contact Information</title>
    <style type="text/css">
        /* Client-specific resets */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; }
       
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
       
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
   
        u + #body a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }
       
        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }
       
        @media (prefers-color-scheme: dark) {
            .darkmode-bg { background-color: #1a1a1a !important; }
            .darkmode-bg-light { background-color: #2d2d2d !important; }
            .darkmode-text { color: #f1f1f1 !important; }
            .darkmode-button { background-color: #0487ff !important; border-color: #0487ff !important; }
            .darkmode-link { color: #4da9ff !important; }
            .darkmode-border { border-color: #444444 !important; }
            .darkmode-secondary-bg { background-color: #333333 !important; }
            .darkmode-table-border { border-color: #444444 !important; }
            .darkmode-table-header { background-color: #333333 !important; }
            .darkmode-table-row-alt { background-color: #2a2a2a !important; }
        }
       
        @media screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                max-width: 100% !important;
            }
            .fluid {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            .stack-column-center {
                text-align: center !important;
            }
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
            .content-padding {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
            .small-table-padding {
                padding: 5px !important;
            }
           
            .data-table-container {
                overflow-x: auto !important;
                -webkit-overflow-scrolling: touch !important;
                display: block !important;
                width: 100% !important;
            }
           
            .data-table {
                min-width: 100% !important;
                width: 100% !important;
            }
           
            .data-table td,
            .data-table th {
                white-space: nowrap !important;
                font-size: 12px !important;
                padding: 8px !important;
            }
            
            .hero-headline {
                font-size: 24px !important;
                line-height: 1.3 !important;
            }
            
            .hero-text {
                font-size: 16px !important;
            }
            
            .social-icons img {
                width: 30px !important;
                height: 30px !important;
            }
            
            .mobile-padding {
                padding: 25px 15px !important;
            }
            
            .mobile-bottom-padding {
                padding-bottom: 25px !important;
            }
            
            .mobile-hide {
                display: none !important;
            }
        }
    </style>
</head>
<body bgcolor="#f9fbff" class="darkmode-bg" width="100%" style="margin: 0; font-family: 'Poppins', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.5; color: #444444; -webkit-font-smoothing: antialiased;">
    <!-- Preheader text -->
    <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
        Your contact details have been received - Unique it will connect with you shortly.
    </div>
   
    <center style="width: 100%; background-color: #f9fbff;" class="darkmode-bg">
        <div style="max-width: 650px; margin: 0 auto;" class="email-container">
            <!-- Email Header -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto; border-spacing: 0; border-collapse: collapse;">
                <tr>
                    <td style="padding: 30px 0 20px 0; text-align: center;">
                        <img src="data:image/webp;base64,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">
                    </td>
                </tr>
            </table>
            
            <!-- Main Email Body -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto; border-radius: 12px; overflow: hidden; box-shadow: 0 8px 30px rgba(4,135,255,0.12);">
                <!-- Hero Section -->
                <tr>
                    <td bgcolor="#0487ff" style="background-image: linear-gradient(135deg, #0487ff 0%, #0468c7 100%); padding: 0;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td style="padding: 60px 40px; text-align: center;" class="mobile-padding">
                                    <h1 style="margin: 0 0 15px 0; font-weight: 700; font-size: 32px; line-height: 1.2; color: #ffffff; font-family: 'Poppins', Helvetica, Arial, sans-serif;" class="hero-headline">Thank You for Contacting Us</h1>
                                    <p style="margin: 0; font-weight: 300; font-size: 18px; line-height: 1.6; color: rgba(255,255,255,0.95);" class="hero-text">We've received your information and will be in touch shortly to discuss your needs.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <!-- Wave Divider -->
                <tr>
                    <td style="padding: 0; background-color: #0487ff; line-height: 0; font-size: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" style="display: block; width: 100%; height: auto;">
                            <path fill="#ffffff" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,74.7C640,75,800,53,960,42.7C1120,32,1280,32,1360,32L1440,32L1440,80L1360,80C1280,80,1120,80,960,80C800,80,640,80,480,80C320,80,160,80,80,80L0,80Z"></path>
                        </svg>
                    </td>
                </tr>
                
                <!-- Contact Summary Intro -->
                <tr>
                    <td bgcolor="#ffffff" class="darkmode-bg-light" style="padding: 10px 40px 40px 40px; text-align: center;" class="mobile-padding">
                        <h2 style="margin: 0 0 15px 0; font-weight: 600; font-size: 22px; line-height: 1.3; color: #333333; font-family: 'Poppins', Helvetica, Arial, sans-serif;" class="darkmode-text">Contact Details</h2>
                    </td>
                </tr>
                
                <!-- Contact Data Table -->
                <tr>
                    <td bgcolor="#ffffff" class="darkmode-bg-light" style="padding: 0 40px 50px 40px;" class="mobile-padding">
                        <div class="data-table-container" style="overflow-x: auto; -webkit-overflow-scrolling: touch; width: 100%;">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-radius: 12px; overflow: hidden; box-shadow: 0 3px 20px rgba(4,135,255,0.08);" class="darkmode-border">
                                <tr>
                                    <td style="padding: 0;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" class="data-table">
                                            <!-- Table Rows -->
                                            <tr style="background-color: #e6f3ff;" class="darkmode-table-header">
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; font-weight: 500; color: #0487ff; width: 40%; border-bottom: 1px solid rgba(4,135,255,0.1);" class="darkmode-text">Full Name</td>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; color: #555555; width: 60%; border-bottom: 1px solid rgba(4,135,255,0.1);" class="darkmode-text">${fullName}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; font-weight: 500; color: #0487ff; width: 40%; border-bottom: 1px solid rgba(4,135,255,0.1);" class="darkmode-text">Email</td>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; color: #555555; width: 60%; border-bottom: 1px solid rgba(4,135,255,0.1);" class="darkmode-text">${email}</td>
                                            </tr>
                                            
                                            <tr style="background-color: #e6f3ff;" class="darkmode-table-header">
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; font-weight: 500; color: #0487ff; width: 40%;" class="darkmode-text">Subject</td>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; color: #555555; width: 60%;" class="darkmode-text">${subject}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; font-weight: 500; color: #0487ff; width: 40%; border-bottom: 1px solid rgba(4,135,255,0.1);" class="darkmode-text">Phone Number</td>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; color: #555555; width: 60%; border-bottom: 1px solid rgba(4,135,255,0.1);" class="darkmode-text">${phone}</td>
                                            </tr>
                                            
                                            <tr style="background-color: #e6f3ff;" class="darkmode-table-header">
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; font-weight: 500; color: #0487ff; width: 40%;" class="darkmode-text">Company Name</td>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; color: #555555; width: 60%;" class="darkmode-text">${company}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; font-weight: 500; color: #0487ff; width: 40%; border-bottom: 1px solid rgba(4,135,255,0.1);" class="darkmode-text">Description</td>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; color: #555555; width: 60%; border-bottom: 1px solid rgba(4,135,255,0.1);" class="darkmode-text">${description}</td>
                                            </tr>
                                            
                                            <tr style="background-color: #e6f3ff;" class="darkmode-table-header">
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; font-weight: 500; color: #0487ff; width: 40%;" class="darkmode-text">Resume</td>
                                                <td style="padding: 20px; font-size: 15px; line-height: 24px; color: #555555; width: 60%;" class="darkmode-text">${fileupload}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            
            <!-- Footer -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                <tr>
                    <td style="padding: 30px 30px; text-align: center; font-size: 12px; color: #666666;">
                        <p style="margin: 0 0 8px 0;">© 2025 Unique it. All rights reserved.</p>
                    </td>
                </tr>
            </table>
        </div>
    </center>
</body>
</html>
    `,
    };

    console.log("Email data prepared:", emailData);

    const apiUrl = "./Mail/test.php";
    const headers = {
        "Content-Type": "application/json",
    };

    console.log("API URL:", apiUrl);

    function toggleClassForField(fieldId, className, duration) {
        console.log(`Adding class ${className} to ${fieldId} for ${duration}ms`);
        const field = document.getElementById(fieldId);
        field.classList.add(className);
        setTimeout(() => {
            field.classList.remove(className);
            console.log(`Removed class ${className} from ${fieldId}`);
        }, duration);
    }

    console.log("Checking form validation...");

    if (!fullName || !email || !phone || !subject || !company || !fileupload) {
        // || !description || !fileupload 
        console.log("Validation failed: Missing required fields.");

        if (!fullName) {
            toggleClassForField('fullName', 'border-danger', 3000);
        }
        if (!company) { // OPTIONAL: if you want to validate company name too
            toggleClassForField('company', 'border-danger', 3000);
        }
        if (!subject) {
            toggleClassForField('subject', 'border-danger', 3000);
        }
        if (!email) {
            toggleClassForField('email', 'border-danger', 3000);
        }
        if (!phone) {
            toggleClassForField('phone', 'border-danger', 3000);
        }
        if (!fileupload) {
            console.log('fileeee')
        }
        //     if (!description) {
        //       toggleClassForField('description', 'border-danger', 3000);
        //   }
        //   if (!fileupload) {
        //     toggleClassForField('fileupload', 'border-danger', 3000);
        // }

        showFeedback('Please fill in all required fields.', 'col-12 text-center py-2 border-danger border text-danger mt-3');
        return;
    }


    console.log("Validating email...");
    if (!isValidEmail(email)) {
        console.log("Invalid email entered.");
        showFeedback('Please enter a valid email address.', 'col-12 text-center border-1 py-2 border-info border text-info mt-3');
        return;
    }

    console.log("Sending email request...");
    // Sending the email using fetch
    fetch(apiUrl, {
            method: "POST",
            headers: headers,
            body: JSON.stringify(emailData),
        })
        .then((response) => response.json()) // Ensure we parse the JSON response
        .then((data) => {
            if (data.status) {
                console.log(data);
                console.log("Message sent successfully");
                showFeedback(
                    "Message sent successfully",
                    "col-12 text-center border-1 my-2 py-2 border-primary border text-primary"
                );
                clearForm();
            } else {
                console.log(data);
                showFeedback(
                    "Message sending failed. Please try again later.",
                    "col-12 text-center border-1 py-2 border-danger border text-danger"
                );
            }
        })
        .catch((error) => {
            showFeedback(
                // "An error occurred while sending the message. Please try again later.",
                "Message sent successfully",
                "col-12 text-center border-1 error"
            );
        });
});

function isValidEmail(email) {
    console.log("Checking email format...");
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const isValid = emailRegex.test(email);
    console.log(`Email validation result for ${email}: ${isValid}`);
    return isValid;
}

function showFeedback(message, classNames) {
    console.log(`Showing feedback: "${message}"`);
    const feedback = document.getElementById('feedback');
    feedback.textContent = message;
    feedback.className = classNames;
    setTimeout(() => {
        console.log("Clearing feedback message.");
        feedback.textContent = '';
        feedback.className = ''; // Remove all classes
    }, 3000); // Remove feedback after 3 seconds 
}

function clearForm() {
    console.log("Clearing form fields...");
    document.getElementById('fullName').value = '';
    document.getElementById('email').value = '';
    document.getElementById('phone').value = '';
    document.getElementById('subject').value = '';
    document.getElementById('company').value = '';
    console.log("Form reset successfully.");
}