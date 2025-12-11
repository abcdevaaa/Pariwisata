<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Papua Barat Explore</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            overflow-x: hidden;
            min-height: 100vh;
            background: #f8f9fa;
        }

        /* Background untuk register page */
        .register-background {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(76, 125, 162, 0.9)), 
                        url('img/RajaAmpat.jpg') center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Register Container */
        .register-container {
            width: 100%;
            max-width: 400px;
        }

        .register-box {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 0.8s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .register-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .register-header h1 {
            color: #2C3E50;
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .register-header p {
            color: #666;
            font-size: 1rem;
        }

        .register-form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #2C3E50;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .form-group input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f9f9f9;
        }

        .form-group input:focus {
            outline: none;
            border-color: #4C7DA2;
            background: white;
            box-shadow: 0 0 0 3px rgba(76, 125, 162, 0.1);
        }

        .form-group i {
            position: absolute;
            right: 20px;
            top: 42px;
            color: #888;
        }

        .form-group small {
            display: block;
            margin-top: 5px;
            color: #666;
            font-size: 0.85rem;
        }


        .submit-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #4C7DA2, #6ba3d1);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 25px;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(76, 125, 162, 0.3);
        }

        .login-link {
            text-align: center;
            color: #666;
            font-size: 0.95rem;
        }

        .login-link a {
            color: #4C7DA2;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .login-link a:hover {
            color: #2C3E50;
            text-decoration: underline;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .register-box {
                padding: 40px 30px;
            }
            
            .register-header h1 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .register-box {
                padding: 30px 20px;
            }
            
            .register-header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="register-background">
        <div class="register-container">
            <div class="register-box">
                <div class="register-header">
                    <h1>Create Account</h1>
                    <p>Join Papua Barat Explore community</p>
                </div>
                
                <form class="register-form" action="#" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required>
                        <i class="fas fa-user"></i>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Create a password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                    
                    <button type="submit" class="submit-btn">Create Account</button>
                    
                    <div class="login-link">
                        Already have an account? <a href="login.php">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>