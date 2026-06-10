<!DOCTYPE html>
<html>
<head>
    <title>Laravel Welcome Page</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        /* Navbar */
        .navbar{
            background: white;
            padding: 18px 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .logo{
            font-size: 28px;
            font-weight: bold;
            color: #2563eb;
        }

        .nav-links{
            display: flex;
            gap: 35px;
        }

        .nav-links a{
            text-decoration: none;
            color: #374151;
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-links a:hover{
            color: #2563eb;
        }

        .btn{
            background: #2563eb;
            color: white;
            padding: 12px 24px;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
            font-weight: bold;
        }

        .btn:hover{
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero{
            min-height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 80px;
            background: linear-gradient(to right, #eff6ff, #dbeafe);
        }

        .hero-container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            gap: 50px;
        }

        .hero-text{
            flex: 1;
        }

        .hero-text h1{
            font-size: 65px;
            color: #111827;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .hero-text span{
            color: #2563eb;
        }

        .hero-text p{
            font-size: 20px;
            color: #6b7280;
            margin-bottom: 35px;
            line-height: 1.7;
        }

        .hero-buttons{
            display: flex;
            gap: 20px;
        }

        .primary-btn{
            background: #2563eb;
            color: white;
            padding: 14px 28px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .primary-btn:hover{
            background: #1e40af;
        }

        .secondary-btn{
            background: white;
            color: #2563eb;
            padding: 14px 28px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #2563eb;
            transition: 0.3s;
        }

        .secondary-btn:hover{
            background: #2563eb;
            color: white;
        }

        /* Hero Image */
        .hero-image{
            flex: 1;
            text-align: center;
        }

        .hero-image img{
            width: 100%;
            max-width: 500px;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">

        <div class="logo">
            MyLaravel
        </div>

        <div class="nav-links">
            <a href="/">Home</a>
            <!-- <a href="/users">Users</a> -->
             <a href="{{route('users.index')}}">Users</a>
            <a href="{{route('customers.index')}}">Customers</a>
        </div>

        <a href="#" class="btn">Login</a>

    </nav>

    <!-- Hero Section -->
    <section class="hero">

        <div class="hero-container">

            <!-- Left Content -->
            <div class="hero-text">

                <h1>
                    Build Modern Websites <span>With Laravel</span>
                </h1>

                <p>
                    Laravel helps developers create beautiful and powerful web applications faster and easier with clean and elegant code.
                </p>

                <div class="hero-buttons">
                    <a href="#" class="primary-btn">Get Started</a>
                    <a href="#" class="secondary-btn">Learn More</a>
                </div>

            </div>

            <!-- Right Image -->
            <div class="hero-image">

                <img src="https://cdn-icons-png.flaticon.com/512/2721/2721297.png" alt="Laravel">

            </div>

        </div>

    </section>

</body>
</html>