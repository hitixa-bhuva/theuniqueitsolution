<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | The Unique IT Solution</title>
    <!-- Add Favicon -->
    <link rel="icon" type="image/png" href="https://theuniqueitsolution.com/favicon.ico">
    <!-- Google Fonts Integration -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', Arial, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        /* 404 Content Styles */
        .error-container {
            text-align: center;
            padding: 50px 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            width: 100%;
            max-width: 800px;
        }
        
        .logo {
            margin-bottom: 30px;
        }
        
        .logo img {
            height: 60px;
            width: auto;
        }
        
        .error-code {
            font-size: 120px;
            font-weight: 700;
            color: #0487ff;
            line-height: 1;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .error-code:after {
            content: "";
            position: absolute;
            width: 100px;
            height: 5px;
            background-color: #0487ff;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 50px;
        }
        
        .error-title {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            margin-top: 20px;
        }
        
        .error-message {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .illustration {
            margin: 20px 0 40px;
            position: relative;
        }
        
        .illustration img {
            max-width: 350px;
            height: auto;
        }
        
        .btn-primary {
            display: inline-block;
            background-color: #0487ff;
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 2px solid #0487ff;
            margin-right: 15px;
        }
        
        .btn-primary:hover {
            background-color: #0d4981;
            border-color: #0d4981;
        }
        
        .btn-secondary {
            display: inline-block;
            background-color: transparent;
            color: #333;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 2px solid #ddd;
        }
        
        .btn-secondary:hover {
            border-color: #0487ff;
            color: #0487ff;
        }
        
        .buttons {
            margin-top: 20px;
        }
        
        .search-box {
            margin: 30px auto;
            max-width: 500px;
        }
        
        .search-box form {
            display: flex;
        }
        
        .search-box input {
            flex: 1;
            padding: 12px 20px;
            border: 2px solid #eee;
            border-radius: 50px 0 0 50px;
            font-size: 16px;
            outline: none;
        }
        
        .search-box input:focus {
            border-color: #0487ff;
        }
        
        .search-box button {
            background-color: #0487ff;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 0 50px 50px 0;
            cursor: pointer;
            font-size: 16px;
            border: 2px solid #0487ff;
            display: flex;
            align-items: center;
        }
        
        .search-box button i {
            margin-right: 8px;
        }
        
        .search-box button:hover {
            background-color: #0d4981;
            border-color: #0d4981;
        }
        
        .sitemap-link {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
        
        .sitemap-link a {
            color: #0487ff;
            text-decoration: none;
        }
        
        .sitemap-link a:hover {
            text-decoration: underline;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .error-code {
                font-size: 100px;
            }
            
            .error-title {
                font-size: 24px;
            }
            
            .buttons {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            
            .btn-primary, .btn-secondary {
                margin: 8px 0;
                width: 80%;
                text-align: center;
            }
            
            .illustration img {
                max-width: 260px;
            }
        }
        
        @media (max-width: 480px) {
            .error-code {
                font-size: 80px;
            }
            
            .error-title {
                font-size: 20px;
            }
            
            .error-message {
                font-size: 14px;
            }
            
            .search-box form {
                flex-direction: column;
            }
            
            .search-box input {
                border-radius: 50px;
                margin-bottom: 10px;
            }
            
            .search-box button {
                border-radius: 50px;
                justify-content: center;
            }
        }
        
        /* Animation Styles */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .illustration img {
            animation: float 4s ease-in-out infinite;
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="error-container">
       
            <div class="error-code">404</div>
            <h1 class="error-title">Oops! Page Not Found</h1>
            <p class="error-message">
                We're sorry, but the page you were looking for doesn't exist. It might have been moved, deleted, or perhaps you entered the wrong URL.
            </p>
            
            <div class="illustration">
                <img src="./assest/img/hero/404 Error-rafiki.svg" alt="404 Illustration">
            </div>
            
            <div class="search-box">
                <form action="/search" method="get">
                    <input type="text" placeholder="Search our website..." name="q">
                    <button type="submit"><i class="fas fa-search"></i> Search</button>
                </form>
            </div>
            
            <div class="buttons">
                <a href="https://theuniqueitsolution.com/" class="btn-primary"><i class="fas fa-home"></i> Back to Home</a>
                <a href="https://theuniqueitsolution.com/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Contact Support</a>
            </div>
            
            <div class="sitemap-link">
                <p>Looking for something specific? Explore our <a href="https://theuniqueitsolution.com/sitemap/">sitemap</a></p>
            </div>
        </div>
    </div>
</body>
</html>